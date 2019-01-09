<?php

Admin::model('App\Pekerjaan')->title('Daftar Jenis Pekerjaan')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');

})->form(function ()
{
	FormItem::text('name')->required()->unique();
});
