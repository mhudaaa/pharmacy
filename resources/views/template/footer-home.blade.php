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
			  title: "<small class='montserrat'>Can't play game</small>",
			  text: "<small><small class='montserrat'>Please <span style='color:#F8BB86'><b>Forecast</b></span> order before<br>playing game</small></small>",
			  timer: 3000,
			  showConfirmButton: false,
			  html: true
			});
		} else{
			window.location.replace("/orders");
		}
	}

	// function gameOver(){
	// 	// swal({
	// 	//   title: "<small class='montserrat' style='color:#F8BB86'>Game Over</small>",
	// 	//   text: "{{ Session::get('name') }}",
	// 	//   timer: 3000,
	// 	//   showConfirmButton: false,
	// 	//   html: true
	// 	// });
	// 	swal({
	// 		  title: "<small class='montserrat' style='color:#F8BB86'>Quit Game?</small>",
	// 		  text: "<small><small>Are you sure?</small></small>",
	// 		  showCancelButton: true,
	// 		  confirmButtonColor: "#DD6B55",
	// 		  confirmButtonText: "Yes, delete it!",
	// 		  closeOnConfirm: false,
	// 		  html: true
	// 		},
	// 		function(){
	// 			location.href='/gameover'
	// 		});
	// }

	</script>