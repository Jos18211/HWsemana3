<?php


class genre
{
    #PARA LISTAR EN EL API
    public function index()
    {
        #Obetener el listado del modelo 
        $genero = new GenreModel();
        $response = $genero->all();
        #si hay rspuesta 
        if (isset($response) && !empty($response)) {
            #Armar el JSON 
            $json = array(
                'status' => 200,
                'results' => $response
            );
        } else {
            $json = array(
                'status' => 400,
                'results' => "No hay registros"
            );
        }

        echo json_encode(
            $json,
            http_response_code($json["status"])


        );
    }
}
