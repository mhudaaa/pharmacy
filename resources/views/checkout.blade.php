@include('template/header')
<body id="checkout-wrap" class="bg-blue wow bounceInUp" data-wow-duration="1s" style="visibility:hidden">
	<div id="wrapper" class="bg-blue" canvas="container">
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
					<h4 id="timer" class="text-center">-</h4>
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
	
	@include('template/sidebar')

@include('template/footer')