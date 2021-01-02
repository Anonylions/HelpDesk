<?php 
	include '../init.php'; 
	include '../core/includes/head.php'; 
	if($users->getuserinfo('user_group') == 1){
	if (isset($_GET['department']) && $admin->department_exists($_GET['department'])){ 
?>
	
    <div class="container">
        <div class="row">
            <div class="columns four admin-menu">
                <?php $admin_menu_active = "site_management"; include 'admin_menu.php'; ?>
            </div>
            
            <div class="columns eight">
	            <h4>Editar departamento &mdash; <?php echo $admin->department_info($_GET['department'], 'name'); ?></h4>
	            <span id="dptERR"></span>
	            <form id="dptform">
		            <input type="text" placeholder="Department Name" id="dept_new" value="<?php echo $admin->department_info($_GET['department'], 'name'); ?>" class="u-full-width">
		            <button type="submit" name="update">Atualizar Departamento</button>
		            <button id="delete_dpt" class="button button-blank" name="delete">Delete "<?php echo $admin->department_info($_GET['department'], 'name'); ?>"</button>
		        </form>
		        <div class="alert"><b>Observação: </b> a exclusão de um departamento excluirá todos os tickets associados a ele.</div>
			</div>
        </div>
	</div>

<?php }else{ ?>
	
<div class="container">
	<div class="row">
		<div class="four columns admin-menu">
			<?php $admin_menu_active = "site_management"; include 'admin_menu.php'; ?>
		</div>
		
		<div class="eight columns settings-forms">		
		  <?php if(isset($_GET['success'])) { echo '<div class="alert success">Your department has been deleted successfully.</div>'; }?>
			<div class="accordionButton">Departamentos</div>
			<div class="accordionContent">
				<table class="u-full-width departments-table">
					<thead>
						<tr>
							<th>#</th>
							<th>Nome</th>
							<th>Editar</th>
    					</tr>
  					</thead>
  					<tbody id="all_departments">
  						<?php echo $admin->all_departments(); ?>
  					</tbody>
				</table>
			<form method="post" id="add_department">
				<div class="row">
					<div class="columns ten">
						<input class="u-full-width" type="text" placeholder="New Department Name" id="dpt" name="department">
					</div>
					
					<div class="columns two">
						<button class="button u-full-width" type="submit" name="add_department">Adcionar</button>
					</div>
				</div>	
			</form>	
			</div>

			<div class="accordionButton">Acessibilidade</div>
			<div class="accordionContent admin-accessibility">
				<div class="row">
					<div class="columns eight"> Permitir que os usuários excluam a conta automaticamente</div>
					
					<div class="columns four">
						<input type="checkbox" name="allow_self_delete" id="allow_self_delete" class="toggler">
						<label for="allow_self_delete"></label>
					</div>
				</div>
				
				<div class="row">
					<div class="columns eight">Permitir que os usuários façam login</div>
					
					<div class="columns four">
						<input type="checkbox" name="allow_signin" id="allow_signin" class="toggler">
						<label for="allow_signin"></label>
					</div>
				</div>
				
				<div class="row">
					<div class="columns eight">Permitir que novos usuários se registrem </div>
					
					<div class="columns four">
						<input type="checkbox" name="allow_register" id="allow_register" class="toggler">
						<label for="allow_register"></label>
					</div>
				</div>
				
				<div class="row">
					<div class="columns eight">Ativar proteção de contas de spam </div>
					
					<div class="columns four">
						<input type="checkbox" name="enable_protection" id="enable_protection" class="toggler">
						<label for="enable_protection"></label>
					</div>
				</div>
			</div>
			
			<div class="accordionButton">Sobre</div>
			<div class="accordionContent">
					<ul>
						<li>Version 1.0</li>
					</ul>

					
			</div>
		</div>
	</div>
</div>

<?php 
	}
	}else{
		header('Location: ../');
	}
	include '../core/includes/foot.php'; 
?>