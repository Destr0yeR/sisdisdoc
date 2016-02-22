$('#recuperar').on('click',function(){
	$("#myModal").modal();
});
$('#enviar').on('click',function(){
	var pass=$('#pass').val();
	var code=$('#code').val();
	console.log("d");
	if(pass!=parseInt(pass,10)){
		$('#pass-error').show().fadeOut(10000);
	}
	if(code!=parseInt(code,10)){
		$('#code-error').show().fadeOut(10000);
	}
});

$('#email').on('click',function(){
	var email=$('#email').val();
	if(email.length<=0){
		$('#email-error').show().fadeOut(10000);
	}
});