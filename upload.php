<?
	set_include_path(get_include_path() . PATH_SEPARATOR . './Classes/');
	require_once './Classes/PHPExcel.php';
	require_once './Classes/PHPExcel/IOFactory.php';
	require_once './Classes/PHPExcel/Cell/AdvancedValueBinder.php';
	$upload = $_FILES['userfile']['tmp_name'];


	$objPHPExcel = PHPExcel_IOFactory::load($upload);
//	$objReader = PHPExcel_IOFactory::createReader('Excel2007');

//$objReader->setReadDataOnly(true);
//$objPHPExcel = $objReader->load($upload);
//	$x = $objPHPExcel->getActiveSheet()->getStyle('F1:F60')->getNumberFormat();
//$objPHPExcel->getActiveSheet()->getStyle('F1:F60')->getNumberFormat()->setFormatCode('dd/mm/yyyy');
	$a = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);//(null,true,true,true);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
		<table border="1">
			<?
				if (is_array($a)) {
					foreach ($a as $key => $linha) {
						?>
						<tr>
							<?
							foreach ($linha as $gey => $celula) {
								if($gey =='F' && $celula){
                            echo "<td>$celula</td>";
								} else
									echo "<td>$celula</td>";									
							}
							?>
						</tr>
						<?
					}
				}
			?>				

		</table>

		<?
			echo $_REQUEST['secao'].$_REQUEST['modulo'];
			var_dump($a);
			?>
	</body>
</html>