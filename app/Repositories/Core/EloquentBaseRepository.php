<?php

namespace App\Repositories\Core;

use Illuminate\Database\Eloquent\Model;

abstract class EloquentBaseRepository implements RepositoryInterface {

	/**
	 * @var Model
	 */
	protected $model;

	public function __construct(Model $model) {
		$this->setModel($model);
	}


	protected function setModel($model) {

		$this->model = $model;
	}

	public function find( $identifier ) {
		return $this->model->find($identifier);
	}

	public function save( array $data ) {
		return $this->model->fill($data)->save();
	}

	public function update( $identifier, array $data ) {
		$model = $this->find($identifier);
		return $model->fill($data)->save();
	}

	public function delete( $identifier ) {
		return $this->find($identifier)->delete();
	}
}
