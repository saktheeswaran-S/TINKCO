let count = 0;
let colorRawSequence = localStorage.getItem("playColors");
const colorSequence = colorRawSequence.split(',').map(color => color.trim());
console.log(colorSequence);

let userSelection = [];
let index = 0;
let continueGame = true;
let color_obj = {'red':[],'blue':[],'green':[],'yellow':[],'brown':[]}

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

  const counter = document.querySelector('#counter');
  if (colorSequence[index] == color) {
    console.log(`Color ${index + 1} mapped correctly.`);
    count = count + 10;
    counter.innerHTML = count;

    // Add green border to the selected color box
    const selectedColor = document.querySelector(`div[onclick*="${color}"]`);
    selectedColor.style.boxShadow = "0 0 5px 5px green";
    setTimeout(() => {
      selectedColor.style.boxShadow = '';
    }, 1000);
  } else {
    console.log(`Wrong color chosen for sequence number ${index + 1}`);
    const wrongColorMessage = document.createElement('div');
    wrongColorMessage.textContent = `wrong color choosed for sequence number ${index + 1}!`;
    wrongColorMessage.style.color = 'red';
    document.body.appendChild(wrongColorMessage);
    setTimeout(() => {
      document.body.removeChild(wrongColorMessage);
    }, 5000);
    continueGame = false;

    // Remove border from the previously selected colorbox
    if (index > 1) {
      const prevSelectedColor = document.querySelector(`div[onclick*="${userSelection[index - 2]}"]`);
      prevSelectedColor.style.boxShadow = '';
    }

    // Add red border to the selected color box
    const selectedColor = document.querySelector(`div[onclick*="${color}"]`);
    selectedColor.style.boxShadow = "0 0 5px 5px red";
    setTimeout(() => {
      selectedColor.style.boxShadow = '';
    }, 1000);
  }
  index++;
}

