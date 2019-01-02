<?php
namespace Food\Http\Controllers;
use Food\Category;
use Illuminate\Http\Request;
use Food\Http\Requests\CategoryRequest;
use Session;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('parent_id', NULL)->orderBy('id', 'desc')->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id', NULL)->orderBy('id', 'desc')->get();
        return view('admin.categories.create', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = $request->all();
        if (Category::create($category)) {
            return redirect()->route('admin.categories.index')->with('message', 'Successfully created category');
        } else {
            return redirect()->route('admin.categories.create');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \Food\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \Food\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function showSubcategory($id)
    {
        $subcategory = Category::where('parent_id', $id)->get();

        return view('admin.categories.subcategory', compact('subcategory', 'id'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Food\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categoryIds = Category::where('parent_id', NULL)->pluck('name', 'id');
        return view('admin.categories.edit', compact('category', 'categoryIds'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Food\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->all();
        if ($category->update($data)) {
            return redirect()->route('admin.categories.index')->with('message', 'Successfully updated category');
        } else {
            return redirect()->back()->with('error', 'Update failed');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \Food\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::withCount('childs', 'products')->where('id', $id)->first();

            if($category->childs_count == 0)
                if($category->products_count == 0)
                    {
                        $category->delete();
                        return redirect()->back()->with('message', 'Successfully deleted');
                    } 
            return redirect()->back()->with('error', 'Delete failed');
    }
}