<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware("auth:admin")->except([
            "index","show",
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.categories.create")->with([
            "categories"=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            "title"=> "required|min:3",
            "description"=> "required|min:5",
            "image"=> "required|image|mimes:png,jpg,jpeg|max:2048",



        ]);
        if($request->has("image")){
            $file = $request->image;
            $imageName = "images/categories/".time()."_".$file->getClientOriginalName();
            $file->move(public_path("images/categories"),$imageName);
            $title = $request->title;
        }
        Category::create([
            "title" => $title,
            "slug" => Str::slug($title),
            "description" => $request->description,
            "image" => $imageName,


         

        ]);
        return redirect()->route("admin.categories")->withSuccess("Produit ajouté");
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        return view("categories.show")->with([
            "categorie"=> $categorie
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view("admin.categories.edit")->with([
            "category"=>$category,
            "categories"=>Category::all()
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $this->validate($request,[
            "title"=> "required|min:3",
            "description"=> "required|min:5",
            "image"=> "required|image|mimes:png,jpg,jpeg|max:2048",

         
          ]);
                   //update data
                   if($request->has("image")){
                    $image_path = public_path("images/categories/".$category->image);
                    if(File::exists($image_path)){
                        unlink($image_path);
                    }
                  $file = $request->image;
                  $imageName = "images/categories/".time()."_".$file->getClientOriginalName();
                  $file->move(public_path("images/categories"),$imageName);
                   $category->image = $imageName;
              }
              $title = $request->title;
             $category->update([
                      "title" => $title,
                      "slug" => Str::slug($title),
                      "description" => $request->description,
                      "image" =>  $category->image,
                  ]);
            return redirect()->route("admin.categories")->withSuccess("Categories Modifié");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
         //
          //delete data
  
          $image_path = public_path("images/categories/".$category->image);
          if(File::exists($image_path)){
              unlink($image_path);
        
        
    }
 
   $category->delete();
        return redirect()->route("admin.categories")
        ->withSuccess("categories Supprimé");
    }
}
