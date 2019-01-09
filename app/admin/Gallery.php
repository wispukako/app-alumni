<?php

Admin::model('App\Gallery')->title('Data Gallery')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');
	Column::image('image', 'Cover');
	Column::string('description', 'description');

})->form(function ()
{
	FormItem::text('name')->required();
	FormItem::image('image', 'Cover');
	FormItem::ckeditor('description','Description');

});
