<?
include_once BASE_DIR ."clases/listados/clase.Listados.php";

class ActividadBus extends Action
{
	var $tpl = "tpl/actividad/tpl.ActividadBus.php";

	function inicializar(){
		
	}

	function validar(&$v) {

	}

	function buscar() {
		// Cargar Datos de la Busqueda
		$this->asignarArray($_GET);

		$listado = Listados::create('ListadoActividades', $_GET);
		$this->asignar("listado", $listado->imprimir_listado());
	}
}
?>