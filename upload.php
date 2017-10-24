<?
require_once './Classes/PHPExcel/IOFactory.php';
$upload = $_FILES['userfile']['tmp_name'];


$objPHPExcel = PHPExcel_IOFactory::load($upload);
$a = $objPHPExcel->getActiveSheet()->toArray();
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
                        foreach ($linha as $celula) {
                            echo "<td>$celula</td>";
                        }
                        ?>
                    </tr>
                    <?
                }
            }
            ?>				

        </table>


    </body>
</html>