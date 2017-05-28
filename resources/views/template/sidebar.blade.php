	<div class="sidebar" off-canvas="slidebar-2 right shift">
		<h4 class="title has-subtitle montserrat">Medicine Stock</h4>
		<div class="subtitle">With expired date</div>
		<div class="row text-center">
			<div class="col-xs-6 no-padding-right">
				<div class="item">
					<img src="{{ URL::asset('assets/img/paracetamol.png') }}">
					<h5>{{ $stocks[0]->paracetamol }}</h5>
				</div>
				<small>{{ date('M, d Y', strtotime($expired[0]->expired_date)) }}</small>
			</div>
			<div class="col-xs-6 no-padding-left">
				<div class="item">
					<img src="{{ URL::asset('assets/img/neuralgin.png') }}">
					<h5>{{ $stocks[0]->neuralgin }}</h5>
				</div>
				<small>{{ date('M, d Y', strtotime($expired[1]->expired_date)) }}</small>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xs-6 no-padding-right">
				<div class="item">
					<img src="{{ URL::asset('assets/img/antalgin.png') }}">
					<h5>{{ $stocks[0]->antalgin }}</h5>
				</div>
				<small>{{ date('M, d Y', strtotime($expired[2]->expired_date)) }}</small>
			</div>
			<div class="col-xs-6 no-padding-left">
				<div class="item">
					<img src="{{ URL::asset('assets/img/bodrex.png') }}">
					<h5>{{ $stocks[0]->bodrex }}</h5>
				</div>
				<small>{{ date('M, d Y', strtotime($expired[3]->expired_date)) }}</small>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-xs-6 no-padding-right">
				<div class="item">
					<img src="{{ URL::asset('assets/img/komix.png') }}">
					<h5>{{ $stocks[0]->komix }}</h5>
				</div>
				<small>{{ date('M, d Y', strtotime($expired[4]->expired_date)) }}</small>
			</div>
		</div>
	</div>