<?php

namespace App\Repositories\Category;

interface CategoryRepositoryInterface {

	public function all();

	public function find($identifier);

	public function save(array $data);

}
