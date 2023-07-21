<?php
namespace App\Http\Controllers\TournamentController;


use Illuminate\Support\Facades\Route;
use App\Models\Tournament;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('tournament');
});




// routes/web.php
// Route::get('/events/{event}/division', 'EventController@showDivision')->name('events.division');
// Route::post('/events/{event}/add-parameter', 'EventController@addParameter')->name('events.addParameter');
// Route::get('/events/{event}/delete-parameter/{parameter}', 'EventController@deleteParameter')->name('events.deleteParameter');
// Route::post('/events/{event}/add-division', 'EventController@addDivision')->name('events.addDivision');
// Route::get('/events/{event}/delete-division/{division}', 'EventController@deleteDivision')->name('events.deleteDivision');



// routes/web.php
// Route::get('/tournament', 'TournamentController@showForm');
// Route::post('/tournament', 'TournamentController@createTournament');

// Route::post('/store_tournament',TournamentController::createTournament,'tournament');

