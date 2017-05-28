@include('template/header')
<body class="bg-green">
	<div id="wrapper">
		<div class="header">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<a href="/home"><img class="icon icon-left" src="{{ URL::asset('assets/img/icon-back.png') }}"></a>
					</div>
					<div class="col-xs-6 text-center title">
						Restock
					</div>
					<div class="col-xs-3 text-right title">
						${{ $player[0]->money }}
					</div>
				</div>
			</div>
		</div>
		<div class="divider"></div>

		<!-- Medicine Photo -->
		<div class="row content text-center">
			<div class="col-xs-10 col-xs-offset-1">
				<img src="../assets/img/c-{{ $medicine[0]->medicine }}@2x.png">
			</div>
		</div>

		<!-- Medicine Info -->
		<div class="row content restock text-center">
			<div class="col-xs-10 col-xs-offset-1">
				<h4 class="text-uppercase montserrat bolder soft">{{ $medicine[0]->medicine }}</h4>
				<h5 class="montserrat medium soft">{{ $medicineStock }}<span class="separator">|</span> ${{ $medicine[0]->price }}</h5>
			</div>
		</div>

		<!-- Forecast Table -->
		<div class="row content">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="row">
					<div class="col-xs-7">
						<h6>Weekly Forecast</h6>
					</div>
					<div class="col-xs-5">
						<? $qty = count($orders); $i = 0; ?>
						<form method="post" action="/forecast/set/{{ $idMedicine }}">
							{{ csrf_field() }}
							<input type="hidden" name="id_medicine" value="{{ $idMedicine }}">
							<input type="hidden" name="last_week" value="{{ $orders[$qty-1]->week }}">
							<input type="hidden" name="mg1" value="{{ $orders[$qty-2]->quantity }}">
							<input type="hidden" name="mg2" value="{{ $orders[$qty-3]->quantity }}">
							<input type="hidden" name="mg3" value="{{ $orders[$qty-4]->quantity }}">
							<button type="submit" class="btn btn-xs bg-white text-green glow-black pull-right">Get</button>
						</form>
					</div>
				</div>
				<div class="card">
					@if(Session::has('message'))
						<div class="alert alert-danger">
							<button type="button" aria-hidden="true" data-dismiss="alert" aria-label="close" class="close">×</button>
							<small>{{ Session::get('message') }}</small>
						</div>
					@endif
					<div class="row">
						<div class="col-xs-7">
							<table class="restock-table">
								<thead>
									<th>Week</th>
									<th>Sales</th>
								</thead>
								<tbody>
									@foreach($orders as $order)
									<tr>
										<td>{{ $order->week }}</td>
										<td>{{ $order->quantity }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="col-xs-5">
							<table class="restock-table">
								<thead>
									<th>Forecast</th>
								</thead>
								<tbody>
									
									<tr><td>-</td></tr>
									<tr><td>-</td></tr>
									<tr><td>-</td></tr>
									@foreach($forecasts as $forecast)
										<tr>
											@if($forecasts->last() === $forecast)
												<td><h4 class="text-green montserrat shadow">{{ $forecast->forecast }}</h4></td>
											@else
												<td>{{ $forecast->forecast }}</td>
											@endif
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row content text-center">
			<button class="btn bg-white text-green" data-toggle="modal" data-target="#modal">Restock</button>
		</div>
		<div class="modal fade" id="modal">
	        <form method="post" action="/restock/set/{{ $idMedicine }}">
	        	{{ csrf_field() }}
		 		<div class="modal-dialog">
		    		<div class="modal-content glow-black">
		      			<div class="modal-body text-green">
					        <h5 class="bold">Paracetamol</h5>
					        <hr>
				        	<div class="row">
				        		<div class="col-xs-4 text-center">
				        			<h6>Qty</h6>
				        			<input type="number" min="0" max="50" id="restock_qty" name="restock_qty">
				        		</div>
				        		<div class="col-xs-4 text-center">
				        			<h6>Price</h6>
				        			<p>${{ $medicine[0]->price }}</p>
				        		</div>
				        		<div class="col-xs-4 text-center">
				        			<h6>Total</h6>
				        			<p class="bold montserrat">$<span id="total"></span></p>
				        			
				        			<input type="hidden" name="price" value="{{ $medicine[0]->price }}">
				        			<input type="hidden" name="money" value="{{ $player[0]->money }}">
				        		</div>
				        	</div>
		      			</div>
		    		</div>
		    		<div class="row action">
		        		<button type="submit" class="btn btn-xs bg-green glow-green pull-right">Restock</button>
		        		<button class="btn btn-xs bg-transparent pull-right" data-dismiss="modal">Cancel</button>
		        	</div>
		  		</div>
	        </form>
		</div>
	</div>

<!-- 

$numItems = count($arr);
$i = 0;
foreach($arr as $key=>$value) {
  if(++$i === $numItems) {
    echo "last index!";
  }
}     

-->
@include('template/footer-restock')