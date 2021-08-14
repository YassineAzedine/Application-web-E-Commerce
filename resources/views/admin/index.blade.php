
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">
      <div class="card">
       <a href="{{route("admin.products")}}" style=text-decoration:none;>
        <div class="card bg-primary text-white">
            <div class="card-body d-flex flex-column justify-content-center align-items-center">
              <h3>Produit</h3>
            
              <span class="font-weight-bold"> 
                  {{$products->count()}}
              </span>
            </div>
            
          </div>
    </a>
      </div>
        </div>
        <div class="col-md-4">
            <div class="card">
             <a href="{{route("admin.orders")}}" style=text-decoration:none;>
          <div class="card bg-danger text-white">
      <div class="card bg-danger text-white">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h3>Commandes</h3>
          
            <span class="font-weight-bold"> 
                {{$orders->count()}}
            </span>
          </div>
        
        </div>

      </div>
          </a>
            </div>
              </div>
              <div class="col-md-12">
                <div class="card">
                 <a href="{{route("admin.categories")}}" style=text-decoration:none;>
              <div class="card bg-danger text-white">
          <div class="card bg-danger text-white">
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                <h3>Categories</h3>
              
                <span class="font-weight-bold"> 
                  {{$categories->count()}}
                
                </span>
              </div>
            </div>
    </div>
</div>
<div class="col-md-12">
  <div class="card">
   <a href="{{route("admin.users")}}" style=text-decoration:none;>
<div class="card bg-danger text-white">
<div class="card bg-danger text-white">
<div class="card-body d-flex flex-column justify-content-center align-items-center">
  <h3>users</h3>

  <span class="font-weight-bold"> 
    {{$users->count()}}
  
  </span>
</div>
</div>
</div>
</div>


@endsection
