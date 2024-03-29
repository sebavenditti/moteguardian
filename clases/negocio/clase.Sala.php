<?
class Sala extends AbstractEntity
{
    /**
     * Nombre de la tabla sobre a la cual accede la clase
     * @access protected
     * @var string
     */
    var $_tablename = 'sala';

    /**
     * Nombre de los campos, menos el campo id
     * @access protected
     * @var array
     */
    var $_fields = array
    (				
		'descripcion' => 'varchar',
        'baja_logica' => 'int'
    );

    var $id;    
    var $descripcion;
    var $baja_logica;   
}
?>