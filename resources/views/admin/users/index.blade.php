@extends('layouts.app')
@section('content')
<div class="container-fluid p-3 ">
    <div class="row justify-content-center">
<div class="col-md-4">
    @include('layouts.sidebar')
</div>


   
<div class="col-md-6 p-3">
  
      
    <table class="table table-hover table-dark">
      <thead class="bg-primary"><tr>
        <th>ID</th>
        <th>Name</th>
        <th>email</th>
        <th>Adress</th>

      
    
      </tr> </thead>
      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->adress}}</td>

        </tbody>
        

          



        
      


    
  
       
        
             <td>
              <div class="justify-content-center d-flex">
        
                   </td>
        </tr>
        @endforeach
      </tbody>
      </table>
      <div class="justify-content-center d-flex">

        {{$users->links()}}
      </div>

    </div>
  </div>


  </div>





@endsection