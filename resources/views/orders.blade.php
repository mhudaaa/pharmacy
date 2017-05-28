@include('template/header')

<?php
	$getPar = floor(($paracetamol[0]->forecast + rand(1, 10)) / 7);
	$getNeu = floor(($neuralgin[0]->forecast + rand(1, 10)) / 7);
	$getAnt = floor(($antalgin[0]->forecast + rand(1, 10)) / 7);
	$getBod = floor(($bodrex[0]->forecast + rand(1, 10)) / 7);
	$getKom = floor(($komix[0]->forecast + rand(1, 10)) / 7);
?>
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
						<h6>Week : {{ $week }}</h6>
					</div>
					<div class="col-xs-4 text-center">
						<h3 class="time" id="timer">-</h3>
					</div>
				</div>
			</div>
		</div>

		<!-- ORDERS -->
		<div id="myCarousel" class="carousel slide content" data-ride="carousel" data-interval="false">
		  <!-- Wrapper for slides -->
		  	<div class="carousel-inner">
		  		<? $isFirst = true ?>
		    	@for($i = 1; $i < 8; $i++)

			    	<div class="item{{{ $isFirst ? ' active' : '' }}}">
			    		<div class="day">DAY {{ $i }}</div>
			      		<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<div class="row text-center">
									<div class="col-xs-4">
										<div class="order">
											<button class="img-product" value="{{ $getPar }}" onClick="getPar(this.value)">
												<img class="icon-order" src="{{ URL::asset('assets/img/order-paracetamol@2x.png') }}">
												<h6 class="qty">{{ $getPar }}</h6>
											</button>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="order">
											<button class="img-product" value="{{ $getNeu }}" onClick="getNeu(this.value)">
												<img class="icon-order" src="{{ URL::asset('assets/img/order-neuralgin@2x.png') }}">
												<h6 class="qty">{{ $getNeu }}</h6>
											</button>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="order">
											<button class="img-product" value="{{ $getAnt }}" onClick="getAnt(this.value)">
												<img class="icon-order" src="{{ URL::asset('assets/img/order-antalgin@2x.png') }}">
												<h6 class="qty">{{ $getAnt }}</h6>
											</button>
										</div>
									</div>
								</div>
								<div class="row text-center">
									<div class="col-xs-4 col-xs-offset-2">
										<div class="order">
											<button class="img-product" value="{{ $getBod }}" onClick="getBod(this.value)">
												<img class="icon-order" src="{{ URL::asset('assets/img/order-bodrexin@2x.png') }}">
												<h6 class="qty">{{ $getBod }}</h6>
											</button>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="order">
											<button class="img-product" value="{{ $getKom }}" onClick="getKom(this.value)">
												<img class="icon-order" src="{{ URL::asset('assets/img/order-komix@2x.png') }}">
												<h6 class="qty">{{ $getKom }}</h6>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						@if($i < 7)
						<div class="text-center">
						  	<a class="" href="#myCarousel" data-slide="next">
						    	<button class="btn next-day-btn bg-white text-blue glow-black">Next day <img src="{{ URL::asset('assets/img/right-arrow.png') }}"></button>
						  	</a>
					  	</div>
					  	@else
					  	<div class="text-center">
						    <button class="btn checkout-btn bg-green glow-green" onClick="checkout()">Checkout</button>
					  	</div>
					  	@endif
			    	</div>


			    	<? $isFirst = false ?>
		    	@endfor
		  	</div>
		</div>
	</div>
	
	


	<!-- CHECKOUT -->
	<div id="wrapper" class="bg-blue checkout-wrap wow bounceInUp" data-wow-duration="1s" canvas="container" style="display: none;">
		<div class="header">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						
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
					<form method="post" type="submit" action="/orders/set">
						{{ csrf_field() }}
						<input type="hidden" name="id_player" value="1">
						<input type="hidden" name="week" value="6">
						<table class="checkout"> 
							<tr>
								<td>
									<div class="row">
										<div class="col-xs-5 no-padding-side text-center">
											<img src="{{ URL::asset('assets/img/paracetamol.png') }}">
										</div>
										<div class="col-xs-7 no-padding-left">
											<span id="qtyPar"></span>
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-xs-5 no-padding-side text-center">
											<img src="{{ URL::asset('assets/img/antalgin.png') }}">
										</div>
										<div class="col-xs-7 no-padding-left">
											<span id="qtyNeu"></span>	
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="row">
										<div class="col-xs-5 no-padding-side text-center">
											<img src="{{ URL::asset('assets/img/neuralgin.png') }}">
										</div>
										<div class="col-xs-7 no-padding-left">
											<span id="qtyAnt"></span>	
										</div>
									</div>
								</td>
								<td>
									<div class="row">
										<div class="col-xs-5 no-padding-side text-center">
											<img src="{{ URL::asset('assets/img/bodrex.png') }}">
										</div>
										<div class="col-xs-7 no-padding-left">
											<span id="qtyBod"></span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="row">
										<div class="col-xs-5 no-padding-side text-center">
											<img src="{{ URL::asset('assets/img/komix.png') }}">
										</div>
										<div class="col-xs-7 no-padding-left">
											<span id="qtyKom"></span>
										</div>
									</div>
								</td>
							</tr>
						</table>

						<div class="text-center">
							<button type="submit" class="btn bg-blue glow-blue">Sell</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="divider"></div>
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
@include('template/footer-order')
@include('template/footer')
