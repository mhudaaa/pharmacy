<script type="text/javascript">
	var paracetamol = 0;
	var neuralgin = 0;
	var antalgin = 0;
	var bodrex = 0;
	var komix = 0;
	var maxPar = {{ $paracetamol[0]->forecast + 7 }};
	var maxNeu = {{ $neuralgin[0]->forecast + 7 }};
	var maxAnt = {{ $antalgin[0]->forecast + 7 }};
	var maxBod = {{ $bodrex[0]->forecast + 7 }};
	var maxKom = {{ $komix[0]->forecast + 7 }};
	var stockBod = {{ $stocks[0]->bodrex }};

	function getPar(clicked_value){
	    paracetamol += parseInt(clicked_value);
	}
	function getNeu(clicked_value){
	    neuralgin += parseInt(clicked_value);
	}
	function getAnt(clicked_value){
	    antalgin += parseInt(clicked_value);
	}
	function getBod(clicked_value){
	    bodrex += parseInt(clicked_value);
	}
	function getKom(clicked_value){
	    komix += parseInt(clicked_value);
	}

	function checkout(){
		$("#qtyPar").html("<input id='paracetamol' type='number' min='0' max='" + maxPar +"' name='paracetamol' value='" + paracetamol + "'>");
		$("#qtyNeu").html("<input id='neuralgin' type='number' min='0' max='" + maxNeu +"' name='neuralgin' value='" + neuralgin + "'>");
		$("#qtyAnt").html("<input id='antalgin' type='number' min='0' max='" + maxAnt +"' name='antalgin' value='" + antalgin + "'>");
		$("#qtyBod").html("<input id='bodrex' type='number' min='0' max='" + maxBod +"' name='bodrex' value='" + bodrex + "'>");
		$("#qtyKom").html("<input id='komix' type='number' min='0' max='" + maxKom +"' name='komix' value='" + komix + "'>");
	}

	function sell(){
		paracetamol = document.getElementById("paracetamol").value;
		neuralgin = document.getElementById("neuralgin").value;
		antalgin = document.getElementById("antalgin").value;
		bodrex = document.getElementById("bodrex").value;
		komix = document.getElementById("komix").value;

		if(
			paracetamol > {{ $stocks[0]->paracetamol }} ||
			neuralgin > {{ $stocks[0]->neuralgin }} ||
			antalgin > {{ $stocks[0]->antalgin }} ||
			bodrex > {{ $stocks[0]->bodrex }} ||
			komix > {{ $stocks[0]->komix }}
			) {
			swal("", "Not enough stock", "error");
		} else if(
			paracetamol < ceil(({{ $stocks[0]->paracetamol }} / 2)) ||
			neuralgin < ceil(({{ $stocks[0]->neuralgin }} / 2)) ||
			antalgin < ceil(({{ $stocks[0]->antalgin }} / 2)) ||
			bodrex < ceil(({{ $stocks[0]->bodrex }} / 2)) ||
			komix < ceil(({{ $stocks[0]->komix }} / 2))
			){
			swal("", "Cannot submit order", "error");
		} else{
			document.getElementById("orderForm").submit();
		}
	}

	</script>