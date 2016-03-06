<?php

namespace App\Repositories\Book;

use App\Repositories\Core\DBBaseRepository;
use Illuminate\Database\DatabaseManager;

class BookDBRepository extends DBBaseRepository implements BookRepositoryInterface{

	protected $table = 'books';

	public function __construct( DatabaseManager $db ) {
		parent::__construct($db);
		$this->db = $db;
	}

	public function all() {

		return $this->db->table($this->table)->join( 'users', 'users.id', '=', 'books.author_id' )
		                           ->select( 'books.*', 'users.name as author' )
		                           ->get();
	}

	public function findWithAuthor( $identifier ) {

		return $this->db->table($this->table)->join( 'users', 'users.id', '=', 'books.author_id' )
		         ->select( 'books.*', 'users.name as author' )
		         ->where( 'books.id', $identifier )
		         ->first();
	}
}
