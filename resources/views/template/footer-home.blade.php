<script type="text/javascript">
	function viewOrders(){
		var week = {{ Session::get('week') }};
		if(
			week > {{ Session::get('forecastWeekPar') }} || 
			week > {{ Session::get('forecastWeekNeu') }} || 
			week > {{ Session::get('forecastWeekAnt') }} || 
			week > {{ Session::get('forecastWeekBod') }} || 
			week > {{ Session::get('forecastWeekKom') }} 
			) {
			swal({
			  title: "<small class='montserrat'>Cannot play game</small>",
			  text: "<small><small class='montserrat'>Please <span style='color:#F8BB86'><b>Forecast</b></span> order before<br>playing game</small></small>",
			  timer: 2000,
			  showConfirmButton: false,
			  html: true
			});
		} else{
			window.location.replace("/orders");
		}
	}

	</script>