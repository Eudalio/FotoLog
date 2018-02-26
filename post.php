<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="./node_modules/materialize-css/dist/css/materialize.min.css"  media="screen,projection"/>
			
			<!-- Import css custom -->
			<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
      
			<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
			<nav class="cyan">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo center">Projeto - Fotolog</a>
					<ul id="nav-mobile" class="left hide-on-med-and-down">
						<li class="active"><a href="post.php">Nova postagem</a></li>
						<li><a href="users.php">Usuários</a></li>
						<li><a href="fotolog.php">Fotos</a></li>
					</ul>
				</div>
			</nav>
			<main>
        <div class="container">
          <div class="row">
            <div class="col s10">
              <div class="card grey lighten-5">
                <div class="card-content">
                  <span class="card-title">
                    Poste uma nova foto!
                  </span>
                  <br>
                  <form method="POST" class="container" enctype="multipart/form-data">
                    <div class="row">
                      <div class="input-field col s6">
                        <select name="usuario_id">
                          <option value="1">João</option>
                          <option value="2">Maria</option>
                        </select>
                        <label for="usuario">Usuário</label>
                      </div>
                      <div class="file-field input-field col s6">
                        <div class="btn cyan accent-4 col s2">
                          <span><i class="material-icons center">add_a_photo</i></span>
                          <input type="file">
                        </div>
                        <div class="file-path-wrapper col s10">
                          <input type="text" class="file-path validate">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <label for="titulo">Título</label>
                        <input type="text" id="texto" name="titulo" placeholder="Coloque o seu título">
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="Mensagem" id="mensagem" cols="30" rows="10" class="materialize-textarea" placeholder="Insira sua mensagem"></textarea>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="right-align col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar
                        <i class="material-icons right">send</i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div>
			</main>

			<footer class="page-footer cyan gray-text darken-2-text">
				<div class="container"></div>
        <div class="footer-copyright">
          <div class="container">
          	© 2018 Copyright Fotolog - Developed by Eudálio Sousa
          	<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
      </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript" src="./node_modules/materialize-css/dist/js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
          $('select').material_select();
        });
      </script>
    </body>
  </html>
        