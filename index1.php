<?php 
	include 'init.php'; 
	include 'core/includes/head.php'; 
	if($users->signed_in()){
 
?>
	
<div class="container">
<div class="row home-hero">
    <div class="six offset-by-three columns">
    <?php 
	    $cookie_name = "gender";
	    if(!isset($_COOKIE[$cookie_name])) {?>
    		<img src="//gravatar.com/avatar/<?php echo md5($users->getuserinfo('email')); ?>?s=100">
    	
<?php } else {
    if($_COOKIE[$cookie_name] == 1)
    	echo $male[$m];
    else
    	echo $female[$f];
}
	    	?>
	    <h4>Olá, <?php echo $users->getuserinfo('nick_name'); ?></h4>
		<ul><div id="log">
			<li>Último Login <?php echo $time->ago($users->getuserinfo('last_login')); ?></li></div>
		</ul>
	    <a href="./settings" class="button">Editar conta</a>
	    <?php if($users->getuserinfo('user_group') == 1){ echo '<a href="./admin" class="button button-primary">Admin Painel</a>'; };?>
	    <a href="logout.php" class="button button-blank"><span class="entypo-logout"></span></a>
	</div>
</div>

<br><br>

<div class="row home-sections">
    <div class="six columns">
		<div class="section" id="new">
		    <div class="entypo-list-add"></div>
		    <b> Novo Ticket</b>
		    <p>Crie ou visualize tíquetes de suporte para receber respostas de nossa equipe.</p>
	    </div>
	</div>
	
    <div class="six columns">
		<div class="section" id="current">
			<div class="entypo-list"></div>
		    <b>Ingressos Atuais</b>
		    <p>Visualize e gerencie todos os tíquetes que podem ter respostas de nossa equipe.</p>
	    </div>
	</div>
  </div>
 
<div style="display: none" class="section_view_current">
<table class="u-full-width">
  <thead>
    <tr>
      <th>Assunto</th>
      <th>Status</th>
      <th>Última Resposta</th>
      <th>Recente</th>
    </tr>
  </thead>
  <tbody>
    <?php $tickets->my_tickets(); ?>
  </tbody>
</table>
</div>

<div style="display: none" class="section_view_new">
  <span id="create_ticket_error"></span>
	<form method="POST" id="create_ticket">
		<div class="row">
			<div class="columns six">
				<label for="subject">Assunto</label>
				<input type="text" placeholder="Subject" class="u-full-width" id="subject">
			</div>
			
			<div class="columns six">
				<label for="department">Departamento</label>
				<select id="department" class="u-full-width">
					<option disabled="disabled">Please selecione o departamento</option>
					<?php $tickets->get_departments(); ?>
				</select>
			</div>
		</div>
		
		<label for="subject">Mensagem</label>
		<textarea placeholder="Message" id="message" style="min-height:300px;" class="u-full-width"></textarea>
		
		<button type="submit" name="submit">Enviar</button>
	</form>

</div>
 
</div>



<?php 
	}else{
		header('Location: ./authenticate');
	}
	include 'core/includes/foot.php'; 
?>
