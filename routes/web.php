<?php

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
    $trainings = \Illuminate\Support\Facades\DB::table('trainings')->get();
    $messages = \Illuminate\Support\Facades\DB::table('messages')->get()->take(1);

    return view('welcome', compact('trainings', 'messages'));
});

Route::get('/services', function () {
    $resources = \Illuminate\Support\Facades\DB::table('resources')->get();

    $schedules = \Illuminate\Support\Facades\DB::table('schedules')
        ->join('trainings', 'schedules.training_id', '=', 'trainings.id' )
        ->select('schedules.*', 'trainings.title as title' )
        ->get();

    return view('pages.services', compact('resources', 'schedules'));
});

Route::get('/events', function () {
    $schedules = \Illuminate\Support\Facades\DB::table('schedules')
        ->join('trainings', 'schedules.training_id', '=', 'trainings.id' )
        ->select('schedules.*', 'trainings.title as title' )
        ->get();

    return view('pages.events', compact('schedules'));
});

Route::get('/gallery', function () {
    $galleries = \Illuminate\Support\Facades\DB::table('galleries')->get();

    return view('pages.gallery', compact( 'galleries'));
});

Route::get('/contact', function () {
    return view('pages.contactUs');
});

Route::get('/about', function () {
    return view('pages.aboutUs');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/message', function () {
    $messages = \Illuminate\Support\Facades\DB::table('messages')->get();

    return view('pages.message', compact( 'messages'));
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        $schedules = \Illuminate\Support\Facades\DB::table('schedules')
            ->join('trainings', 'schedules.training_id', '=', 'trainings.id' )
            ->select('schedules.*', 'trainings.title as title' )
            ->get();

        //$trainings = \Illuminate\Support\Facades\DB::table('trainings')->get();

        $trainings = \Illuminate\Support\Facades\DB::table('trainings')
            ->leftJoin('assigned_trainings', 'trainings.id', '=', 'assigned_trainings.training_id' )
            ->leftJoin('users', 'assigned_trainings.trainor_id', '=', 'users.id')
            ->select('trainings.*', 'users.name as name')
            ->get();

        $resources = \Illuminate\Support\Facades\DB::table('resources')->get();
        $users = \Illuminate\Support\Facades\DB::table('users')->where('role_id', '=', 4)->get();
        $messages = \Illuminate\Support\Facades\DB::table('messages')->get();
        $trainors = \Illuminate\Support\Facades\DB::table('users')->where('role_id', '=', '3')->get();
        $gallery = \Illuminate\Support\Facades\DB::table('galleries')->get();
        $comment = \Illuminate\Support\Facades\DB::table('comments')->get();

        return view('admin.admin', compact('trainings', 'resources',
            'schedules', 'messages', 'users', 'trainors', 'gallery', 'comment'));
    });

    Route::get('/trainor', function () {
        $schedules = \Illuminate\Support\Facades\DB::table('schedules')
            ->join('trainings', 'schedules.training_id', '=', 'trainings.id' )
            ->select('schedules.*', 'trainings.title as title' )
            ->get();

        $trainings = \Illuminate\Support\Facades\DB::table('trainings')
            ->leftJoin('assigned_trainings', 'trainings.id', '=', 'assigned_trainings.training_id' )
            ->leftJoin('users', 'assigned_trainings.trainor_id', '=', 'users.id')
            ->select('trainings.*', 'users.name as name' )->where('assigned_trainings.trainor_id', '=', \Illuminate\Support\Facades\Auth::user()->id)
            ->get();

        //$trainings = \Illuminate\Support\Facades\DB::table('trainings')->get();

        //$trainings = \Illuminate\Support\Facades\DB::table('trainings')->where('id', '=', \Illuminate\Support\Facades\Auth::user()->id)->get();

        $resources = \Illuminate\Support\Facades\DB::table('resources')->get();
        $lessons = \Illuminate\Support\Facades\DB::table('lessons')
        ->where('trainor_id', '=', \Illuminate\Support\Facades\Auth::user()->id)->get();

        $users = \Illuminate\Support\Facades\DB::table('users')
            ->join('trainor_students', 'users.id', '=', 'trainor_students.student_id')
            ->select('users.*')->where('trainor_students.trainor_id', '=', \Illuminate\Support\Facades\Auth::user()->id)->get();

        return view('admin.trainor', compact('trainings', 'resources', 'schedules', 'users', 'lessons'));
    });

    Route::get('/student', function () {
        $schedules = \Illuminate\Support\Facades\DB::table('schedules')
            ->join('trainings', 'schedules.training_id', '=', 'trainings.id' )
            ->select('schedules.*', 'trainings.title as title' )
            ->get();

        $trainings = \Illuminate\Support\Facades\DB::table('trainings')
            ->leftJoin('assigned_trainings', 'trainings.id', '=', 'assigned_trainings.training_id' )
            ->leftJoin('users', 'assigned_trainings.trainor_id', '=', 'users.id')
            ->leftJoin('trainor_students', 'users.id', '=', 'trainor_students.trainor_id')
            ->select('trainings.*', 'users.name as name' )->where('trainor_students.student_id', '=', \Illuminate\Support\Facades\Auth::user()->id)
            ->get();

        //$trainings = \Illuminate\Support\Facades\DB::table('trainings')->get();

        //$trainings = \Illuminate\Support\Facades\DB::table('trainings')->where('id', '=', \Illuminate\Support\Facades\Auth::user()->id)->get();

        $resources = \Illuminate\Support\Facades\DB::table('resources')->get();
        $lessons = \Illuminate\Support\Facades\DB::table('lessons')
            ->leftJoin('trainor_students', 'lessons.trainor_id', '=', 'trainor_students.trainor_id')
            ->leftJoin('users', 'trainor_students.trainor_id', '=', 'users.id')
            ->select('lessons.*', 'users.name as name')
            ->where('trainor_students.student_id', '=', \Illuminate\Support\Facades\Auth::user()->id)->get();

        return view('admin.trainee', compact('trainings', 'resources', 'schedules', 'lessons'));
    });

    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('/storeTraining', 'TrainingController@store');
    Route::post('/storeModifiedTraining', 'TrainingController@update');
    Route::post('/storeResources', 'ResourceController@store');
    Route::post('/storeLesson', 'LessonsController@store');

    Route::post('/storeGallery', 'GalleryController@store');

    Route::get('/logout', 'LoginController@logout');
});
