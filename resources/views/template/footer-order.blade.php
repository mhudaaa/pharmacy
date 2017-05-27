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
		// alert(paracetamol + "-" + bodrex);
		$("#qtyPar").html("<input type='number' min='0' max='" + maxPar +"' name='paracetamol' value='" + paracetamol + "'>");
		$("#qtyNeu").html("<input type='number' min='0' max='" + maxNeu +"' name='neuralgin' value='" + neuralgin + "'>");
		$("#qtyAnt").html("<input type='number' min='0' max='" + maxAnt +"' name='antalgin' value='" + antalgin + "'>");
		$("#qtyBod").html("<input type='number' min='0' max='" + maxBod +"' name='bodrex' value='" + bodrex + "'>");
		$("#qtyKom").html("<input type='number' min='0' max='" + maxKom +"' name='komix' value='" + komix + "'>");
	}
	</script>