<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	/**
	 * The table associated with the model.

	 * @var string
	 */
	protected $table = 'books';

	/**
	 * The primary key for the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'id';

	const PUBLISHED = 1;

	const UNPUBLISHED = 0;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'desc', 'price', 'status'];

	/**
	 * Relation of post with author.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function author() {
		return $this->belongsTo( User::class );
	}
}
