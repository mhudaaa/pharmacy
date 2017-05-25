@include('template/header')
<body>
	<div id="wrapper">
		<div class="header header-1">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<a href="/"><img class="icon-left" src="{{ URL::asset('assets/img/icon-back.png') }}"></a>
					</div>
					<div class="col-xs-6 text-center title">
						Start Game
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="lg-divider"></div>
				<h5>Enter your name</h5>
				<form action="/avatar" method="" autocomplete="off">
					<input type="text" name="nama" maxlength="20px"><br><br>
					<button type="submit" class="btn bg-green glow-green pull-right">Next</button>
				</form>
			</div>
		</div>
	</div>
	
@include('template/footer')