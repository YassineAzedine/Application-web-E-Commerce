<div class="modal fade" id="exampleModal{{$product->slug}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$product->title}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-img">
          <div class="card-img-top">
            <img class="img-fluid w-10" src="{{ asset($product->image) }}"
                alt="{{ $product->title }}">
        </div>
        <div class="modal-body">
          {{$product->description}}
        </div>
  
        </div>
  
        <div class="modal-footer">
         
       
  
          <div class="col-md-12">
            <form action="{{ route("add.cart",$product->slug) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="qty" class="label-input">
                        Qty :
                    </label>
                    <input type="number" name="qty" id="qty"
                        value="1"
                        placeholder="Quantité"
                        max="{{ $product->inStock }}"
                        min="1"
                        class="form-control"
                    >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn text-white btn-block bg-primary">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart
                    </button>
                </div>
            </form>
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>