<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_obj = Category::paginate(3);
        return view('admin.category.list')->with('list_obj', $list_obj);
    }
    public function indexClient()
    {
        $list_obj = Category::all();
        return view('client.index')->with('list_obj', $list_obj);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(StoreCategoryPost $request)
    {
        $request->validated();
        $obj = new Category();
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        if(Input::hasFile('images')){
            $image_id = time();
            Cloudder::upload(Input::file('images')->getRealPath(), $image_id);
            $obj->images = Cloudder::secureShow($image_id);
        }
        $obj->save();
        return redirect('/admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       return view('admin.404.404');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return view('admin.404.404');
        }
        return view('admin.category.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, StoreCategoryPost $request)
    {
        $request->validated();
        $obj = Category::find($id);
        if ($obj == null) {
            return view('admin.404.404');
        }
        $obj->name = Input::get('name');
        $obj->description = Input::get('description');
        if(Input::hasFile('images')){
            $image_id = time();
            Cloudder::upload(Input::file('images')->getRealPath(), $image_id);
            $obj->images = Cloudder::secureShow($image_id);
        }
        $obj->save();
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Category::find($id);
        if ($obj == null) {
            return response('Category not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }

    public function destroyMany()
    {
        Category::destroy(Input::get('ids'));
        return Input::get('ids');
    }
}
