<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\BookFormRequest;
use App\Repositories\Book\BookRepositoryInterface;

class BooksController extends Controller
{
	/**
	 * @var BookRepositoryInterface
	 */
	private $book;

	public function __construct(BookRepositoryInterface $book) {
		$this->book = $book;
	}

	public function index()
    {
	    $books =  $this->book->all();

	    return view('book.index', compact('books'));
    }

	public function create()
	{
		return view('book.create');
	}

	public function store(BookFormRequest $request)
	{
		$this->book->save($request->all());

		return redirect()->action('BooksController@index')->withSuccess('Information saved successfully.');
	}

	public function edit($bookId)
	{
		$book = $this->book->find($bookId);

		if(is_null($book)) abort(404);

		return view('book.edit', compact('book'));
	}

	public function update($bookId, BookFormRequest $request)
	{
		$this->book->update($bookId, $request->all());

		return redirect()->action('BooksController@index')->withSuccess('Information saved successfully.');
	}

	public function destroy($bookId)
	{
		$this->book->delete($bookId);

		return redirect()->action('BooksController@index')->withSuccess('Information deleted successfully.');
	}
}
