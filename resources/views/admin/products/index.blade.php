
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-4">
            @include('layouts.sidebar')
        </div>
        
        <div class="col-md-8 p-2">
          <a 
      href="{{route("products.create")}}"
          class="btn  btn-primary my-2" >
            <i class="fa fa-plus"></i>
          </a>
          
            
          <table class="table table-hover table-dark">
            <thead class="bg-primary"><tr>
              <th>ID</th>
              <th>Titre</th>
              <th>description</th>
              <th>Qté</th>
              <th>Prix</th>
              <th>Disponible</th>
              <th>Image</th>
              <th>Catégorie</th>
              <th>Action</th>
          
            </tr></thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td>{{Str::limit($product->description,50)}}</td>
                <td>{{$product->inStock}}</td>
                <td>{{$product->price}} DH</td>
            


                <td>@if($product->inStock > 0)
                <i class="fa fa-check text-success"></i>
                @else
                <i class="fa fa-times text-danger"></i>
              
                @endif
               
                </td>
                <td> <img src="{{ asset($product->image)}}" alt="{{$product->title}}"
                    width="50"
                    height="50"
                    class="img-fluid rounded"
                    >
                
                </td>
                <td>
                    {{$product->category->title  }}
                </td>
              
                   <td>
                    <div class="justify-content-center d-flex">
                    <a 
                    href="{{route("products.edit",$product->slug)}}"
                        class="btn btn-sm btn-warning mr-2">
                          <i class="fa fa-edit"></i>
                        </a>
                       <form id="{{$product->id}}" method="POST" action="{{route("products.destroy",$product->slug)}}">
                    @csrf
                    @method("DELETE")
                    <button 
                    onclick="event.preventDefault();
                     if(confirm ('Voulez vous vraiment supprimer la product {{$product->title}}?'))
                           document.getElementById({{$product->id}}).submit();
                          "
                    class="btn btn-sm btn-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                  </form>
                         </td>
              </tr>
              @endforeach
            </tbody>
            </table>
            <div class="justify-content-center d-flex">

                {{$products->links()}}
            </div>

          </div>
        </div>

   
        </div>
 

@endsection