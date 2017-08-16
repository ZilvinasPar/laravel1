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
use App\Http\Controllers\UserController;
use App\Course;
use App\StudentGroup;
use Illuminate\Support\Facades\Response;
Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/themes/{id}', 'HomeController@themes')->name('themes');

Auth::routes();


Route::get('/add_new', 'UserController@addNewView')->name('add_new');

Route::get('/add_new_theme', 'UserController@addNewThemeView')->name('add_new_theme');

Route::post('/add_new_theme', 'UserController@addNewTheme');

Route::post('/unapprove/{id}', 'UserController@unapprove')->name('unapprove');

Route::post('/approve/{id}', 'UserController@approve')->name('approve');

Route::get('/edit_theme/{id}', 'UserController@themeEditView')->name('edit_theme');

Route::post('/edit_theme/{id}', 'UserController@editTheme', 'UserController@insertFiles');

Route::get('download/{file_name}', 'UserController@download')->name('download');


Route::post('/hide/{id}', 'UserController@hide')->name('hide');

Route::post('/show/{id}', 'UserController@show')->name('show');

//Route::get('/administration', 'UserController@courses');

Route::get('/contact_edit', 'UserController@contactView')->name('contact_edit');
Route::post('/contact_edit', 'UserController@contact');

Route::get('/contact', 'HomeController@contactView')->name('contact');

Route::post('/group_themes', 'UserController@showHide');

Route::get('/add_new_file', 'UserController@addNewFileView')->name('add_new_file');

Route::get('/downloading/{name}', 'HomeController@downloading')->name('downloading');

Route::get('/download/{name}', 'UserController@download')->name('download');



Route::post('/add_new_file', 'UserController@insertFiles');

Route::get('/group_themes/{id}', 'UserController@groupThemes')->name('group_themes');

Route::get('/edit_group/{id}', 'UserController@editGroupView')->name('edit_group');

Route::get('delete_group/{id}', 'UserController@deleteGroup')->name('delete_group');

Route::post('/edit_group/{id}', 'UserController@editGroup');

Route::get('/group_students/{id}', 'UserController@groupStudents')->name('group_students');

Route::get('/add_new_group', 'UserController@addNewGroup')->name('add_new_group');

Route::post('/add_new_group', 'UserController@insertNewGroup');

Route::get('/all_groups', 'UserController@allGroups')->name('view_all_groups');

Route:: get('/view_all_users', 'UserController@allUsersView')->name('view_all_users');

Route::get('/delete_course/{id}', 'UserController@deleteCourse')->name('delete_course');

Route::get('/inbox', 'UserController@inboxView')->name('inbox');

Route::get('/edit_course/{id}', 'UserController@editCourseView')->name('edit_course');

Route::post('/edit_course/{id}', 'UserController@editCourse');

Route::get('/add_new_course', 'UserController@addNewCourse')->name('add_new_course');

Route::post('/add_new_course', 'UserController@addCourse');

Route::get('/all_courses', 'UserController@allCourses')->name('view_all_courses');

Route::get('/home', 'UserController@checkUser')->name('home');

Route::get('/administration', 'UserController@admin')->name('admin');

Route::get('/home', 'UserController@navigation')->name('navigation');

Route::get('/home', 'HomeController@index')->name('home');

