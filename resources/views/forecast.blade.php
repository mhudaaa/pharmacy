@include('template/header')
<body class="bg-green">
	<div id="wrapper">
		<div class="header">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="col-xs-3">
						<a href="/home"><img class="icon icon-left" src="{{ URL::asset('assets/img/icon-back.png') }}"></a>
					</div>
					<div class="col-xs-8 text-left title">
						Restock Medicine
					</div>
				</div>
			</div>
		</div>
		<div class="divider"></div>

		<!-- Medicine Photo -->
		<div class="row content text-center">
			<div class="col-xs-10 col-xs-offset-1">
				<img src="{{ URL::asset('assets/img/c-paracetamol@2x.png') }}">
			</div>
		</div>

		<!-- Medicine Info -->
		<div class="row content restock text-center">
			<div class="col-xs-10 col-xs-offset-1">
				<h4 class="text-uppercase montserrat bolder soft">Paracetamol</h4>
				<h5 class="montserrat medium soft">{{ $stock[0]->paracetamol }}<span class="separator">|</span> ${{ $medicine[0]->price }}</h5>
			</div>
		</div>

		<!-- Forecast Table -->
		<div class="row content">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="row">
					<div class="col-xs-7">
						<h6>Weekly Forecast - {{ Session::get('forecastWeek') }}</h6>
					</div>
					<div class="col-xs-5">
						<? $qty = count($orders); $i = 0; ?>
						<form method="post" action="/forecast/set">
							{{ csrf_field() }}
							<input type="hidden" name="id_medicine" value="1">
							<input type="hidden" name="last_week" value="{{ $orders[$qty-1]->week }}">
							<input type="hidden" name="mg1" value="{{ $orders[$qty-2]->quantity }}">
							<input type="hidden" name="mg2" value="{{ $orders[$qty-3]->quantity }}">
							<input type="hidden" name="mg3" value="{{ $orders[$qty-4]->quantity }}">
							<button type="submit" class="btn btn-xs bg-white text-green glow-black pull-right">Get</button>
						</form>
					</div>
				</div>

				<div class="card">
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
@include('template/footer')