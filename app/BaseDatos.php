<?php
class BaseDatos{
    private $conexion;

    public function __construct()
    {
        //iniciamos la conexion a la base de datos
        $this->conexion=new PDO("mysql:host=localhost;dbname=bdwebmedicina;","root","");
        
    }

    public function consulta($sql) {
        
        $query =$this ->conexion->prepare($sql);
        $query ->execute();
        return $query ->fetchAll();
    }
    public function cerrar() {
        //$this->conexion->close();  //este medio que no quiere dar el close()
        $this->conexion=null;//se puso este por si acaso , aun no se si da
        
    }


}


?>