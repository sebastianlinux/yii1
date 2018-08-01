<center>
	<h1>Hola Soy create!</h1>
</center>
<?php
	$form=$this->beginWidget("CActiveForm");
	echo "email <br/>". $form->textField($model,"email")."<br/>";
	echo "<br/>". $form->error($model,"email")."<br/>";
	echo "clave <br/>". $form->textField($model,"clave")."<br/>";
	echo "<br/>". $form->error($model,"clave")."<br/>";
	echo "ciudad <br/>". $form->textField($model,"ciudad")."<br/>";
	echo "<br/>". $form->error($model,"ciudad")."<br/>";
	echo CHTML::submitButton("Crear",["class"=>"btn btn-primary"]);
	$this->endWidget();
?>