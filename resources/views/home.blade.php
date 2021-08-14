



<style>
    

  /*==========bg Section===========*/
  #bg{
      display:table;
      width: 100%;
      height: 100vh;
      background: url(/image/products/bg.jpg) ;
      background-size: cover;
  }
  
  
   .bg-container{
      background: rgba(0,0,0,0.2);
      display: table-cell;
      margin: 0;
      padding:0;
      text-align: center;
      vertical-align: middle;
  }
  
  
  
  
  /*==========End of bg Section===========*/
  
  /*========== category Section===========*/
  
  
  
  .category .card-img img{
      max-width: 100%;  
   
  }
  .category .card-body{
      z-index: 10;
      background: #ff9b04a6;
      border-top:4px solid #f08902;
      padding: 30px;
      box-shadow: 0px 2px 15px rgba(241, 159,5, 0.5 );
      margin-top: -60px;
      transition: 0.3s;
  }
  .variety .card-title{
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
  }
  
  
  
  
  
  
  
  /*========== category Section===========*/
  /*==========Product  Section===========*/
  .bg-img{
      background:rgb(7, 7, 7);
    }
   
  
    .product {
      width: 100%;
      display: block;
      margin-bottom: 40px;
   }
    
      .product .img {
       
        background-position:center;
        display: block;
        border-radius: 4px;
        height: 350px;
        position: relative;
        transition: all 0.3s ease;
        z-index: 0; }
        .product .img:after {
       
          position: absolute;
        
        
         }
        .product .img .icons {
         transition: all 0.3s ease;
          opacity: 0; }
    
            .product .img .icons .icon-block a i {
              color: #fff; }
      
      
      
    
        
      
            .product:hover .img .icons {
              opacity: 1; }
    
   
    .shado:hover, .shado:focus, .shado:active {
      box-shadow: 1px 1px 8px rgb(223, 108, 0);
    }
  
  
  /*==========End of Product Section===========*/
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  /*==========End of  Blog Section===========*/
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </style>
  
  
  @extends('layouts.app')
  
  @section('content')
  
  <!doctype html>
  <html lang="en">
    <head>
      <title>Restaurant</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
     
    
       
      <!---Hero Section-->
      <section id="bg">
          <div class="bg-container ">
              <div class="hero-logo">
                  <h1 class="font-weight-bold text-warning">with foodie  </h1>
              </div>
              <h2 class="font-weight-bold text-white">Healthy Food, Happy Mood</h2>
           
          </div>
      </section>
      <!---End of Hero Section-->
      
    
      <!--categories----->
 
      <section  class="category pt-4 ">
          <div class="container bg-light">
              <div class="section-title">
                  <h2 class="text-center font-weight-bold">Categories</h2>
    
              </div>
              <div class="row">
                @foreach ($categories as $category)
              <div class="col-md-6 d-flex align-items-stretch">
                

  
                      <div class="card">
                          <div class="card-img">
                              <img src="{{asset ($category->image)}}" alt="">
                          </div>
                          <div class="card-body">
                              <h5 class="card-title text-center">
                                  <a href="{{ route("category.products",$category->slug) }}">{{ ($category->title)}}</a>
                              </h5>
                              <p class="card-text">
                                {{Str::limit($category->description,100)}}
                              </p>
                               
                          </div>
                      </div>
                      
                  </div>
                  @endforeach
                  <!---->
                
                  <!---->
                 
              </div>
          </div>
      </section>
      <script>
        $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
      </script>
      <!-- Button trigger modal -->


      <!---End of category-->
      <!--Product Section-->
      <section class="product-section bg-img py-3">
          <div class="container">
              <div class=" row justify-content-center pb-5">
                  <div class="col-md-7 heading-section text-center">
                      <h2 class="font-weight-bold text-color shadow text-white">
                         Menus
                      </h2>
                  </div>
              </div>
              <!--End of title-->
              <div class="row">
                      
                @foreach ($products as $product)
                  <div class="col-md-3 d-flex">
                      <div class="product shado">
                      <div class="img d-flex align-items-center justify-content-center"
                      style="background-image:url({{asset ($product->image)}});">
                      <div class="icons">
                          <p class="icon-block d-flex">
                            
                       <a href="{{route("products.show",$product->slug)}}"class="d-flex align-items-center justify-content-center ">
                     
                   
                      
</a>    
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal{{$product->slug}}">
  <i class="fas fa-shopping-cart"></i>
</button>

  
    
                      </p>
                      </div>
                       
                       </div>
                       <div class="text text-center">
                          <h2 class="text-white ">{{$product->title}}</h2>
                           <span class="category font-weight-bold text-info">{{Str::limit($product->description,100)}}</span>
       <h1></h1>
                           <span class="price text-primary"> {{$product->price}} DH</span>
                       </div>
                  </div>  
                  </div>
                  <!-- Modal -->
  @include('products.show')
                  @endforeach
                  <!----->
               
          </section>
      <!--End of Product Section-->
      <div class="justify-content-center text-center d-flex">
        {{$products->links()}}
    </div>
    
      
      
   
  
   
  
   <!-- End of Blog Section-->
   <!---Contact Form-->
   <section class="social">
    <div class="container text-center bg-light ">
        <ul class=" d-flex justify-content-between">
            <li>
                <a href="#"><img src="https://img.icons8.com/cute-clipart/64/000000/facebook.png" /></a>
            </li>
            <li>
                <a href="#"><img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png" /></a>
            </li>
            <li>
                <a href="#"><img src="https://img.icons8.com/cute-clipart/64/000000/twitter.png" /></a>
            </li>
        </ul>
    </div>
</section>
<!-- socials section starts here -->
<!-- footer section starts here -->

<section class="footer">
    <div class="container text-center">
        <p>Restaurant Foodie By <a href="">Yassine Azedine</a></p>
    </div>
</section>
  
  
  
  
  @endsection
  
  
  
  
  
  
  
  
  
  
  
  
   <!--end of Contact Form-->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   
  
  
  
  
  
  
  
  
  
  
  
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>