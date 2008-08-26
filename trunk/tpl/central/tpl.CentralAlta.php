<br>
<h2 align="center"><?= $keys['central.alta'] ?></h2>

<?=$errores ?>
<?=$mensaje ?>

<form method="POST" name="central_new">
	<input type="hidden" name="accion" value="central_new" />
	<input type="hidden" id="id_central" name="id_central" value="<?= $idCentral ?>" />
	<input type="hidden" id="accion_tecnologia_recolector" name="accion_tecnologia_recolector" value="<?= $accion_tecnologia_recolector ?>"/>
	<fieldset>
		<legend><?= $keys['central.alta.datos'] ?></legend><br>
		<table width="95%" border="0">
			<tr align="left">
				<td align="right"><?= $keys['central.nombre'] ?></td>
				<td><input type="text" name="nombre" id="nombre" value="<?= $nombre ?>" size="15"/>*</td>
				<td align="right"><?= $keys['central.codigo'] ?></td>
				<td><input type="text" name="codigo" id="codigo" value="<?= $codigo ?>" size="15"/>*</td>
				<td align="right"><?= $keys['central.descripcion'] ?></td>
				<td><input type="text" name="descripcion" id="descripcion" value="<?= $descripcion ?>" size="15"/></td>
			</tr>
			<tr align="right">
				<td></td>
				<td></td>
				<td align="right"><?= $keys['central.tecnologiaRecoleccion'] ?></td>
				<td align="left"><select id="id_tecnologia_recolector" name="id_tecnologia_recolector" onchange="javascript:setActionMethod('btnSetearAccion')"><? ComboControl::Display($options_tecnologias, $id_tecnologia_recolector) ?></select>*</td>
				<td align="right"><?= $keys['central.tecnologiaCentral'] ?></td>
				<td align="left"><select id="id_tecnologia_central" name="id_tecnologia_central" ><? ComboControl::Display($options_tecnologias_central, $id_tecnologia_central) ?></select>*</td>
			</tr>
		</table>
		<br/><br/>
		<div align="center">
			<input type="hidden" id="js_method_action" name="" value="Actualizar" />
			<input type="submit" value="<?= $keys['central.btnConfigurar'] ?>" name="btnConfigurar" class="boton"/>
			<input type="button" value="<?= $keys['central.btnCancelar'] ?>" class="boton" onClick="javascript: location.href='index.php?accion=central_adm'; return false;" />
		</div>
		<br/>
	</fieldset>
</form>

<?
if ($valido) {
?>
<script type="text/javascript">
	configurarRecolector();
</script>
<?}?>