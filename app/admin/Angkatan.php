<?php

Admin::model('App\Angkatan')->title('Daftar Angkatan')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');
	Column::image('image', 'Image');
	Column::string('description', 'description');

})->form(function ()
{
	FormItem::text('name')->required()->unique();
	FormItem::image('image', 'Image');
	FormItem::ckeditor('description','Description');

});
