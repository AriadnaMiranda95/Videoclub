<?php
class Api {

    private static function curl($url) {
        $ch = curl_init(); //Inicia la sesion del curl
        curl_setopt($ch, CURLOPT_URL, $url); /*Selecciona la url*/
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); /*Devuelve el transfer a String*/
       
        $datos = curl_exec($ch); //Ejecuta la sesión cURL que se le pasa como parámetro. 
        curl_close($ch);
        return json_decode($peliculas, true);// Cierra una sesión cURL

    }

    public static function obtenerPeliculas() {
        $url= "https://api.themoviedb.org/3/discover/movie?api_key=1865f43a0549ca50d341dd9ab8b29f49&language=es";
        $peliculas = self::curl($url);
        $result = $peliculas["results"];

        foreach($result as $pelicula) {
            echo "<div>";
            echo '<img src="https://image.tmdb.org/t/p/w185"';
            echo $pelicula["backdrop_path"];
            echo $pelicula['title'];
            echo "</div>";
        }


    }







}


























?>