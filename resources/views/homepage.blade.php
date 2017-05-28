@include('template/header')
@if(Session::get('week') > 6) || {{ $player->money }} >= 1000)
	<? 
		header('Location: /congrats'); 
		exit; 
	?>
@else
<body class="bg-green">
	<div id="wrapper">
		<div class="header">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<img data-toggle="modal" data-target="#exit" class="icon icon-left icon-link" src="{{ URL::asset('assets/img/icon-close.png') }}">
					</div>
					<div class="col-xs-6 text-center title">
						My Pharmacy
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
							$ {{ $player->money }}
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row content">
			<div class="col-xs-10 col-xs-offset-1">
				<h4 class="title montserrat text-center text-uppercase">Medicine Stock</h4>
				<table class="medicine-stock">
					<tr class='row-link' data-href='/forecast/1'>
						<td><img src="{{ URL::asset('assets/img/paracetamol.png') }}"></td>
						<td>Paracetamol</td>
						<td><h4>${{ $medicine[0]->price }}</h4></td>
						<td><div class="stock">{{ $stocks[0]->paracetamol }}</div></td>
					</tr>
					<tr class='row-link' data-href='/forecast/2'>
						<td><img src="{{ URL::asset('assets/img/neuralgin.png') }}"></td>
						<td>Neuralgin</td>
						<td><h4>${{ $medicine[1]->price }}</h4></td>
						<td><div class="stock">{{ $stocks[0]->neuralgin }}</div></td>
					</tr>
					<tr class='row-link' data-href='/forecast/3'>
						<td><img src="{{ URL::asset('assets/img/antalgin.png') }}"></td>
						<td>Antalgin</td>
						<td><h4>${{ $medicine[2]->price }}</h4></td>
						<td><div class="stock">{{ $stocks[0]->antalgin }}</div></td>
					</tr>
					<tr class='row-link' data-href='/forecast/4'>
						<td><img src="{{ URL::asset('assets/img/bodrex.png') }}"></td>
						<td>Bodrex</td>
						<td><h4>${{ $medicine[3]->price }}</h4></td>
						<td><div class="stock">{{ $stocks[0]->bodrex }}</div></td>
					</tr>
					<tr class='row-link' data-href='/forecast/5'>
						<td><img src="{{ URL::asset('assets/img/Komix.png') }}"></td>
						<td>Komix</td>
						<td><h4>${{ $medicine[4]->price }}</h4></td>
						<td><div class="stock">{{ $stocks[0]->komix }}</div></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="text-center content">
			<button onClick="viewOrders()" class="btn bg-white glow-black">Orders</button>
		</div>


		<div class="modal fade" id="exit">
	 		<div class="modal-dialog">
	    		<div class="modal-content glow-black">
	      			<div class="modal-body text-green">
				        <h5 class="bold">Quit Game</h5>
				        <p>are you sure?</p>
	      			</div>
	    		</div>
	    		<div class="row action">
	        		<button onClick="location.href='/gameover'" class="btn btn-xs bg-green glow-green pull-right">Quit</button>
	        		<button type="submit" class="btn btn-xs bg-transparent pull-right" data-dismiss="modal">Cancel</button>
	        	</div>
	  		</div>
		</div>

	</div>
@include('template/footer-home')
@include('template/footer')
@endif