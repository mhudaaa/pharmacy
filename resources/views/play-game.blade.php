@include('template/header')
<body>
	<div id="wrapper">
		<div class="header header-1">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<a href="/spin"><img class="icon-left" src="{{ URL::asset('assets/img/icon-back.png') }}"></a>
					</div>
					<div class="col-xs-6 text-center title">
						Play Game
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="badge bg-green">John Smith</div>
				<div class="sm-divider"></div>
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2">
						<img src="{{ URL::asset('assets/img/character.png') }}">
					</div>	
				</div>
				<div class="divider"></div>

				<h6 class="text-green shadow medium">Hello, your money :</h6>
				<h3 class="text-green shadow light">$250</h3>

				<div class="xlg-divider"></div>
				<a href="/home">
					<button class="btn bg-green glow-green">Play Game!</button>
				</a>
			</div>
		</div>
	</div>
	
@include('template/footer')