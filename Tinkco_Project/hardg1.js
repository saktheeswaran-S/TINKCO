let circle = document.querySelector('.circle');
let colors = [ 'red', 'blue', 'green','yellow','brown'];

const updateCounter = count => {
    let counter =document.querySelector('#counter');
    counter.innerHTML = count;
}
let playColors = [];


const changeColor = colors => {
    let color = colors[(Math.floor(Math.random() * colors.length))]
    console.log(color)
    playColors.push(color)
    updateCounter(playColors.length)
    circle.style.backgroundColor = color;
}
let changeColorTimer;

const startGame = () => {
    console.log("Start")
    const gameBtn =document.querySelector('#gameBtn');
    gameBtn.setAttribute( "onClick", 'stopGame()' );
    gameBtn.innerHTML='Stop Game';
    changeColorTimer  = setInterval(() => {
        changeColor(colors)
    }, 500);
}

const stopGame = () => {
        clearTimeout(changeColorTimer)
        console.log('Game Stoped...')
        console.log(playColors)
        localStorage.setItem('playColors',playColors)
}