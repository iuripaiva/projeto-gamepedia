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

		    
		    if (this.hash !== "") {
		      
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){

		        
		        window.location.hash = hash;
		      });
		    } // End if
		  });
		});
		</script>
	</head>
	<body>

    <div>
    <img class="banner" id="topo" src="img/quiz.png">
        <div class="conteudo_banner" style="margin-left:3vw;margin-top:-53vw;">
        <h1>RESULTADO</h1>
        </div>
    </div>

    <div class="botao">
    <a href="#destino"><img class="seta" src="img/arrow2.gif"></a>
    </div>

		<div style="margin-top: 60vw;">

        
            <?php
                
                $resp1 = $_POST['questao-1'];
                $resp2 = $_POST['questao-2'];
                $resp3 = $_POST['questao-3'];
                $resp4 = $_POST['questao-4'];
                $resp5 = $_POST['questao-5'];
                $resp6 = $_POST['questao-6'];
            
                $totalPS = 0;
                $totalNINT = 0;
                $totalXBOX = 0;
                
                if ($resp1 == "PS") { $totalPS++; }
                if ($resp1 == "NINT") { $totalNINT++; }
                if ($resp1 == "XBOX") { $totalXBOX++; }

                if ($resp2 == "PS") { $totalPS++; }
                if ($resp2 == "NINT") { $totalNINT++; }
                if ($resp2 == "XBOX") { $totalXBOX++; }

                if ($resp3 == "PS") { $totalPS++; }
                if ($resp3 == "NINT") { $totalNINT++; }
                if ($resp3 == "XBOX") { $totalXBOX++; }

                if ($resp4 == "SIM") { $totalXBOX++; $totalNINT++; }
                if ($resp4 == "NAO") { $totalPS++; }

                if ($resp5 == "PS") { $totalPS++; }
                if ($resp5 == "NINT") { $totalNINT++; }
                if ($resp5 == "XBOX") { $totalXBOX++; }

                if ($resp6 == "PS") { $totalPS++; }
                if ($resp6 == "NINT") { $totalNINT++; }
                if ($resp6 == "XBOX") { $totalXBOX++; }
                
                if ($totalPS > $totalNINT && $totalPS > $totalXBOX) { 
                    
                    echo '<div class="texto"><h2> Seu console ideal ?? o <em>PLAYSTATION!</em></h2>';
                    echo '<br>';
                    echo '<h4> Voc?? gosta de um console de mesa que ?? discreto, e tem jogos exclusivos com ??timos gr??ficos e uma excelente hist??ria, mas n??o liga tanto pro multiplayer.</h4></div>'; 
                    echo "<br>";
                    echo '<div class="botao">
                <a href="quiz.php"><p style="color: white;margin-top: 3vw;margin-left:47vw;"><strong>Voltar</strong></p></a>
                </div>';

                } elseif ($totalNINT > $totalPS && $totalNINT > $totalXBOX) { 
                    
                    echo '<div class="texto"><h2> Seu console ideal ?? o <em>NINTENDO!</em></h2>'; 
                    echo '<br>';
                    echo '<h4> Voc?? gosta de jogos com grandes hist??rias, independente dos gr??ficos. E curte jogos interativos tamb??m, al??m da possibilidade de poder levar seu console pra qualquer lugar sem muita dificuldade.</h4></div>';
                    echo "<br>";
                    echo '<div class="botao">
                <a href="quiz.php"><p style="color: white;margin-top: 3vw;margin-left:47vw;"><strong>Voltar</strong></p></a>
                </div>';

                } elseif ($totalXBOX > $totalNINT && $totalXBOX > $totalPS) { 
                    
                    echo '<div class="texto"><h2> Seu console ideal ?? o <em>XBOX!</em></h2>'; 
                    echo '<br>';
                    echo '<h4> Voc?? n??o se importa com o tamanho do seu console, desde que ele cumpra com o que promete. E ele sempre cumpre. <br> Voc?? tamb??m gosta de gr??ficos, gameplay interativa e um joystick um pouco maior que o normal, mas ainda assim bastante ergon??mico para que voc?? fique horas jogando online seus games favoritos.</h4></div>';
                    echo "<br>";
                    echo '<div class="botao">
                <a href="quiz.php"><p style="color: white;margin-top: 3vw;margin-left:47vw;"><strong>Voltar</strong></p></a>
                </div>';

                }

                
            ?>
        
                
                <br><br><br><br><br><br><br><br><br><br id="destino">

        </div>


            <div class="footer"><p id="txtfooter" style="margin-top: 1vw;"> Desenvolvido por - <a href="https://br.linkedin.com/in/iuripaiva" style="color: white;" target="_blank">Iuri Paiva - BSI 3?? Per??odo</a>
    </div>

	</body>
</html>