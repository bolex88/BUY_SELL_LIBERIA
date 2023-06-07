@extends('layouts.homemaster')

@section('main')
      <!-- SELLER VIEW BEGINS HERE -->
      <section id="product-edit-section">
        <div class="container">

            <div class="row mt-2">
              <div class="col">
                <h4 class="text-center">Update Product</h4>
              </div>
            </div>

            <div class="container">
                   <div class="row my-8">
                    
                       <div class="col-md-6">
                            <form action="{{route('products.update', $id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                    <!-- <div class="col-md-6">
                                        <div class="card my-5">
                                            <div class="column">
                                                <img src="/storage/{{$product->images()->first()->path}}" alt="" class="card-img-top">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group row mt-4">
                                        <label for="title" class="col-sm-4 col-form-label">Product Name:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="title" value="{{$product->title}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="description" class="col-sm-4 col-form-label">Description:</label>
                                        <div class="col-sm-8">
                                        <textarea class="form-control" name="description" cols="30" rows="5" >{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="price" class="col-sm-4 col-form-label">Prices:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="price" value="{{$product->price}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="location" class="col-sm-4 col-form-label">Location:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="location" value="{{$product->location}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label for="seller_contact" class="col-sm-4 col-form-label">Seller Contact:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="seller_contact" value="{{$product->seller_contact}}">
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-block btn-primary">Update Product<span><i class="far fa-hand-point-right"></i></span></button>
                            </form>
                        </div>
                       
                    </div>
            </div>

                    </div>
                </div> 
        </div>
      </section>
      <br />
      <!-- SELLER VIEW ENDS HERE -->

@endsection