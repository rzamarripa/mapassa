<?php $c = 0; ?>
<h3><?php echo "Reporte: " . $nombreReporte . "."  ?> </h3>

<h2><?php echo $rs[0]["DESCRI"]; unset($rs[0]); ?> </h2>
<table class="table table-bordered">
	<tbody>
		<?php foreach($rs as $registro){
			$c++; ?>
		<tr class="<?php
					if ($registro["COLOR"] == "AZUL") {echo "info";}
					else if ($registro["COLOR"] == "ROJO") {echo "error";}
					else if ($registro["COLOR"] == "AMARILLO") {echo "warning";}
					else if ($registro["COLOR"] == "VERDE") {echo "sucess";} ?>">
			<td colspan="<?php echo ($c < 7) ? 4 : ''; ?>"> <?php echo $registro["DESCRI"]; ?></td>
			<?php if($c >=7) { ?>
			<td style="text-align:right;"class="<?php
					if ($registro["COLOR"] == "AZUL") {echo "text-info";}
					else if ($registro["COLOR"] == "ROJO") {echo "text-error";}
					else if ($registro["COLOR"] == "AMARILLO") {echo "text-warning";}
					else if ($registro["COLOR"] == "VERDE") {echo "text-sucess";} ?>"><?php echo $registro["IMPORTE"]; ?></td>
			<td style="text-align:right;"class="<?php
					if ($registro["COLOR"] == "AZUL") {echo "text-info";}
					else if ($registro["COLOR"] == "ROJO") {echo "text-error";}
					else if ($registro["COLOR"] == "AMARILLO") {echo "text-warning";}
					else if ($registro["COLOR"] == "VERDE") {echo "text-sucess";} ?>"><?php echo $registro["B"]; ?></td>
				<?php } ?>
			

		</tr>
		<?php } ?>
	</tbody>
</table>