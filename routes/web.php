<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'Auth\LoginController@showLoginForm');
Auth::routes(['register' => false]);


Route::group(['middleware' => 'auth'], function(){
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

// MICHAELS ROUTES



//USERS
Route::get('/users', 'UserController@index')->name('list_users');
Route::get('/users/create', 'UserController@create')->name('create_user');
Route::post('/users', 'UserController@store')->name('store_user');
	
// ROLES
Route::get('/roles', 'RoleController@index')->name('list_roles');
Route::get('/roles/create', 'RoleController@create')->name('create_role');
Route::post('/roles', 'RoleController@store')->name('store_role');
Route::get('/roles/edit/{id}', 'RoleController@edit')->name('edit_role');
Route::post('/roles/update', 'RoleController@update')->name('update_role');
Route::delete('/roles/delete/{id}', 'RoleController@destroy')->name('delete_role');


// PERMISSIONS
Route::get('/permissions', 'PermissionController@index')->name('list_permissions');
Route::get('/permissions/create', 'PermissionController@create')->name('create_permission');
Route::post('/permissions', 'PermissionController@store')->name('store_permission');
Route::get('/permissions/edit/{id}', 'PermissionController@edit')->name('edit_permission');
Route::post('/permissions/update', 'PermissionController@update')->name('update_permission');
Route::delete('/permissions/delete/{id}', 'PermissionController@destroy')->name('delete_permission');


// ASSETS
Route::get('/asset','AssetController@index')->name('list_assets');
Route::get('/asset/create','AssetController@create')->name('create_asset');
Route::post('/asset','AssetController@store')->name('store_asset');
Route::get('/asset/show/{id}','AssetController@showAssetDetails')->name('show_asset_details');
Route::get('/asset/edit/{id}','AssetController@edit')->name('edit_asset');
Route::post('/asset/update','AssetController@update')->name('update_asset');
Route::delete('/asset/delete/{id}','AssetController@destroy')->name('delete_asset');




// BENS ROUTES

Route::prefix('settings')->group(function(){
	//DEPARTMENTS

	Route::get('/departments', 'DepartmentController@index')->name('list_departments');
	Route::get('/departments/create', 'DepartmentController@create')->name('create_department');
	Route::post('/departments', 'DepartmentController@store')->name('store_department');
	Route::get('/departments/edit/{id}', 'DepartmentController@edit')->name('edit_department');
	Route::delete('/departments/delete/{id}', 'DepartmentController@delete')->name('delete_department');

	//SUB DEPARTMENTS

	Route::get('/sub-departments', 'SubDepartmentController@index')->name('list_sub_departments');
	Route::get('/sub-departments/create', 'SubDepartmentController@create')->name('create_sub_department');
	Route::post('/sub-departments', 'SubDepartmentController@store')->name('store_sub_department');
	Route::get('/sub-departments/edit/{id}', 'SubDepartmentController@edit')->name('edit_sub_department');
	Route::delete('/sub-departments/delete/{id}', 'SubDepartmentController@delete')->name('delete_sub_department');

	//BRANCHES

	Route::get('/branches', 'BranchController@index')->name('list_branches');
	Route::get('/branches/create', 'BranchController@create')->name('create_branch');
	Route::post('/branches', 'BranchController@store')->name('store_branch');
	Route::get('/branches/edit/{id}', 'BranchController@edit')->name('edit_branch');
	Route::delete('/branches/delete/{id}', 'BranchController@delete')->name('delete_branch');


	//OFFICES

	Route::get('/offices', 'OfficeController@index')->name('list_offices');
	Route::get('/offices/create', 'OfficeController@create')->name('create_office');
	Route::post('/offices', 'OfficeController@store')->name('store_office');
	Route::get('/offices/edit/{id}', 'OfficeController@edit')->name('edit_office');
	Route::delete('/offices/delete/{id}', 'OfficeController@delete')->name('delete_office');
	Route::get('/offices/search', 'OfficeController@search');

});
	//TRACKS

	Route::get('/tracks', 'TrackController@index')->name('list_tracks');
	Route::get('/tracks/create', 'TrackController@create')->name('create_track');
	Route::post('/tracks', 'TrackController@store')->name('store_track');
	Route::get('/tracks/edit/{id}', 'TrackController@edit')->name('edit_track');
	Route::delete('/tracks/delete/{id}', 'TrackController@delete')->name('delete_track');
	Route::get('/tracks/show/{id}', 'TrackController@show')->name('show_track');



	Route::get('/settings', 'SettingsController@index')->name('list_settings');


	





























// NELSONS ROUTES

	// DOCUMENTS
	Route::get('/documents','DocumentController@index')->name('document_index');
	Route::get('/documents/create','DocumentController@create')->name('create_document');
	Route::post('/documents','DocumentController@store')->name('store_document');
	Route::get('/document_index','DocumentController@index')->name('document-index');
	Route::get('/documents/view/{id}','DocumentController@viewDocument')->name('view_doc');

	Route::get('/documents_test', 'HomeController@document');

	Route::get('/documents/received', 'DocumentController@received')->name('received_documents');
	Route::get('/documents/pending', 'DocumentController@pending')->name('pending_documents');
	Route::get('/documents/submitted', 'DocumentController@submitted')->name('submitted_documents');
	Route::get('/documents/completed', 'DocumentController@completed')->name('completed_documents');
	// Route::get('/documents/send/{id}', 'DocumentController@send')->name('send_document');
	Route::get('/documents/get_doc_by_id/{id}', 'DocumentController@get_doc_by_id');
	Route::post('/documents/send', 'DocumentController@send')->name('send_document');




	// DOCUMENT STORAGE
	Route::get('/document_storage','DocumentStorageController@index')->name('document_manager_index');
	Route::get('/document_storage/show/{id}','DocumentStorageController@show')->name('show_document');
	Route::get('/document_storage/view/{id}','DocumentStorageController@viewDocument')->name('view_document');

});

