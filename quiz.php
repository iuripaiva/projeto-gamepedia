<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Gamepedia - Quiz</title>

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

	<div class="navbar">
	  <a href="index.html">Inicio</a>
	  <a href="playstation.html">Playstation</a>
	  <a href="xbox.html">Xbox</a>
	  <a href="nintendo.html">Nintendo</a>
      <div class="dropdown" style="display: inline-block;height: 1vw;">
            <a href="#" class="dropbtn" style="size: 1vw;font-size: 1vw;">Minigames</a>
            <div class="dropdown-content" style="z-index: 6;position: fixed;margin-top: 3.1vw;width: 2vw;">
                <a href="trivia.html">Trivia</a>
                <a href="quiz.php">Quiz</a>
            </div>
      </div>

	</div>


		<div>
		<img class="banner" id="index" src="img/quiz.png">
			<div class="conteudo_banner">
				<h1 style="margin-top:9vw;margin-left: 8.5vw;">QUIZ</h1> <br>
				<h6 style="margin-top: -15vw;margin-left: 11vw;">Descubra seu console ideal</h6>
			</div>

			<div class="botao">
    			<a href="#destino"><img class="seta" src="img/arrow2.gif"></a>
    		</div>

			<div id="page-wrap">
 
		<div class="texto">
		<br><br><br><br><br id="destino"><br>
	
	<form id="quiz" name="quiz" method="post" action="resultadoquiz.php">
		
            <ol>
            
                <li>
                
                    <h2>Você escolhe um console:</h2>
                    
                    <div>
                        <input type="radio" name="questao-1" id="questao-1-PS" value="PS" />
                        <label for="questao-1-PS"> Por causa dos jogos exclusivos AAA</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="questao-1" id="questao-1-NINT" value="NINT" />
                        <label for="questao-1-NINT"> Pela diversão em família</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="questao-1" id="questao-1-XBOX" value="XBOX" />
                        <label for="questao-1-XBOX"> Pela interação com a comunidade</label>
                    </div>
                    
                
                </li>
                
                <li>
                
                    <h2>Seu Joystick preferido é:</h2>
                    
                    <div>
                        <input type="radio" name="questao-2" id="questao-2-NINT" value="NINT" />
                        <label for="questao-2-NINT"> Pequeno e compartilhavel </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="questao-2" id="questao-2-PS" value="PS" />
                        <label for="questao-2-PS"> Discreto e ergonômico</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="questao-2" id="questao-2-XBOX" value="XBOX" />
                        <label for="questao-2-XBOX"> Não ligo pro tamanho, desde que seja ergonomico</label>
                    </div>
                    
                    
                </li>
                
                <li>
                
                    <h2>Seu tipo de console preferido é:</h2>
                    
                    <div>
                        <input type="radio" name="questao-3" id="questao-3-NINT" value="NINT" />
                        <label for="questao-3-NINT"> Portátil</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="questao-3" id="questao-3-XBOX" value="XBOX" />
                        <label for="questao-3-XBOX"> Uma torre grande e imponente</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="questao-3" id="questao-3-PS" value="PS" />
                        <label for="questao-3-PS"> De mesa, mas com um bom design e discreto</label>
                    </div>
                    
                
                </li>
                
                <li>
                
                    <h2>Você gosta de jogos que precisa se movimentar?
</h2>
                    
                    <div>
                        <input type="radio" name="questao-4" id="questao-4-SIM" value="SIM" />
                        <label for="questao-4-SIM"> Sim</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="questao-4" id="questao-4-NAO" value="NAO" />
                        <label for="questao-4-NAO"> Não</label>
                    </div>
                    
                    
                </li>
                
                <li>
                
                    <h2>O que mais te agrada em um jogo?</h2>
                    
                    <div>
                        <input type="radio" name="questao-5" id="questao-5-PS" value="PS" />
                        <label for="questao-5-PS"> Gráficos</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="questao-5" id="questao-5-NINT" value="NINT" />
                        <label for="questao-5-NINT"> História</label>
                    </div>

                    <div>
                        <input type="radio" name="questao-5" id="questao-5-XBOX" value="XBOX" />
                        <label for="questao-5-XBOX"> Multiplayer Online</label>
                    </div>
                    
                    
                
                </li>

                <li>
                
                    <h2>Qual desses jogos mais marcou sua infância?</h2>
                    
                    <div>
                        <input type="radio" name="questao-6" id="questao-6-NINT" value="NINT" />
                        <label for="questao-6-NINT"> Super Mario</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="questao-6" id="questao-6-PS" value="PS" />
                        <label for="questao-6-PS"> Crash Bandicoot</label>
                    </div>

                    <div>
                        <input type="radio" name="questao-6" id="questao-6-XBOX" value="XBOX" />
                        <label for="questao-6-XBOX"> Halo</label>
                    </div>
                    
                
                </li>
            
            </ol>
            <br><br>
            <input type="submit" value="Enviar" class="submitbtn" style="width: 100px;height: 30px;margin-left: 33vw;" />
		
		</form>
	<br><br><br><br><br>
	</div>
	</div>

			<div class="dropdown" style="position: absolute;z-index: 4;margin-top: -143.89vw;margin-left: 23vw; position: fixed;">
	  	  <button class="dropbtn" style="height: 3.5vw;">Minigames</button>
		  <div class="dropdown-content">
			  <a href="trivia.html">Trivia</a>
			  <a href="quiz.php">Quiz</a>
		</div>
	</div>

		<div class="footer"><p id="txtfooter" style="margin-top: 1vw;"> Desenvolvido por - <a href="https://br.linkedin.com/in/iuripaiva" style="color: white;" target="_blank">Iuri Paiva - BSI 3º Período</a>
	</div>
	</body>
</html>