<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model {

	protected $fillable = [
		'comment_content',
		'comment_parent',
		'rating',
		'blog_id'
	];

	/**
	 * prepare a new object by given data
   *
	 * @param array $attributes
	 *
	 * @return object
	 */
	public	static function open(array $attributes)
	{
			return new static($attributes);
	}

	/**
	 * a comment belong to a deal, and a deal has many commnets
	 *
	 * @return object
	 */
	public function blog()
	{
		return $this->belongsTo('App\Blog');
	}

	/**
	 * a comment belong to a user, and a user has many commnets
	 *
	 * @return object
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * a comment has many comments or replies
	 *
	 * @return object
	 */
	public function replies()
	{
		return $this->hasMany('App\Comment','comment_parent');
	}

}
