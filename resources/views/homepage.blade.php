@include('template/header')
<body class="bg-green">
	<div id="wrapper">
		<div class="header">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<a href="/avatar"><img class="icon icon-left" src="{{ URL::asset('assets/img/icon-close.png') }}"></a>
					</div>
					<div class="col-xs-6 text-center title">
						My Pharmacy
					</div>
					<div class="col-xs-3 text-right">
						<a href="/avatar"><img class="icon icon-right" src="{{ URL::asset('assets/img/icon-detail.png') }}"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row content">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="card text-green bold glow-black">
					<div class="row">
						<div class="col-xs-8">
							Your money :
						</div>
						<div class="col-xs-4 text-right">
							$ 250
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row content">
			<div class="col-xs-10 col-xs-offset-1">
				<h4 class="title montserrat text-center text-uppercase">Medicine Stock</h4>
				<table class="medicine-stock">
					<tr class='row-link' data-href='/forecast'>
						<td><img src="{{ URL::asset('assets/img/paracetamol.png') }}"></td>
						<td>Paracetamol</td>
						<td><h4>$5</h4></td>
						<td><div class="stock">{{ $stocks[0]->paracetamol }}</div></td>
					</tr>
					<tr>
						<td><img src="{{ URL::asset('assets/img/neuralgin.png') }}"></td>
						<td>Neuralgin</td>
						<td><h4>$3</h4></td>
						<td><div class="stock">{{ $stocks[0]->neuralgin }}</div></td>
					</tr>
					<tr>
						<td><img src="{{ URL::asset('assets/img/antalgin.png') }}"></td>
						<td>Antalgin</td>
						<td><h4>$11</h4></td>
						<td><div class="stock">{{ $stocks[0]->antalgin }}</div></td>
					</tr>
					<tr>
						<td><img src="{{ URL::asset('assets/img/bodrex.png') }}"></td>
						<td>Bodrex</td>
						<td><h4>$8</h4></td>
						<td><div class="stock">{{ $stocks[0]->bodrex }}</div></td>
					</tr>
					<tr>
						<td><img src="{{ URL::asset('assets/img/Komix.png') }}"></td>
						<td>Komix</td>
						<td><h4>$7</h4></td>
						<td><div class="stock">{{ $stocks[0]->komix }}</div></td>
					</tr>
				</table>
			</div>
		</div>

		<div class="text-center content">
			<a href="/orders">
				<button class="btn bg-white glow-black">Orders</button>
			</a>
		</div>
	</div>
@include('template/footer')