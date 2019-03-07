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
        $limit = 15;
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

        $search = $api->getArtistAlbums($id, $limit, $offset, ['single', 'appears_on']);
        $albumes = collect($search->items);
        

        $artists = $api->getArtists($id);
        $artistas = collect($artists);
        //return $artistas;
        //return $albumes;
        return view('artistas', ['albumes' =>$albumes, 'artistas' =>$artistas]);
    }
}
