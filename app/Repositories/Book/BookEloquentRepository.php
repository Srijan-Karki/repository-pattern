<?php

namespace App\Repositories\Book;

use App\Repositories\Core\EloquentBaseRepository;
use App\Book;

class BookEloquentRepository extends EloquentBaseRepository implements BookRepositoryInterface {

	/**
	 * @var Book
	 */
	protected $book;

	public function __construct(Book $book) {
		parent::__construct( $book );
		$this->book = $book;
	}

	public function findWithAuthor( $identifier ) {

		return $this->book->join( 'users', 'users.id', '=', 'books.author_id' )
		                  ->select( 'books.*', 'users.name as author' )
		                  ->where( 'books.id', $identifier )
		                  ->first();
	}

	public function all() {

		return $this->book->join( 'users', 'users.id', '=', 'books.author_id' )
		           ->select( 'books.*', 'users.name as author' )
		           ->get();
	}
}
