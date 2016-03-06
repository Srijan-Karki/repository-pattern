<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CategoryFormRequest;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryController extends Controller
{
	/**
	 * @var CategoryRepositoryInterface
	 */
	private $category;

	/**
	 * CategoryController constructor.
	 *
	 * @param CategoryRepositoryInterface $category
	 */
	public function __construct(CategoryRepositoryInterface $category) {
		$this->category = $category;
	}

	public function index()
	{
		$categories =  $this->category->all();

		return view('category.index', compact('categories'));
	}

	public function create()
	{
		return view('category.create');
	}

	public function store( CategoryFormRequest $request)
	{
		$this->category->save($request->all());

		return redirect()->action('CategoryController@index')->withSuccess('Information saved successfully.');
	}

	public function edit($categoryId)
	{
		$category = $this->category->find($categoryId);

		if(is_null($category)) abort(404);

		return view('category.edit', compact('category'));
	}

	public function update($categoryId, categoryFormRequest $request)
	{
		$this->category->update($categoryId, $request->all());

		return redirect()->action('CategoryController@index')->withSuccess('Information saved successfully.');
	}

	public function destroy($categoryId)
	{
		$this->category->delete($categoryId);

		return redirect()->action('CategoryController@index')->withSuccess('Information deleted successfully.');
	}
}
