<?php

namespace App\Repositories\Category;

use App\Category;
use App\Repositories\Core\EloquentBaseRepository;

class CategoryEloquentRepository extends EloquentBaseRepository implements CategoryRepositoryInterface{

	/**
	 * @var Category
	 */
	private $category;

	public function __construct( Category $category ) {
		parent::__construct( $category );
		$this->category = $category;
	}

	public function all() {
		return $this->category->orderBy('name')->get();
	}
}
