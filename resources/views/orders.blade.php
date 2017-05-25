@include('template/header')
<body class="bg-blue">
	<div id="wrapper" class="bg-blue order-wrap" canvas="container">
		<div class="header">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<a href="/home"><img class="icon icon-left" src="{{ URL::asset('assets/img/icon-back.png') }}"></a>
					</div>
					<div class="col-xs-6 text-center title">
						Orders
					</div>
					<div class="col-xs-3 text-right">
						<img class="icon icon-right icon-link js-toggle-right-slidebar" src="{{ URL::asset('assets/img/icon-stock.png') }}">
					</div>
				</div>
			</div>
		</div>

		<div class="row content">
			<div class="col-xs-10 col-xs-offset-1">
				<img src="{{ URL::asset('assets/img/hospital.png') }}">
			</div>	
		</div>

		<div class="row content">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="row">
					<div class="col-xs-4">
						<h6>Week : 1</h6>
					</div>
					<div class="col-xs-4 text-center">
						<h3 class="time" id="timer">-</h3>
					</div>
					<div class="col-xs-4 text-right">
						<h6>Day : 1</h6>
					</div>
				</div>
			</div>
		</div>

		<!-- ORDERS -->
		<div id="myCarousel" class="carousel slide content" data-ride="carousel" data-interval="false">
		  <!-- Wrapper for slides -->
		  	<div class="carousel-inner">
		    	<div class="item active">
		      		<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div class="row text-center">
								<div class="col-xs-4">
									<div class="order">
										<img class="icon-order" src="{{ URL::asset('assets/img/order-paracetamol@2x.png') }}">
										<h6 class="qty">12</h6>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="order">
										<img class="icon-order" src="{{ URL::asset('assets/img/order-neuralgin@2x.png') }}">
										<h6 class="qty">5</h6>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="order">
										<img class="icon-order" src="{{ URL::asset('assets/img/order-antalgin@2x.png') }}">
										<h6 class="qty">17</h6>
									</div>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-xs-4 col-xs-offset-2">
									<div class="order">
										<img class="icon-order" src="{{ URL::asset('assets/img/order-bodrexin@2x.png') }}">
										<h6 class="qty">3</h6>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="order">
										<img class="icon-order" src="{{ URL::asset('assets/img/order-komix@2x.png') }}">
										<h6 class="qty">21</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
					  	<a class="" href="#myCarousel" data-slide="next">
					    	<button class="btn next-day-btn bg-white text-blue glow-black">Next day <img src="{{ URL::asset('assets/img/right-arrow.png') }}"></button>
					  	</a>
				  	</div>
		    	</div>
		    	<div class="item">
		      		<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<div class="row text-center">
								<div class="col-xs-4">
									<div class="order">
										<img class="icon-order" src="{{ URL::asset('assets/img/order-paracetamol@2x.png') }}">
										<h6 class="qty">22</h6>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="order">
										<img class="icon-order" src="{{ URL::asset('assets/img/order-neuralgin@2x.png') }}">
										<h6 class="qty">1</h6>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="order">
										<img class="icon-order" src="{{ URL::asset('assets/img/order-antalgin@2x.png') }}">
										<h6 class="qty">15</h6>
									</div>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-xs-4 col-xs-offset-2">
									<div class="order">
										<img class="icon-order" src="{{ URL::asset('assets/img/order-bodrexin@2x.png') }}">
										<h6 class="qty">9</h6>
									</div>
								</div>
								<div class="col-xs-4">
									<div class="order">
										<img class="icon-order" src="{{ URL::asset('assets/img/order-komix@2x.png') }}">
										<h6 class="qty">7</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
					    <button class="btn checkout-btn bg-white text-blue glow-black">Checkout</button>
				  	</div>
		    	</div>
		  	</div>
		</div>
	</div>
	
	


	<!-- CHECKOUT -->
	<div id="wrapper" class="bg-blue checkout-wrap wow bounceInUp" data-wow-duration="1s" canvas="container" style="display: none;">
		<div class="header">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<img onclick="goBack()" class="icon icon-link icon-left" src="{{ URL::asset('assets/img/icon-back.png') }}">
					</div>
					<div class="col-xs-6 text-center title">
						Order Detail
					</div>
					<div class="col-xs-3 text-right">
						<img class="icon icon-right icon-link js-toggle-right-slidebar" src="{{ URL::asset('assets/img/icon-stock.png') }}">
					</div>
				</div>
			</div>
		</div>

		<div class="row content">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="card card-lg glow-black text-blue">
					<h4 id="timer-2" class="text-center">-</h4>
					<table class="checkout"> 
						<tr>
							<td>
								<h5><img src="{{ URL::asset('assets/img/c-paracetamol@2x.png') }}"> 24</h5>
							</td>
							<td>
								<h5><img src="{{ URL::asset('assets/img/c-antalgin@2x.png') }}"> 12</h5>
							</td>
						</tr>
						<tr>
							<td>
								<h5><img src="{{ URL::asset('assets/img/c-neuralgin@2x.png') }}"> 35</h5>
							</td>
							<td>
								<h5><img src="{{ URL::asset('assets/img/c-bodrex@2x.png') }}"> 22</h5>
							</td>
						</tr>
						<tr>
							<td>
								<h5><img src="{{ URL::asset('assets/img/c-komix@2x.png') }}"> 19</h5>
							</td>
						</tr>
					</table>

					<div class="text-center">
						<a href="">
							<button class="btn bg-blue glow-blue">Sell</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- PERHITUNGAN -->
	<!-- <button value="5" onClick="get_para(this.value)">paracetamol 5</button>
	<button value="15" onClick="get_para(this.value)">paracetamol 15</button><br>
	<button value="10" onClick="get_bodrex(this.value)">bodrex 10</button><br>
	<button onClick="ok()">OK</button>

	<script type="text/javascript">
	var paracetamol = 0;
	var bodrex = 0;

	function get_para(clicked_value){
	    paracetamol += parseInt(clicked_value);
	}
	function get_bodrex(clicked_value){
	    bodrex += parseInt(clicked_value);
	}
	function ok(){
		alert(paracetamol + "-" + bodrex);
	}
	</script> -->

	@include('template/sidebar')
@include('template/footer')