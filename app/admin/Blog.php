<?php

Admin::model('App\Blog')->title('Blog')->with('category')->filters(function ()
{

})->columns(function ()
{


	Column::string('title', 'Title');
	Column::string('category.name', 'Category');
	Column::image('image', 'Image');


})->form(function ()
{
	FormItem::text('title')->required()->unique();
	FormItem::select('blog_category_id','Category')->list('\App\BlogCategory');
	FormItem::image('image', 'Images');
	FormItem::select('status', 'Status')->enum(['PUBLISH', 'UNPUBLISH']);
	FormItem::ckeditor('description','Description');


});
