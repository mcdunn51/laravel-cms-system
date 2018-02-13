<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $casts = [
		'title' => 'string', 
		'body' => 'string',
		'slug' => 'string',
		'category_id' => 'integer'
	];
    protected $fillable = ['title', 'body', 'slug', 'category_id'];

    protected $rule = [
		'title' => 'required|string', 
		'body'  => 'required|string',
		'slug'  => 'required|',
		'category_id' => 'required|integer'
	];


	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function tags() 
	{
		return $this->belongsToMany('App\Tag');
	}

	
}
