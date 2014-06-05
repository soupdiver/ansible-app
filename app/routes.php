<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
  echo "Server: ".$_SERVER['SERVER_ADDR']."<br>";
	
  $users = DB::table('users')->get();

  foreach ($users as $user)
  {
      var_dump($user->name);
  }
});

Route::get('/add', function()
{
  for($i = 0; $i < 10000; $i++)
  {
    DB::table('users')->insert(
        array('name' => $i)
    );
  }
});
