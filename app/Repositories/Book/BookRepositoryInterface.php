<?php

namespace App\Repositories\Book;

interface BookRepositoryInterface {

	public function all();

	public function findWithAuthor($identifier);

	public function find($identifier);

	public function save(array $data);

	public function update($identifier, array $data);

	public function delete($identifier);

}
