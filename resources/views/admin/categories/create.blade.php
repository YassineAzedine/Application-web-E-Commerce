
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
     <div class="col-md-4">
         @include("layouts.sidebar")
     </div>
     <div class="col-md-8">
         <div class="card p-3">
          
             <h3 class="card-title">Ajouter une category</h3>
             <div class="card-body">
                 <form method="post" action="{{route("categories.store")}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type ="text" name="title"  placeholder="Titre" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="description" placeholder="Description" id="" cols="30" rows="10"></textarea>
                </div>
           
                <div class="form-group">
                    <input type="file"
    
                    name="image"
                   class="form-control">
                </div>
        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                       valider
                    </button>
                </div>
                </form>
             </div>
            
           
         </div>
     </div>
   
        </div>
    </div>
 

@endsection