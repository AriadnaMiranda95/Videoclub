<?php
class Videoclub {

    private $url;
    private $api_key;
    

   
    public function __construct(){
        $this-> api_key = "c";
    }


        // ACTORES : https://api.themoviedb.org/3/movie/580489/credits?api_key=0bd8a8eb5c3993fd33872f75979674ff&language=en-US
        // INFORMACION PELI https://api.themoviedb.org/3/movie/580489?api_key=0bd8a8eb5c3993fd33872f75979674ff&language=es"
        // RUTA IMAGENES https://image.tmdb.org/t/p/w185{RUTA}
            

    private function curl($url) {
        $ch = curl_init($url); //Inicia la sesion del curl
       // curl_setopt($ch, CURLOPT_URL, $url); /*Selecciona la url*/
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); /*Devuelve el transfer a String*/
        $datos = curl_exec($ch); //Ejecuta la sesión cURL que se le pasa como parámetro. 
        curl_close($ch);
        return json_decode($datos, true);// Cierra una sesión cURL

    }

    public function obtenerPeliculas() {
        $url= "https://api.themoviedb.org/3/discover/movie?api_key={$this->api_key}&language=es"; // Metemos en una variable la url de la api que vamos a utilizar.
        $peliculas = $this->curl($url); // Metemos en una variable el resultado de la funcion curl que convierte la información a un array asocativo.
        $result = $peliculas['results']; // Metemos en una variable el array que nos llega en la posición result, que a su vez contiene un array asociativo.

        foreach($result as $pelicula) { // Recorremos el array 
            echo "<div>";
            echo "<a href='index.php?id='{$pelicula['id']}'>"; // Añadimos un enlace al que le pasamos la id de la pelicula. 
            echo "<img src='https://image.tmdb.org/t/p/w185{$pelicula['backdrop_path']}'>"; // Añadimos la url de la imágen con la posicion del array.
            echo "<p>{$pelicula['title']}</p> "; 
            echo "</div>"; 
        }



    }




    public function detallesPelicula($id_pelicula) {
        $url = "https://api.themoviedb.org/3/movie/{$id_pelicula}?api_key={$this->api_key}&language=es"; //Metemos en la variable la url de la api que vamos a utilizar;
        $detallesPelicula = $this->curl($url); //  Metemos en una variable el resultado de la funcion curl que convierte la información a un array asocativo.
        $portada = $detallesPelicula['backdrop_path']; //  Metemos en una variable el array que nos llega en la posición result, que a su vez contiene un array asociativo.
        $titulo = $detallesPelicula['original_tittle'];
        $descripcion = $detallesPelicula['overview'];

        echo "<div>";
        //echo "<a href='index.php?id='{$pe"



        
        
        
    }

    


}































?>