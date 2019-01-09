<?php

Admin::model('SleepingOwl\AdminAuth\Entities\Administrator')->title('Administrator')->filters(function ()
{

})->columns(function ()
{
	Column::string('username', 'Username');
	Column::string('name', 'name');


})->form(function ()
{

	FormItem::text('name')->required();
	FormItem::text('username')->required()->unique();
	FormItem::password('password')->required();
});
