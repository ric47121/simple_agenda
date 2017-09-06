<?php
include "include/config.php"; //$gaSql['link']
@session_start();

	$query = "select * from amigos";
	$result = mysqli_query($gaSql['link'], $query) or trigger_error(mysql_error());
	
	$arrCampos = Array();
	
	// $arrCampos = Array("","");
	while($row = mysqli_fetch_array($result)){
		$arrData = Array();
		
		$arrData['nombre'] = $row['nombre'];
		$arrData['telefono'] = $row['telefono'];
		
		$arrCampos[] = $arrData;
	}
		
?>
<!DOCTYPE html>
<html>
<head>
<title>Amigos</title>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<style type="text/css" title="currentStyle">             
	@import "https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"; 
</style>       


<script>
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>

</head>



<body>

<br ><br >
<div style="width: 800px; margin:0 auto;">
Amigos
<br >
<br >

<div style="width:700px;">
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
            </tr>
        </thead>
		<tfoot>
            <tr>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
            </tr>
            </tr>
        </tfoot>
        <tbody>
  		<?php
		for($i=0; $i<count($arrCampos);$i++){
		?>
            <tr>
                <td><?php echo $arrCampos[$i]['nombre']; ?></td>
                <td><?php echo $arrCampos[$i]['telefono']; ?></td>
            </tr>
		<?php } ?>	
        </tbody>
    </table>
</div>
</div>

</body>

</html>
