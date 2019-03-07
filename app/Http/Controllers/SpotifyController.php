<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rennokki\Larafy\Larafy;

class SpotifyController extends Controller
{
    function lanzamientos()
    {
        $api = new Larafy();
        
        //cantidad maxima de albumes de artista
        $limit = 18;
        //cuantos va a compensar
        $offset = 5;
        $search = $api->getNewReleases($limit, $offset);        
        $lanzamientos = collect($search->items);
        //return $lanzamientos;
        //retorna json --> lanzamientos:vista + variable
        return view('lanzamientos', ['lanzamientos' =>$lanzamientos]);
    }

    public function artistas($id)
    {
        $api = new Larafy();
        //cantidad maxima de albumes de artista
        $limit = 15;
        //cuantos va a compensar
        $offset = 5;

        //Obtenemos los albumes del artista
        $search = $api->getArtistAlbums($id, $limit, $offset, ['single', 'appears_on']);
        $albumes = collect($search->items);      
             
          
        //Get artistas
        $artists = $api->getArtists($id);
        $artistas = collect($artists);       
               
        
        $i = 0 ;
        foreach($albumes as $album){
            $canciones = $this->canciones($album->id);
            $album->tracks = array();
            foreach($canciones as $cancion){      
	
                $album->tracks = array_add($album->tracks, $i,$cancion->name );
                $i = $i +1;
            }
        }
        
        return view('artistas', ['albumes' =>$albumes, 'artistas' =>$artistas]);
        //return $artistas; 
        //return $albumes;
    }

    public function canciones($id)
    {
        $api = new Larafy();
        //cantidad maxima de albumes de artista
        $limit = 25;
        //cuantos va a compensar
        $offset = 0;
        
        //Get album's tracks.
        $searchcanciones = $api->getAlbumTracks($id, $limit, $offset);
        $canciones = collect($searchcanciones->items);
        return $canciones; 
        //return view('canciones', ['canciones' =>$canciones]);    
                
    }

     

    

}
