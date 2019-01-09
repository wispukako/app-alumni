<?php

Admin::model('App\SekolahSmp')->title('Daftar Sekolah SMP')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');
	Column::string('description', 'description');

})->form(function ()
{
	FormItem::text('name')->required()->unique();
	FormItem::ckeditor('description','Description');

});
