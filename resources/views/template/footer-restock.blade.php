	<!-- Javascript -->
	<script src="{{ URL::asset('assets/js/jquery-1.12.4.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/slidebar.js') }}"></script>
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>
    <script src="{{ URL::asset('assets/js/countdown.js') }}"></script>
	<script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/p5/p5.js') }}"></script>
    <script src="{{ URL::asset('assets/js/p5/p5.dom.js') }}"></script>
    <script src="{{ URL::asset('assets/js/p5/p5.sound.js') }}"></script>
    <script src="{{ URL::asset('assets/js/p5/sketch.js') }}"></script>
    
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

 			$('#restock_qty').keyup(function(){
		       $('#total').text($('#restock_qty').val() * {{ $medicine[0]->price }});
		    });
		});

  		// Back one page before
		function goBack() {
		    window.history.back();
		}

  	</script>
</body>
</html>
