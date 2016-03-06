<?php

namespace App\Repositories\Core;

use Illuminate\Database\DatabaseManager;

abstract class DBBaseRepository implements RepositoryInterface{

	protected $table;
	/**
	 * @var DatabaseManager
	 */
	protected $db;

	public function __construct(DatabaseManager $db) {
		$this->db = $db;
	}

	public function find( $identifier ) {
		return $this->db->table($this->table)->where('id', $identifier)->first();
	}

	public function save( array $data ) {
		return $this->db->table($this->table)->insert($data);
	}

	public function update( $identifier, array $data ) {
		return $this->db->table($this->table)->where('id', $identifier)->update($data);
	}

	public function delete( $identifier ) {
		return $this->db->table($this->table)->where('id', $identifier)->delete();
	}
}
