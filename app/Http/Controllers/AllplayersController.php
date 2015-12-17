<?php
namespace p4\Http\Controllers;
use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class AllplayersController extends Controller {
    public function __construct() {
    }
    /**
    * Responds to requests to GET /allplayers
    */
    public function getIndex(Request $request) {
        // Get all the teammembers that are on the roster of the current logged in users
        // Sort in descending order by id
        $allplayers = \p4\Allplayer::orderBy('last','DESC')->get();
        return view('allplayers.index')->with('allplayers',$allplayers);
        // $booleanValue contains the value 0 or 1 originally
    }

}
