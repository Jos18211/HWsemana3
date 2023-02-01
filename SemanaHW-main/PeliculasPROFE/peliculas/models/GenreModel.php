<?php
class GenreModel{
    public $enlace;
    public function __construct()
    {
        $this->enlace=new MySqlConnect();
    }
    /*Listar */
    public function all(){
        try {
            //Consulta SQL
            $vSQL="SELECT * FROM genre;";
            //Establecer conexión
            $this->enlace->connect();
            //Ejecutar la consulta
            $vResultado=$this->enlace->executeSQL($vSQL);
            //Retornar el resultado
            return $vResultado;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    /*Obtener */
    public function get($id){
        
    }
    /*Obtener los generos de una pelicula */
    public function getGenreMovie($idMovie){
        
    }
    /*Crear */
    public function create($objeto){
        
    }
    /*Actualizar */
    public function update($objeto){
        
    }
}