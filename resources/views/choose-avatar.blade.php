@include('template/header')
<body class="bg-green">
	<div id="wrapper">
		<div class="header header-2">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<a href="/name"><img class="icon-left" src="{{ URL::asset('assets/img/icon-back.png') }}"></a>
					</div>
					<div class="col-xs-6 text-center title">
						Choose Avatar
					</div>
				</div>
			</div>
		</div>

		<div class="row text-center">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="lg-divider"></div>
				<div id="myCarousel" class="carousel slide avatar" data-interval="false" data-ride="carousel">

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="{{ URL::asset('assets/img/avatar/character-1.png') }}">
						</div>

						<div class="item">
							<img src="{{ URL::asset('assets/img/avatar/character-2.png') }}">
						</div>

						<div class="item">
							<img src="{{ URL::asset('assets/img/avatar/character-3.png') }}">
						</div>

						<div class="item">
							<img src="{{ URL::asset('assets/img/avatar/character-4.png') }}">
						</div>

					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<img src="{{ URL::asset('assets/img/icon/arrow-left.png') }}">
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<img src="{{ URL::asset('assets/img/icon/arrow-right.png') }}">
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="footer" class="text-center">
		<a href="/spin"><button class="btn bg-white">Choose</button></a>
	</div>
	

	@include('template/footer')