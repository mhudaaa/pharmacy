@include('template/header')
<body class="bg-soft-green">
	<div id="wrapper">
		<div class="row text-center">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="xxlg-divider"></div>
				<h4 class="content">Uuuh... Game Over</h4>
				<img src="{{ URL::asset('assets/img/game-over@2x.png') }}">
				<div class="xlg-divider"></div>
				<a href="/">
					<button class="btn bg-green glow-green">Play again</button>
				</a>
			</div>
		</div>
	</div>

	
@include('template/footer')