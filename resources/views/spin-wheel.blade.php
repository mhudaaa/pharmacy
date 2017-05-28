@include('template/header')
<body class="bg-green">
	<div id="wrapper">
		<div class="header header-2">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<a href="/avatar"><img class="icon icon-left" src="{{ URL::asset('assets/img/icon-back.png') }}"></a>
					</div>
					<div class="col-xs-6 text-center title">
						Get Money
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xs-10 col-xs-offset-1">
				<!-- <div class="lg-divider"></div> -->
				<!-- <img src="{{ URL::asset('assets/img/wheel.png') }}"> -->

				<canvas id="canvas" width='300' height='300'>
			        Canvas not supported, use another browser.
		        </canvas>
			</div>
		</div>
	</div>

	<div id="footer" class="text-center">
		<img id="spin_button" src="spin_off.png" alt="Spin" onClick="startSpin()" />
		<!-- <button class="btn bg-white" onClick="startSpin();">Spin Wheel</button> -->
	</div>

@include('template/footer')