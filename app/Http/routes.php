<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
# These are the login and athentication routes that I need
# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');
# Process login form
Route::post('/login', 'Auth\AuthController@postLogin');
# Process logout
Route::get('/logout', 'Auth\AuthController@getLogout');
# Show registration form
Route::get('/register', 'Auth\AuthController@getRegister');
# Process registration form
Route::post('/register', 'Auth\AuthController@postRegister');

# This is a quick way to check if my login and registration parts worked
Route::get('/confirm-login-worked', function() {
    # You may access the authenticated user via the Auth facade
    $user = Auth::user();
    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }
    return;
});


/*----------------------------------------------------
/teammembers
-----------------------------------------------------*/

Route::get('/', 'HelloController@getIndex');

# The method uses middleware to make sure that the logged in users are the one who can access these functionalities
Route::group(['middleware' => 'auth'], function() {

    Route::get('/teammembers/create', 'TeammemberController@getCreate');
    Route::post('/teammembers/create', 'TeammemberController@postCreate');

    Route::get('/teammembers/edit/{id?}', 'TeammemberController@getEdit');
    Route::post('/teammembers/edit', 'TeammemberController@postEdit');

    Route::get('/teammembers/confirm-delete/{id?}', 'TeammemberController@getConfirmDelete');
    Route::get('/teammembers/delete/{id?}', 'TeammemberController@getDoDelete');

    Route::get('/teammembers', 'TeammemberController@getIndex');
    Route::get('/teammembers/show/{last?,first?}', 'TeammemberController@getShow');
});

/*----------------------------------------------------
Debugging/Local/Misc
-----------------------------------------------------*/
if(App::environment('local')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('/drop', function() {
        DB::statement('DROP database foobooks');
        DB::statement('CREATE database foobooks');
        return 'Dropped foobooks; created foobooks.';
    });
};
Route::get('/debug', function() {
    echo '<pre>';
    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';
    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";
    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));
    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }
    echo '</pre>';
});
