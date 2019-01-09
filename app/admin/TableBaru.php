<?php

Admin::model('App\TableBaru')->title('Table Baru')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');

})->form(function ()
{
	FormItem::text('name')->required()->unique();

});
