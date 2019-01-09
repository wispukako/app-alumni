<?php

Admin::model('App\GalleryImage')->title('Image Gallery')->with('Gallery')->filters(function ()
{

})->columns(function ()
{
	Column::string('name', 'Name');
	Column::string('gallery.name', 'Gallery');
	Column::image('image', 'Image');
	Column::string('description', 'description');

})->form(function ()
{
	FormItem::text('name');
	FormItem::select('gallery_id','Gallery')->list('\App\Gallery');
	FormItem::image('image', 'Image');
	FormItem::ckeditor('description','Description');

});
