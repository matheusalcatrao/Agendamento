<!DOCTYPE html>
<html>
<head>
	<title> Mito's Barber</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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
						<li><a class="active" href="/register">Agendamento</a></li>
					</ul>
					</div>
				</nav>
			</header>
		</div>

<section class="sec1">
	<figcaption><h3>Mito's Barber</h3></figcaption>
</section>

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

	  // Scrolling
      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


</script>

</body>
</html>