<?php

/*
 * Describe your menu here.
 *
 * There is some simple examples what you can use:
 *
 * 		Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard')->uses('\AdminController@getIndex');
 * 		Admin::menu(User::class)->icon('fa-user');
 * 		Admin::menu()->label('Menu with subitems')->icon('fa-book')->items(function ()
 * 		{
 * 			Admin::menu(\Foo\Bar::class)->icon('fa-sitemap');
 * 			Admin::menu('\Foo\Baz')->label('Overwrite model title');
 * 			Admin::menu()->url('my-page')->label('My custom page')->uses('\MyController@getMyPage');
 * 		});
 */
$role = '';
 if (AdminAuth::user()){
   $role = AdminAuth::user()->role;
 }

Admin::menu()->url('/')->label('Home')->icon('fa-dashboard')->uses('App\Http\Controllers\DashboardController@getIndex');

if($role=='Admin'){
  Admin::menu()->label('Manajemen Alumni')->icon('fa-users')->items(function ()
   {
	 Admin::menu('App\TableBaru')->icon('fa-arrow-right');
     Admin::menu('App\SekolahSd')->icon('fa-arrow-right');
     Admin::menu('App\SekolahSmp')->icon('fa-arrow-right');
     Admin::menu('App\SekolahSma')->icon('fa-arrow-right');
     Admin::menu('App\Angkatan')->icon('fa-arrow-right');
     Admin::menu('App\Pekerjaan')->icon('fa-arrow-right');
     Admin::menu('App\Alumni')->icon('fa-arrow-right');
   });
   Admin::menu()->label('Manajemen Blog')->icon('fa-rss')->items(function ()
    {
      Admin::menu('App\Blog')->icon('fa-arrow-right');
      Admin::menu('App\BlogCategory')->icon('fa-arrow-right');
    });
   Admin::menu()->label('Manajemen Gallery')->icon('fa-camera-retro')->items(function ()
   {
     Admin::menu('App\Gallery')->icon('fa-arrow-right');
     Admin::menu('App\GalleryImage')->icon('fa-arrow-right');
   });
} else {
  Admin::menu()->label('Blog')->icon('fa-rss')->items(function ()
   {
     Admin::menu('App\Blog')->icon('fa-arrow-right');
   });
  Admin::menu()->label('Gallery')->icon('fa-camera-retro')->items(function ()
  {
    Admin::menu('App\Gallery')->icon('fa-arrow-right');
    Admin::menu('App\GalleryImage')->icon('fa-arrow-right');
  });
}
