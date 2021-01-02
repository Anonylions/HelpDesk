<?php 
	include '../init.php'; 
	include '../core/includes/head.php'; 
	if($users->getuserinfo('user_group') == 1){
?>
	
<div class="container">
	<div class="columns four admin-menu">
		<?php $admin_menu_active = "dashboard"; include 'admin_menu.php'; ?>
	</div>
	
	<div class="columns eight admin_dash admin-ticket-chart">	
		
		<div class="row" id="update">
			<div class="columns four">
				<a href="ticket_management.php">
					<div class="stat">
						<h3><?php echo $admin->count_tickets(); ?></h3>
						<h5>Tickets</h5>
					</div>
				</a>
			</div>
			
			<div class="columns four">
				<a href="user_management.php">
					<div class="stat">
						<h3><?php echo $admin->count_users(); ?></h3>
						<h5>Usuarios</h5>
					</div>
				</a>
			</div>
		
			<div class="columns four">
				<a href="site_management.php">
					<div class="stat">
						<h3><?php echo $admin->count_departments(); ?></h3>
						<h5>Departamentos</h5>
					</div>
				</a>
			</div>
		</div>
				
		<hr>
		
		<table class="u-full-width" id="update1">
		  <thead>
		  <tbody>
		    <tr>
		      <td>Número de Administradores</td>
		      <td><?php echo $admin->count_admins(); ?></td>
		    </tr>
		    <tr>
		      <td>Número de usuários</td>
		      <td><?php echo $admin->count_users(); ?></td>
		    </tr>
		    <tr>
		      <td>Número total de Tickets</td>
		      <td><?php echo $admin->count_tickets(); ?></td>
		    </tr>
			<tr>
		      <td>Número total de não respondidos Tickets</td>
		      <td><?php echo $admin->ticket_info_total('unanswered'); ?></td>
		    </tr>
			<tr>
		      <td>Número Total de Abertos Tickets</td>
		      <td><?php echo $admin->ticket_info_total('open'); ?></td>
		    </tr>
			<tr>
		      <td>Número total de Tickets Resolvido</td>
		      <td><?php echo $admin->ticket_info_total('resolved'); ?></td>
		    </tr>
			<tr>
		      <td>Data Site</td>
			  <td><?php echo date('d/m/Y'); ?></td>
		    </tr>
		    <tr>
		      <td>Hora Site</td>
			  <td><?php echo date('h:i:s a', time()); ?></td>
		    </tr>
		    <tr>
		      <td>Fuso horário do site </td>
			  <td><?php echo date_default_timezone_get(); ?></td>
		    </tr>
		  </tbody>
		</table>
		
	</div> 
</div>


	
<?php 
	}else{
		header('Location: ../');
	}
	include '../core/includes/foot.php'; 
?>
