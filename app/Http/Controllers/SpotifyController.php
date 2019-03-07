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
        return $lanzamientos;
    }

    public function artistas($id)
    {
        $api = new Larafy();
        //cantidad maxima de albumes de artista
        $limit = 15;
        //cuantos va a compensar
        $offset = 5;

        $search = $api->getArtistAlbums($id, $limit, $offset, ['single']);
        $artists = collect($search->items);
        return $artists;
    }
}
