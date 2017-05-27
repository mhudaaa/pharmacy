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
				<h5 class="montserrat medium soft">37 <span class="separator">|</span> $5</h5>
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
						<a href="">
							<button class="btn btn-xs bg-white text-green glow-black pull-right">Forecast</button>
						</a>
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

		<div class="row content text-center">
			<? $qty = count($orders); $i = 0; ?>
			<div class="card text-green">
				<form method="post" action="/forecast/set">
					<input type="number" name="mg1" value="{{ $orders[$qty-1]->quantity }}">
					<input type="number" name="mg2" value="{{ $orders[$qty-2]->quantity }}">
					<input type="number" name="mg3" value="{{ $orders[$qty-3]->quantity }}">
					<button type="submit" class="btn bg-white text-green">Forecast</button>
				</form>
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