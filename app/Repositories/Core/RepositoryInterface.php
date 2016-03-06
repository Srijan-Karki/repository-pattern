<?php

namespace App\Repositories\Core;


interface RepositoryInterface {

	public function find($identifier);

	public function save(array $data);

	public function update($identifier, array $data);

	public function delete($identifier);
}
