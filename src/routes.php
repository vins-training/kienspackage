<?php
Route::get('test', function(){
	echo 'Hello from the calculator package!';
});
Route::get('teams', 'Kiendo\Mypackage\MypackageController@index');
Route::get('subtract/{a}/{b}', 'Kiendo\Mypackage\MypackageController@subtract');

