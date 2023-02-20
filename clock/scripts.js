const hoursHand = document.querySelector(".hand.hours");
const secondsHand = document.querySelector(".hand.seconds");
const minutesHand = document.querySelector(".hand.minutes");

const setRotation = (element, rotation) => {
    var x = Number(rotation);
    element.style.setProperty("--rotation", rotation);
   
}

const setClock = () => {
    var currentDate = new Date();
    var milliseconds = currentDate.getMilliseconds();
    var seconds = currentDate.getSeconds();
    var minutes = currentDate.getMinutes();
    var hours = currentDate.getHours();

    var rotationSec = (seconds * 6) + ((6 * milliseconds)/1000);
    var rotationMin = (minutes * 6) + ((6 * seconds)/60);
    var rotationHour = (hours * 30) + ((30 * minutes)/60);

    console.log(milliseconds);

    setRotation(secondsHand, rotationSec);
    setRotation(minutesHand, rotationMin);
    setRotation(hoursHand, rotationHour);

}

setClock();

setInterval(setClock, 250);