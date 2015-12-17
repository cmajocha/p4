<?php
namespace p4\Http\Controllers;
use p4\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class TeammemberController extends Controller {
    public function __construct() {
    }
    /**
    * Responds to requests to GET /teammembers
    */
    public function getIndex(Request $request) {
        // Get all the teammembers that are on the roster of the current logged in users
        // Sort in descending order by id
        $teammembers = \p4\Teammember::where('user_id','=',\Auth::id())->orderBy('last','ASC')->get();
        return view('teammembers.index')->with('teammembers',$teammembers);
        // $booleanValue contains the value 0 or 1 originally
    }
    /**
    * Responds to requests to GET /teammembers/edit/{$id}
    */
    public function getEdit($id = null) {
        # Get this teammember and eager load its user
        $teammember = \p4\Teammember::with('user')->find($id);
        if(is_null($teammember)) {
            \Session::flash('flash_message','Teammember not found.');
            return redirect('\teammembers');
        }

        # Get all the possible users so we can build the teammembers owner dropdown in the view
        $userModel = new \p4\User();
        $users_for_dropdown = $userModel->getUsersForDropdown();

        return view('teammembers.edit')
            ->with([
                'teammember' => $teammember,
                'users_for_dropdown' => $users_for_dropdown,
            ]);
    }
    /**
    * Responds to requests to POST /teammembers/edit
    */
    public function postEdit(Request $request) {
        $teammember = \p4\Teammember::find($request->id);
        $teammember->first = $request->first;
        $teammember->last = $request->last;
        $teammember->team = $request->team;
        $teammember->position = $request->position;
        $teammember->keeper = $request->keeper;
        $teammember->save();
        \Session::flash('flash_message','Your roster was updated.');
        return redirect('/teammembers/edit/'.$request->id);
    }
    /**
        * Responds to requests to GET /teammembers/create
        */
       public function getCreate() {
           $userModel = new \p4\User();
           $logged = \Auth::user();
           $users_for_dropdown = $userModel->getUsersForDropdown();
           return view('teammembers.create')
               ->with('users_for_dropdown',$users_for_dropdown)
               ->with ('logged',$logged);
       }

       /**
        * Responds to requests to POST /teammembers/create
        */
       public function postCreate(Request $request) {


         $this->validate(
                     $request,
                     [
                         'first' => 'required|min:2',
                         'last' => 'required|min:2',
                         'owner' => 'required',
                         'team' => 'required|min:2',
                         'position' => 'required|min:2',
                         'keeper' => 'required|boolean',
                       ]
                 );


           # Enter player into the database
           $teammember = new \p4\Teammember();
           $teammember->first = $request->first;
           $teammember->last = $request->last;
           $teammember->user_id = \Auth::id(); # <--- NEW LINE
           $teammember->team = $request->team;
           $teammember->position = $request->position;
           $teammember->keeper = $request->keeper;
           $teammember->save();
           # Done
           \Session::flash('flash_message','Your player was added!');
           return redirect('/teammembers');
       }



    public function getConfirmDelete($teammember_id) {
        $teammember = \p4\Teammember::find($teammember_id);
        return view('teammembers.delete')->with('teammember', $teammember);
    }
    /**
	*
	*/
    public function getDoDelete($teammember_id) {
        $teammember = \p4\Teammember::find($teammember_id);
        if(is_null($teammember)) {
            \Session::flash('flash_message','Player not found.');
            return redirect('\teammembers');
        }
        $teammember->delete();
        \Session::flash('flash_message', $teammember->last.' was deleted.');
        return redirect('/teammembers');
    }
}
