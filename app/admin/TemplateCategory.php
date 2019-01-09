<?php

Admin::model('App\TemplateCategory')->title('Template Category')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');

})->form(function ()
{
	FormItem::text('name')->required()->unique();

});
