@extends("layouts.index")
@section('content')
@section('page-topic', 'Product')
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('css/product-detail.css')}}">
<div style="background-color: white;">

    <div class="container" style="padding: 50px;">
        <div class="card">
            <div class="row">
                <aside class="col-sm-6 border-right">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            <div> <a href="#"><img src="{{$obj->images}}" alt="{{$obj->name}}"></a></div>
                        </div> <!-- slider-product.// -->
                        {{--<div class="img-small-wrap">--}}
                        {{--<div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>--}}
                        {{--<div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>--}}
                        {{--<div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>--}}
                        {{--<div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>--}}
                        {{--</div> <!-- slider-nav.// -->--}}
                    </article> <!-- gallery-wrap .end// -->
                </aside>
                <aside class="col-sm-6">
                    <article class="card-body p-5">
                        <h3 class="title mb-3">{{$obj->name}}</h3>

                        <p class="price-detail-wrap m-t-30 m-b-30">

                            <span class="txt22 m-t-10">
                                @if($obj->isDiscount())
                                    <span class="font-weight-bold h3 text-danger product_price">VND {{$obj->discountPriceWithFormat}}
                                    </span>
                                        <del class="text-muted">
                                        <small>VND {{$obj->originalPriceWithFormat}}</small>
                                    </del>
                                @else
                                    <span class="font-weight-bold h3 text-danger product_price">VND {{$obj->originalPriceWithFormat}}
                                    </span>
                                @endif
                            </span>

                        <br>
                        <dl class="item-property">
                            <dt>Overview</dt>
                            <dd><p>{{$obj->overview}}</p></dd>
                        </dl>
                        <dl class="item-property">
                            <dt>Description</dt>
                            <dd><p>{{$obj->description}}</p></dd>
                        </dl>
                        {{--<dl class="param param-feature">--}}
                            {{--<dt>Brand</dt>--}}
                            {{--<dd>{{$brand}}</dd>--}}
                        {{--</dl>  <!-- item-property-hor .// -->--}}
                        <hr>
                        <button class="btn btn-lg btn-danger text-uppercase add-to-cart" id="add-cart-{{$obj->id}}"> <i class="fas fa-shopping-cart"></i> Add to cart </button>
                    </article> <!-- card-body.// -->
                </aside> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- card.// -->
   </div>
</div>
@endsection
