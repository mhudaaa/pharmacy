	<!-- Javascript -->
    <script src="{{ URL::asset('assets/js/Winwheel.js') }}"></script>
	<script src="{{ URL::asset('assets/js/jquery-1.12.4.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/slidebar.js') }}"></script>
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>
    <script src="{{ URL::asset('assets/js/countdown.js') }}"></script>
	<script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/p5/p5.js') }}"></script>
    <script src="{{ URL::asset('assets/js/p5/p5.dom.js') }}"></script>
    <script src="{{ URL::asset('assets/js/p5/p5.sound.js') }}"></script>
    <script src="{{ URL::asset('assets/js/p5/sketch.js') }}"></script>
    
    <script>
        var theWheel = new Winwheel({
            'numSegments'  : 8,         // Number of segments
            'outerRadius'  : 100,       // The size of the wheel.
            'centerX'      : 135,       // Used to position on the background correctly.
            'centerY'      : 160,
            'textFontSize' : 12,        // Font size.
            'segments'     :            // Definition of all the segments.
            [
               {'fillStyle' : '#eae56f', 'text' : 'Prize 1'},
               {'fillStyle' : '#89f26e', 'text' : 'Prize 2'},
               {'fillStyle' : '#7de6ef', 'text' : 'Prize 3'},
               {'fillStyle' : '#e7706f', 'text' : 'Prize 4'},
               {'fillStyle' : '#eae56f', 'text' : 'Prize 5'},
               {'fillStyle' : '#89f26e', 'text' : 'Prize 6'},
               {'fillStyle' : '#7de6ef', 'text' : 'Prize 7'},
               {'fillStyle' : '#e7706f', 'text' : 'Prize 8'}
            ],
            'animation' :               // Definition of the animation
            {
                'type'     : 'spinToStop',
                'duration' : 5,
                'spins'    : 8,
                'callbackFinished' : 'alertPrize()'
            }
        });

      	 	// Vars used by the code in this page to do power controls.
            var wheelPower    = 1;
            var wheelSpinning = false;
            
            // -------------------------------------------------------
            // Click handler for spin button.
            // -------------------------------------------------------
            function startSpin(){
                // Ensure that spinning can't be clicked again while already running.
                if (wheelSpinning == false){
                    theWheel.animation.spins = 3;
                    
                    // Disable the spin button so can't click again while wheel is spinning.
                    document.getElementById('spin_button').src       = "spin_off.png";
                    document.getElementById('spin_button').className = "";
                    
                    // Begin the spin animation by calling startAnimation on the wheel object.
                    theWheel.startAnimation();
                    
                    // Set to true so that power can't be changed and spin button re-enabled during
                    // the current animation. The user will have to reset before spinning again.
                    wheelSpinning = true;
                }
            }
            
            // -------------------------------------------------------
            // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters.
            // -------------------------------------------------------
            function alertPrize()
            {
                // Get the segment indicated by the pointer on the wheel background which is at 0 degrees.
                var winningSegment = theWheel.getIndicatedSegment();
                
                // Do basic alert of the segment text. You would probably want to do something more interesting with this information.
                alert("You have won " + winningSegment.text);
            }
    </script>
 	<script type="text/javascript">
  		new WOW().init();

  		$( document ).ready(function() {
	  		$( ".order" ).click(function() {
			  $( this ).fadeOut( "fast" );
			});

			$( ".checkout-btn" ).click(function() {
			  	$( ".order-wrap" ).fadeOut( 500 );
			  	$( ".checkout-wrap" ).fadeIn( 100 );
			});

			$(".row-link").click(function() {
		        window.location = $(this).data("href");
		    });

		});

  		// Back one page before
		function goBack() {
		    window.history.back();
		}


		// FadeOut Page Animation
		// $('a.checkout-btn').click(function(e) {
		// 	e.preventDefault();
		// 	newLocation = this.href;
		// 	$('body').fadeOut('fast', newpage);
		// 	});
		// 	function newpage() {
		// 	window.location = newLocation;
		// }

  	</script>
  	
	<!-- Timer -->
  	<script type="text/javascript">
  		$( document ).ready(function() {
	  		timer = new Countdown();
			timer.init();
		});
  	</script>

  	
</body>
</html>