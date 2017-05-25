@include('template/header')
<?php
	$pr = ceil((($paracetamol[0]['jumlah']*1) + ($paracetamol[1]['jumlah']*2) + ($paracetamol[2]['jumlah']*3)) / 6);
	$ag = ceil((($antalgin[0]['jumlah']*1) + ($antalgin[1]['jumlah']*2) + ($antalgin[2]['jumlah']*3)) / 6);
	$bd = ceil((($bodrex[0]['jumlah']*1) + ($bodrex[1]['jumlah']*2) + ($bodrex[2]['jumlah']*3)) / 6);
	$dp = ceil((($diapet[0]['jumlah']*1) + ($diapet[1]['jumlah']*2) + ($diapet[2]['jumlah']*3)) / 6);
	$kx = ceil((($komix[0]['jumlah']*1) + ($komix[1]['jumlah']*2) + ($komix[2]['jumlah']*3)) / 6);
?>
<body class="bg-green">
	<div class="wave-3">
		<div id="wrapper">
			<div class="header">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-1">
						<div class="col-xs-3">
							<a href="/play"><img class="icon-left" src="{{ URL::asset('assets/img/icon-back.png') }}"></a>
						</div>
						<div class="col-xs-6 text-center title">
							Orders
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<div class="divider"></div>
					<div class="row">
						<div class="col-xs-6">
							<h6>Week : 1</h6>
						</div>
						<div class="col-xs-6 text-right">
							<h6>Day : 2</h6>
						</div>
					</div>

					<!-- Content -->
					<form method="post" action="/orders/insert">
						{{ csrf_field() }}
						<div class="content glow-black text-grey">
							<table>
								<thead>
									<th>Name</th>
									<th class="text-center">Qty</th>
									<th width="30px">Action</th>
								</thead>
								<tbody>
									<tr>
										<td>Paracetamol</td>
										<td class="text-center">{{ $pr }}</td>
										<td>
											<input type="hidden" name="pr" value="{{ $pr }}">
											<a href=""><i class="icon flaticon-signs text-green shadow"></i></a>
											<a href=""><i class="icon flaticon-access-denied text-red shadow"></i></a>
										</td>
									</tr>
									<tr>
										<td>Antalgin</td>
										<td class="text-center">{{ $ag }}</td>
										<td>
											<input type="hidden" name="ag" value="{{ $ag }}">
											<a href=""><i class="icon flaticon-signs text-green shadow"></i></a>
											<a href=""><i class="icon flaticon-access-denied text-red shadow"></i></a>

										</td>
									</tr>
									<tr>
										<td>Bodrex</td>
										<td class="text-center">{{ $bd }}</td>
										<td>
											<input type="hidden" name="bd" value="{{ $bd }}">
											<a href=""><i class="icon flaticon-signs text-green shadow"></i></a>
											<a href=""><i class="icon flaticon-access-denied text-red shadow"></i></a>
										</td>
									</tr>
									<tr>
										<td>Diapet</td>
										<td class="text-center">{{ $dp }}</td>
										<td>
											<input type="hidden" name="dp" value="{{ $dp }}">
											<a href=""><i class="icon flaticon-signs text-green shadow"></i></a>
											<a href=""><i class="icon flaticon-access-denied text-red shadow"></i></a>
										</td>
									</tr>
									<tr>
										<td>Komix</td>
										<td class="text-center">{{ $kx }}</td>
										<td>
											<input type="hidden" name="kx" value="{{ $kx }}">
											<a href=""><i class="icon flaticon-signs text-green shadow"></i></a>
											<a href=""><i class="icon flaticon-access-denied text-red shadow"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<button type="submit" class="btn bg-white pull-right">Next day</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
@include('template/header')