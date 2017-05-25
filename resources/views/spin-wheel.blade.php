@include('template/header')
<body class="bg-green">
	<div id="wrapper">
		<div class="header header-2">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<a href="/avatar"><img class="icon-left" src="{{ URL::asset('assets/img/icon-back.png') }}"></a>
					</div>
					<div class="col-xs-6 text-center title">
						Get Money
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="lg-divider"></div>
				<img src="{{ URL::asset('assets/img/wheel.png') }}">
			</div>
		</div>
	</div>

	<div id="footer" class="text-center">
		<a href="/play"><button class="btn bg-white">Spin Wheel</button></a>
	</div>
	
@include('template/footer')