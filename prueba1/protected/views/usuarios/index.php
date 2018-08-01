<center>
	<h1>
		Bienvenido a la vista usuario
	</h1>
	<h6><?php echo CHtml::link("Crear nuevo usuario",["create"]); ?></h6>
	<h6><?php echo Chtml::link('Actualizar un usuario',["update"]) ?></h6>
	<br>
	<br>
	<br>
	<div>
		<?php
			foreach($usuarios as $key => $value){
				echo "<h3>".$value->email."</h3>";
				echo Chtml::link('Actualizar',["update","id"=>$value->id]); 
				echo "<br/>";
				echo Chtml::link('Borrar',["delete","id"=>$value->id],["confirm"=>"Esta seguro que desea eliminar este usuario?"]); 
				echo "<br/><br/>";
			}
		?>
	</div>
</center>