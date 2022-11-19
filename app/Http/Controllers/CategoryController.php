<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Resources\Category\CategoryCollection;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use App\User;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;
use App\Exceptions\ProductNotBelongsToUser;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductCollection;

class CategoryController extends Controller
{

    public function __construct(){
        $this->middleware('auth:api')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoryCollection::collection(Category::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            $category = new Category();
            $category->name = $request->name;
            $category->detail = $request->description;
            $category->timestamps = false;
            $category->save();
            return response([
                'data' => new CategoryResource($category)
            ],201);
        } catch (Exception $exception) {
            return response([$exception->getMessage()],400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

//    public function update(Request $request, Category $category)
//    {
//        $request['detail'] = $request->description;
//        unset($request['description']);
//        $category->update($request->all());
//        return response([
//            'data' => new Catere($product)
//        ],Response::HTTP_OK);
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->ProductUserCheck($product);
        $product->delete();
        return response(null,204);
    }

    public function ProductUserCheck($product){
        if (Auth::id() !== $product->user_id) {
           throw new ProductNotBelongsToUser;
        }
    }
}
