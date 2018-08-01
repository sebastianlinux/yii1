<center>
	<h3>Welcome to update Usuarios</h3>
</center>

<?php
	echo "<b> actualizando el id ".$model->id."</b>";
	$form=$this->beginWidget("CActiveForm");
	echo "email <br/>". $form->textField($model,"email")."<br/>";
	echo "<br/>". $form->error($model,"email")."<br/>";
	echo "clave <br/>". $form->textField($model,"clave")."<br/>";
	echo "<br/>". $form->error($model,"clave")."<br/>";
	echo "ciudad <br/>". $form->textField($model,"ciudad")."<br/>";
	echo "<br/>". $form->error($model,"ciudad")."<br/>";
	echo CHTML::submitButton("Actualizar",["class"=>"btn btn-primary"]);
	$this->endWidget();
?>