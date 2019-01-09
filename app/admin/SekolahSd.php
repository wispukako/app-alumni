<?php

Admin::model('App\SekolahSd')->title('Daftar Sekolah SD')->with()->filters(function ()
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
