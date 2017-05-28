@include('template/header')
<body class="bg-soft-green">
	<div id="wrapper">
		<div class="row text-center montserrat">
			<div class="col-xs-8 col-xs-offset-2">
				<div class="xxlg-divider"></div>
				<h4 class="content">Yeaay..</h4>
				<img src="{{ URL::asset('assets/img/confetti.png') }}">
				<div class="divider"></div>
				<div class="card content glow-black">
					<h4 class="text-blue">{{ Session::get('name') }}</h4>
					<h6 class="light">Has earned <b>${{ $player->money }}</b></h6>
				</div>
				<a href="/">
					<button class="btn bg-green glow-green">Play again</button>
				</a>
			</div>
		</div>
	</div>

	
@include('template/footer')