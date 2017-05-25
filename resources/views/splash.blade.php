@include('template/header')
<body>
	<div id="wrapper">
		<div class="starter">
			<img src="{{ URL::asset('assets/img/login-logo.png') }}">
		</div>
		<div class="row text-center">
			<div class="col-xs-8 col-xs-offset-2">
				<div class="lg-divider"></div>
				<a href="/name">
					<button class="btn bg-green btn-block glow-green">Start Game</button>
				</a>
				<small class="text-grey">About this game</small>
			</div>
		</div>
	</div>
@include('template/footer')