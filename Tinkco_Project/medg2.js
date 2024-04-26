let count = 0;
let colorRawSequence = localStorage.getItem("playColors");
const colorSequence = colorRawSequence.split(',').map(color => color.trim());
console.log(colorSequence);

let userSelection = [];
let index = 0;
let continueGame = true;
let color_obj={'red':[],'blue':[],'green':[],'yellow':[],'brown':[]}

const selectColor = color => {
  if (!continueGame) return console.log('END');

  if (index === colorSequence.length) {
    continueGame = false;
    return console.log('END');
  }

  userSelection.push(color);
  color_obj[color].push(index);

  for (const [key, value] of Object.entries(color_obj)) {
    document.getElementById(key).innerHTML = value.join(', ');
  }

  console.log(color_obj);
  console.log(userSelection);

  const counter = document.querySelector('#counter');
  if (colorSequence[index] == userSelection[index]) {
    console.log(`Color ${index + 1} mapped correctly.`);
    count = count + 10;
    counter.innerHTML = count;
  } else {
    console.log(`Wrong color chosen for sequence number ${index + 1}`);
    const wrongColorMessage = document.createElement('div');
    wrongColorMessage.textContent = `wrong color choosed for sequence number ${index + 1}!`;
    wrongColorMessage.style.color = 'red';
    document.body.appendChild(wrongColorMessage);
    setTimeout(() => {
      document.body.removeChild(wrongColorMessage);
    }, 100000);
    continueGame = false;
  }
  index++;
}

// rest of the code