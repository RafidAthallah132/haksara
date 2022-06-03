<?php

use App\Http\Controllers\profileController;

Route::get('/', function () {
    return redirect('/home');
});

//Route Profile
Route::get('profile','profileController@index'
);
Route::get('profile/edit/{id}',[profileController::class, 'edit']);
Route::put('edit',[profileController::class, 'update'])->name('doneedit');


//Route Modul

Route::get('carakan',"Modul@Carakan") ;
Route::get('aksaraangka',"Modul@aksaraangka") ;
Route::get('aksaramurda',"Modul@aksaramurda") ;
Route::get('aksaraswara',"Modul@aksaraswara") ;
Route::get('sandhangan',"Modul@sandhangan") ;
Route::get('aksaraswara',"Modul@aksaraswara") ;
Route::get('pasangan',"Modul@pasangan") ;

//Route Level (jika ada lebih dari 1 level)
Route::get('carakanlevel1',"Level@carakan1") ;
Route::get('carakanlevel2',"Level@carakan2") ;
Route::get('sandhanganlevel1',"Level@sandhangan1") ;
Route::get('sandhanganlevel2',"Level@sandhangan2") ;
Route::get('pasanganlevel1',"Level@pasangan1") ;
Route::get('pasanganlevel2',"Level@pasangan2") ;

//Route Materi
Route::get('matericarakan1',"Materi@carakan1") ;
Route::get('matericarakan2',"Materi@carakan2") ;
Route::get('materisandhangan1',"Materi@sandhangan1") ;
Route::get('materisandhangan2',"Materi@sandhangan2") ;
Route::get('materipasangan1',"Materi@pasangan1") ;
Route::get('materipasangan2',"Materi@pasangan2") ;
Route::get('materiaksaraangka',"Materi@aksaraangka") ;
Route::get('materiaksaramurda',"Materi@aksaramurda") ;
Route::get('materiaksaraswara',"Materi@aksaraswara") ;

//Route Latihan Soal
Route::get('latihansoalcarakan1',"LatihanSoal@carakan1") ;
Route::get('latihansoalcarakan2',"LatihanSoal@carakan2") ;
Route::get('latihansoalsandhangan1',"LatihanSoal@sandhangan1") ;
Route::get('latihansoalsandhangan2',"LatihanSoal@sandhangan2") ;
Route::get('latihansoalpasangan1',"LatihanSoal@pasangan1") ;
Route::get('latihansoalpasangan2',"LatihanSoal@pasangan2") ;
Route::get('latihansoalaksaraangka',"LatihanSoal@aksaraangka") ;
Route::get('latihansoalaksaramurda',"LatihanSoal@aksaramurda") ;
Route::get('latihansoalaksaraswara',"LatihanSoal@aksaraswara") ;

//Route Quiz 
Route::get('quizcarakan1',"Quiz@carakan1") ;
Route::get('quizcarakan2',"Quiz@carakan2") ;
Route::get('quizsandhangan1',"Quiz@sandhangan1") ;
Route::get('quizsandhangan2',"Quiz@sandhangan2") ;
Route::get('quizpasangan1',"Quiz@pasangan1") ;
Route::get('quizpasangan2',"Quiz@pasangan2") ;
Route::get('quizaksaraangka',"Quiz@aksaraangka") ;
Route::get('quizaksaramurda',"Quiz@aksaramurda") ;
Route::get('quizaksaraswara',"Quiz@aksaraswara") ;

// Auth::routes();



// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');
$this->get('oauth2google', 'Auth\Oauth2Controller@oauth2google')->name('oauth2google');
$this->get('googlecallback', 'Auth\Oauth2Controller@googlecallback')->name('googlecallback');
$this->get('oauth2facebook', 'Auth\Oauth2Controller@oauth2facebook')->name('oauth2facebook');
$this->get('facebookcallback', 'Auth\Oauth2Controller@facebookcallback')->name('facebookcallback');
$this->get('oauth2github', 'Auth\Oauth2Controller@oauth2github')->name('oauth2github');
$this->get('githubcallback', 'Auth\Oauth2Controller@githubcallback')->name('githubcallback');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.email');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('tests', 'TestsController');
    Route::resource('roles', 'RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'UsersController');
    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'UserActionsController');
    Route::resource('topics', 'TopicsController');
    Route::post('topics_mass_destroy', ['uses' => 'TopicsController@massDestroy', 'as' => 'topics.mass_destroy']);
    Route::resource('questions', 'QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
    Route::resource('results', 'ResultsController');
    Route::post('results_mass_destroy', ['uses' => 'ResultsController@massDestroy', 'as' => 'results.mass_destroy']);
});

