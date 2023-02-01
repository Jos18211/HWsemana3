<?php
class GenreModel
{

    public  $enlace;

    public function __construct()
    {
        $this->enlace = new MySqlConnect();
    }


    #LISTAR 
    public function all()
    {
        try {
            #consulta sql 

            $vSql = "SELECT * from genre;";
            # establecer conexion
            $this->enlace->connect();
            #Ejecuta la consulta
            $vResultado = $this->enlace->executeSQL($vSql);
            # retorna el resultado
            return $vResultado;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    #obtener 
    public function get($id)
    {
    }
    #obtener los generos de una pelicula
    public function getMovie($id)
    {
    }


    public function crear($objeto)
    {
    }
    public function upate($objeto)
    {
    }
}
