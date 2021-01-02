<?php 
	include '../init.php'; 
	include '../core/includes/head.php';
	if($users->signed_in()) {
	  header('Location: ../index1.php');
	  die();
	}
?>	

<div class="container">
	<div class="row">
		<div class="six offset-by-three columns auth-section">
			<h4>Entrar ou Registrar</h4>
			<p>Usando o formulário abaixo, digite seu endereço de e-mail e senha e começaremos.</p>
			<form id="auth" action="" method="post">
				<div class="row">
					<div class="six columns">
					    <input type="radio" id="radio1" name="type" value="returning_user" checked="checked">
	    				<label class="user-type" for="radio1">
	    					<b>Usuário recorrente</b>
	    					<p>Se você já se registrou antes, faça login abaixo.</p>
	    				</label>
    				</div>
				
					<div class="six columns">
					    <input type="radio" id="radio2" name="type" value="new_user">
	    				<label class="user-type" for="radio2">
	    					<b>New User</b>
	    					<p>Se você ainda não se inscreveu, você precisará fazer isso</p>
	    				</label>
    				</div>
				</div>
        <span id="alerts"></span>
				<label for="email">Endereço de e-mail</label>
				<input class="u-full-width" type="email" name="email" required autocomplete="off" placeholder="seu@domain.com" id="email">
				
				<label for="password">Senha</label>
				<input class="u-full-width" type="password" name="password" required placeholder="****" id="password">
				
				<button class="button" name="submit" type="submit">Autenticar</button>
				<button class="button" name="back" type="back" onClick="window.location.href='../';">De volta</button>
			</form>
			
		</div>
	</div>
</div>

<?php 
	include '../core/includes/foot.php'; 
?>
