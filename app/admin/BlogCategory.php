<?php

Admin::model('App\BlogCategory')->title('Blog Category')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');

})->form(function ()
{
	FormItem::text('name')->required()->unique();

});
