document.querySelector('#bt_newsletter').addEventListener('click', checkNewsletter);

function checkNewsletter(){
	if(document.querySelector('#email_newsletter').value == ""){
		alert('Informe um email para receber nossa ofertas!');	
	}else{
		alert('Parabéns, agora você receberá nossas ofertas em seu email!');
	}
}