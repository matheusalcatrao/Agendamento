<!DOCTYPE html>
<html>
<head>
	<title> Mito's Barber</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
	
	<!-- <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.7/dist/sweetalert2.all.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

		<div class="wrapper">
			<header>
				<nav>			
					<div class="logo">Mito's</div>
					<div class="menu">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#footer">Contatos</a></li>
						
						<li><a class="active" data-toggle="modal" href="{{ url('/servico') }}" onclick="CarregaServicos()" data-target="#exampleModalCenter">Agendamento</a></li>
						
					</ul>
					</div>
				</nav>
			</header>
		</div>

<section class="sec1">
	<figcaption><h3>Mito's Barber</h3></figcaption>
</section>
<div class="container">
@include('include.modal')
</div>

<section class="cont">

	<div class="titulo">Mitos em:</div>
	<div class="quadros">
		<div class="medida">
			<section class="servs">
				<img class="obra" src="img\barba.jpg"/>
				<h2>Barba</h2>
				<p>Profissionais especialistas em todos os tipos de barbas.</p>
				<p>Dos modelos Vintage da moda aos agocêntricos Mustaches, é só falar que nossa equipe faz!</p>
			</section>
		</div>
		<div class="medida">
			<section class="servs">
				<img class="obra" src="img\cabelo.jpg">
				<h2>Cabelo</h2>
				<p>De cortes a tingimentos, nós sabemos o que fazer</p>
				<p>Quer aquele degradê estiloso, ou a manutenção da cabeleira longa? Ajeitar o topete? Vai de Dreads? Você é quem manda!</p>
			</section>
		</div>	
	</div>



</section>	


<section id="footer" class="footer">

	<div class="dados">
	<section class="cima">
	
		<div class="social">
			<h4 class="social">Redes</h4>
			<p>
				<a href="https://www.facebook.com/equipesolucoesinteligentes/" target="_blank">Facebook/MitosBarber</a><br/><br/>
				<a href="https://www.instagram.com/equipesolucoes/" target="_blank">Instagram/MitosBarber</a>
			</p>
		</div>
		<div class="mail">
			<h4 class="mail">Email</h4>
			<p>
				mitos@barbershop.com
			</p>
		</div>
	</section>
	<section class="baixo">
		<div class="tel">
			<h4 class="tel">Telefones</h4>
			<p>
				(11) 2137-5818 <br />
				(11) 2137-5840 <br />
				(11) 99262-2079 WhatsApp
			</p>
		</div>
		<div class="end">
			<h4 class="end">Endereço</h4>
			<p>
				Rua Rosali, 520 <br />
				Vila Maranduba - Guarulhos, SP
			</p>
		</div>
	</section>	
	</div>

</section>

<script type="text/javascript">
	var dados = [3];
	var count = 0;
	while(count < 3) {
		dados[count] = "";
		count = count + 1;
	}
	 
	// Scrolling
	$(window).on("scroll", function() {
		if($(window).scrollTop()) {
		  $('nav').addClass('black');
		}
		else {
		  $('nav').removeClass('black');
		}
    });
	$(function () {
		$('#datetimepicker4').datetimepicker({
			format: 'L'
        });
	});
	function CarregaServicos(){
		$('#Servicos').show();
		$('#Data').hide();
	}
	function Alert() {
		var contaPosicao = 0;
		var erro = false; 
		while (contaPosicao < 3) {
			if (dados[contaPosicao] == "") {
				erro = true;
				swal({
				type: 'error',
				title: 'Atenção',
				text: 'Preencha todos os campos',
				})
			}
			contaPosicao = contaPosicao + 1; 
		};
		if (erro == false) {
		swal({
		title: 'Confirmação',
		text: "O serviço foi agendado",
		type: 'success',
		}).then((result) => {
		if (result.value) {
			count = 0
			while(count < 3) {
				dados[count] = "";
				count = count + 1;
			}
			window.location.href = "/grava";
		}
		})
		};
	}
	function CarregaDataHora(){
		$('#exampleModalLongTitle').html('Data Hora');
		//$('#Servicos').addClass('rollOut');
		$('#Servicos').hide();
		$('#Data').show();
	}
	
	$('button').click(function() {
		var servico = $(this).val();
		dados[0] = servico;
		console.log(dados[0]);
		
	});
	$('input').click(function () {
		var data = $(this).val();
		dados[1] = data;
		console.log(dados[1]);
	});
	$('th').click(function () {
		var hora = $(this).text();
		dados[2] = hora;
		console.log(dados[2]);
		console.log(dados);
		document.cookie = "servico="+dados[0];
		document.cookie = "data="+dados[1];
		document.cookie = "horario="+dados[2];
	});
	

		
</script>
</body>
</html>