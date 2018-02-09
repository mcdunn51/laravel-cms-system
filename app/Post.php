<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $casts = [
		'title' => 'string', 
		'body' => 'string',
		'slug' => 'string'
	];
    protected $fillable = ['title', 'body', 'slug'];

    protected $rule = [
		'title' => 'required|string', 
		'body'  => 'required|string',
		'slug'  => 'required|',
	];


	public function category()
	{
		return $this->belongsTo('App\Category');

	}


}
