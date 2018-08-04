<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/editTraining', 'TrainingController@update');
Route::post('/deleteTraining', 'TrainingController@delete');

Route::post('/editResources', 'ResourceController@update');
Route::post('/deleteResource', 'ResourceController@delete');

Route::post('/saveSchedule', 'ScheduleController@store');
Route::post('/editSchedule', 'ScheduleController@update');
Route::post('/deleteSchedule', 'ScheduleController@delete');

Route::post('/saveMessage', 'MessageController@store');
Route::post('/editMessage', 'MessageController@update');
Route::post('/deleteMessage', 'MessageController@delete');

Route::post('/assignTraining', 'AssignedTrainingController@store');
Route::post('/assignStudent', 'TrainorStudentController@store');

Route::post('/saveTrainor', 'TrainorController@store');
Route::post('/editTrainor', 'TrainorController@update');
Route::post('/deleteTrainor', 'TrainorController@delete');

Route::post('/deleteUser', 'Auth\RegisterController@delete');
Route::post('/activateUser', 'Auth\RegisterController@update');

Route::post('/deletePhoto', 'GalleryController@delete');

Route::post('/editLesson', 'LessonsController@update');
Route::post('/deleteLesson', 'LessonsController@delete');

Route::post('/saveComment', 'CommentController@store');