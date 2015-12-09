<?php
namespace p4\Http\Controllers;
use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;
class HelloController extends Controller {
    /**
    * Responds to requests to GET checks to see if the user is already logged in, and if they are redirects them to the teammembers page not the home page/
    */
    public function getIndex() {
        if(\Auth::check()) {
            return redirect()->to('/teammembers');
        }
        return view('home');
    }
}
