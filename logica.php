<?php 

  $ciudad= array('Medellin'=>1,'Cali' => 2,'Bogota'=>3,'Bucaramanga'=>4 );

 ?>

<html>
<head>
	<title>Practica</title>
</head>
<body>
	<fieldset style="background-color:">
		<legend>PRUEBAS</legend>
	
			<form action="logica.php" method="get">
		Nombre:	<input type"text" name="nombre" >
		Apellido: <input type="text" name="apellido">
		Edad:<input type="text" name ="edad">
		Ciudad:<select name="ciudad">

		<?php 
		foreach ($ciudad as $key => $value) {?>
			
		

				<option name="<?php echo $key ?>" value="<?php echo $value; ?>"><?php echo $key; ?></option>	

					<?php }  ?>		

					
		    	</select><br><br>
		    		Observaciones:<br>
		    			<textarea name="observacion" cols="20" rows="10">
		    				
		    			</textarea>

		    		<br><br>
		    	<input type="submit" value="Enviar">







	</form>
	 </fieldset>

</body>
</html>