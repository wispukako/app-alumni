<?php

Admin::model('App\Template')->title('Template')->with('template_category')->filters(function ()
{

})->columns(function ()
{
	Column::string('title', 'Title');
	Column::date('date');
	Column::image('image', 'Image');
	Column::string('template_category.name', 'Category');
	Column::string('opsi', 'Opsi');
	Column::string('textAddon1', 'textAddon1');
	Column::string('textAddon2', 'textAddon2');
	Column::string('description', 'description');


})->form(function ()
{
	FormItem::date('date', 'Date');
	FormItem::text('title')->required()->unique();
	FormItem::image('image', 'Image');
	FormItem::select('template_category_id','Category')->list('\App\TemplateCategory');
	FormItem::select('opsi', 'Opsi')->enum(['OPSI1','OPSI2'])->required();
	FormItem::textAddon('textAddon1', 'textAddon 1')->addon('before')->placement('before');
	FormItem::textAddon('textAddon2', 'textAddon 2')->addon('after')->placement('after');
	FormItem::ckeditor('description','Description');

});
