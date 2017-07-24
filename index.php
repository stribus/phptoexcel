<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
		<form enctype="multipart/form-data" action="upload.php" method="POST">
			<!-- MAX_FILE_SIZE deve preceder o campo input -->
<!--			<input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
			<br>
			<!-- O Nome do elemento input determina o nome da array $_FILES -->
			<?php 
				$a = array(
						'xlsx'=>'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','xls'=>'application/vnd.ms-excel',					
				);
				
				
				?>
			Enviar esse arquivo:<br>
			<input name="userfile" type="file" accept="<?php  echo implode(',', $a); ?>" />
			<br>
			
			<input type="submit" value="Enviar arquivo" />
    </body>
</html>
