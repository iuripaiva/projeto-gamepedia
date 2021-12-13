<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Gamepedia - Resultado Trivia</title>

		<link rel="shortcut icon" href="img/favicon.ico" />

		<link href="css/estilo.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
		  // Add smooth scrolling to all links
		  $("a").on('click', function(event) {

		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){

		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		  });
		});
		</script>
	</head>
	<body>

		<style>
			body {
			  background-color: black;

			}
		</style>

		<div>
		<img class="banner" id="index" src="img/trivia-bkg.png">
			<div class="conteudo_banner">
			<h1>
				<?php

						$idade = $_GET['idade'];

						echo "<div class='texto'>";

							echo '<div id="Playstation" style="margin-left:-5vw;margin-top:13vw;width:1100px;position: absolute;">';


								$idadeps = $idade - 1994;
								$idadeps =+ - $idadeps;
									if ($idade >= 1994) {
										echo "&nbsp;&nbsp;&nbsp;&nbsp;";
										echo '<img src="img/ps-logo.png" width="100px;">';
										echo "<br>";
										echo "<h5>Você não era nascido!</h5>";
									} else {
										echo "&nbsp;&nbsp;&nbsp;&nbsp;";
										echo '<img src="img/ps-logo.png" width="100px;">';
										echo "<h5>Você tinha $idadeps anos.</h5>";
									}

							echo "</div>";


							echo '<div id="Xbox" style="margin-left:26.3vw;margin-top:13vw;width:1100px;position: absolute;">';

							$idadexb = $idade - 2001;
							$idadexb =+ - $idadexb;
								if ($idade >= 2001) {
									echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
									echo '<img src="img/xbox-logo.png" width="80px;">';
									echo '<h5>Você não era nascido!</h5>';
								} else {
									echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
									echo '<img src="img/xbox-logo.png" width="80px;">';
									echo "<h5>Você tinha $idadexb anos.</h5>";
								}

							echo "</div>";


							echo '<div id="Nintendo" style="margin-left:61vw;margin-top:12.5vw;width:1100px;position: absolute;">';

							$idadent = $idade - 1983;
							$idadent =+ - $idadent;
								if ($idade >= 1983) {
									echo "&nbsp;";
									echo '<img src="img/nintendo-logo.png" width="140px;">';
									echo '<h5>Você não era nascido!</h5>';
								} else {
									echo "&nbsp;";
									echo '<img src="img/nintendo-logo.png" width="140px;">';
									echo "<h5>Você tinha $idadent anos.</h5>";
								}

							echo "</div>";

						echo "</div>";

				?>
			</h1>
			</div>
		<div class="botao">
		<a href="trivia.html"><p class="seta" style="color: white;"><strong>Voltar</strong></p></a>
		</div>


			<div class="footer" style="margin-top: 47vw;"><p id="txtfooter" style="margin-top: 1vw;"> Desenvolvido por - <a href="https://br.linkedin.com/in/iuripaiva" style="color: white;" target="_blank">Iuri Paiva - BSI 3º Período</a>
	</div>

	</body>
</html>