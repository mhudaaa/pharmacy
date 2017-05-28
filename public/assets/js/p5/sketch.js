var counter = 90;


function setup() {
	noCanvas();

	var timer = select('#timer');
	var timer2 = select('#timer-2');
	timer.html(counter);
	timer2.html(counter);

	function timeIt(){
		counter--;
		timer.html(counter);
		timer2.html(counter);

		if (counter == 0) {
			// window.location.replace("/game-over");
		}
	}

	setInterval(timeIt, 1000);

}