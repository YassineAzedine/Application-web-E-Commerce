
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center m-4">

        <div class="col-md-4">
          @include('layouts.sidebar')
        </div>
        
        <div class="col-md-8 ">
          <table class="table table-hover table-dark">
            <thead class="bg-primary"><tr>
              <th>ID</th>
              <th>Client</th>
              <th>Produit</th>
              <th>Qté</th>
              <th>Prix</th>
              <th>Total</th>
              <th>Payé</th>
              <th>livrée</th>
              <th>Action</th>

          
            </tr></thead>
            <tbody>
              @foreach($orders as $order)
              <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->user->name}}</td>
                <td>{{$order->product_name}}</td>
                <td>{{$order->qty}}</td>
                <td>{{$order->price}} DH</td>
                <td>{{$order->total}} DH</td>

                <td>@if($order->paid)
                <i class="fa fa-check text-succes"></i>
                @else
                <i class="fa fa-times text-danger"></i>
              
                @endif
               
                </td>
                <td>@if($order->delivered)
                <i class="fa fa-check text-succes"></i>
                @else 
                <i class="fa fa-times text-danger"></i>
                @endif

                
                
                </td>
                                  
                <td class="d-flex flex-row justify-content-center">
                  <form  method = "POST" action="{{route("orders.update",$order->id)}}">
                  @csrf
                  @method("PUT")
                  <button class="btn btn-sm btn-success">
                    <i class="fa fa-check"></i>
                  </button>
                  
                  </form>
                  <form id="{{$order->id}}" method="POST" action="{{route("orders.destroy",$order->id)}}">
                    @csrf
                    @method("DELETE")
                    <button 
                    onclick="event.preventDefault();
                     if(confirm ('Voulez vous vraiment supprimer la commande {{$order->id}}?'))
                           document.getElementById({{$order->id}}).submit();
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

              {{$orders->links()}}
            </div>

          </div>
        </div>

   
        </div>
 

@endsection