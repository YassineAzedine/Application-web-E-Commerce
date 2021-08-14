
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        <di class="col-md-4">
            @include('layouts.sidebar')
        </di>
        
        <div class="col-md-8 p-2">
          <a 
      href="{{route("categories.create")}}"
          class="btn  btn-primary my-2">
            <i class="fa fa-plus"></i>
          </a>
            
          <table class="table table-hover table-dark">
            <thead class="bg-primary"><tr>
              <th>ID</th>
              <th>Titre</th>
              <th>description</th>
              
              <th>Image</th>
              <th>Action</th>
             
          
            </tr></thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td>{{Str::limit($category->description,50)}}</td>

            
            
            


               
               
                </td>
                <td> <img src="{{ asset($category->image)}}" alt="{{$category->title}}"
                    width="50"
                    height="50"
                    class="img-fluid rounded"
                    >
                
                </td>
                
              
                   <td>
                    <div class="justify-content-center d-flex">
                    <a 
                    href="{{route("categories.edit",$category->slug)}}"
                        class="btn btn-sm btn-warning mr-2">
                          <i class="fa fa-edit"></i>
                        </a>
                       <form id="{{$category->id}}" method="POST" action="{{route("categories.destroy",$category->slug)}}">
                    @csrf
                    @method("DELETE")
                    <button 
                    onclick="event.preventDefault();
                     if(confirm ('Voulez vous vraiment supprimer la category ?'))
                           document.getElementById({{$category->id}}).submit();
                          "
                    class="btn btn-sm btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                  </form>
                         </td>
              </tr>
              </div>
              @endforeach
            </tbody>
            </table>
            <div class="justify-content-center d-flex">

              {{$categories->links()}}
            </div>

          </div>
        </div>

   
        </div>
 

@endsection