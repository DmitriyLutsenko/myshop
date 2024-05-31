@extends('mytheme.layouts.template')

@if(isset($catalog))

    @if(strlen(trim($catalog['seotitle'])) > 0)
        @section('title')
            {{ $catalog['seotitle'] }}
        @endsection
    @else 
        @section('title')
            {{ $catalog['title'] }} | Магазин компьютерной техники
        @endsection
    @endif

    @if(strlen(trim($catalog['seodescription'])) > 0)
        @section('description')
        {{ $catalog['seodescription'] }}
        @endsection
    @else
        @section('description')
        Страница {{ $catalog['title'] }}. Заказать технику на нашем сайте просто.
        @endsection
    @endif

@else
    @section('title')
    Каталог | Магазин компьютерной техники
    @endsection

    @section('description')
    Каталог магазина компьютерной техники.
    @endsection
@endif

@section('content')

    <div class="shop-category-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Shop Top Area Start -->
                        <div class="shop-top-bar d-flex">
                            <!-- Left Side End -->
                            <div class="shop-tab nav" role="tablist">
                                <button class="active" data-bs-target="#shop-grid" data-bs-toggle="tab" aria-selected="true" role="tab">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </button>
                                <button data-bs-target="#shop-list" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </button>
                            </div>
                            <!-- Right Side Start -->
                            <div class="select-shoing-wrap d-flex align-items-center">
                                <div class="shot-product">
                                    <p>Sort By:</p>
                                </div>
                                <!-- Single Wedge End -->
                                <div class="header-bottom-set dropdown">
                                    <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown" aria-expanded="false">Default <i class="fa fa-angle-down"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right" style="display: none;">
                                        <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
                                        <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
                                        <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                        <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                        <li><a class="dropdown-item" href="#">Sort By new</a></li>
                                        <li><a class="dropdown-item" href="#">Sort By old</a></li>
                                    </ul>
                                </div>
                                <!-- Single Wedge Start -->
                            </div>
                            <!-- Right Side End -->
                        </div>
                        <!-- Shop Top Area End -->
                        <!-- Shop Bottom Area Start -->
                        <div class="shop-bottom-area">
                            <!-- Tab Content Area Start -->
                            <div class="row">
                                <div class="col">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="shop-grid" role="tabpanel">
                                            <div class="row mb-n-30px">

                                                @foreach($products as $product)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new">New</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="single-product.html" class="image">
                                                                <img src="assets/images/product-image/1.webp" alt="Product">
                                                                <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            @if(!empty($product['categories'][0]))
                                                            <span class="category"><a href="{{ route('catalog.detail', ['code'=>$product['categories'][0]['code']])}}">{{ $product['categories'][0]['title'] }}</a></span>
                                                            @endif
                                                            <h5 class="title">
                                                                <a href="single-product.html">
                                                                    {{$product['title']}}
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">{{$product['price']}}</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            

                                        </div>
                                        <div class="tab-pane fade mb-n-30px" id="shop-list" role="tabpanel">
                                        @foreach($products as $product)
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="single-product.html" class="image">
                                                                    <img src="assets/images/product-image/1.webp" alt="Product">
                                                                    <img class="hover-image" src="assets/images/product-image/1.webp" alt="Product">
                                                                </a>
                                                                <span class="badges">
                                                                <span class="new">New</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                @if(!empty($product['categories'][0]))
                                                                    <span><a href="{{ route('catalog.detail', ['code'=>$product['categories'][0]['code']])}}">{{ $product['categories'][0]['title'] }}</a></span>
                                                                @endif
                                                                <h5 class="title"><a href="single-product.html">{{$product['title']}}</a></h5>
                                                                @if( strlen(trim(($product['description']))) > 0)
                                                                {!!
                                                                    $product['description']
                                                                !!}
                                                                @endif
                                                            </div>
                                                            <div class="box-inner">
                                                                <span class="price">
                                                                <span class="new">{{$product['price']}}</span>
                                                                </span>
                                                                <div class="actions">
                                                                    <button title="Add To Cart" class="action add-to-cart" data-bs-toggle="modal" data-bs-target="#exampleModal-Cart"><i class="pe-7s-shopbag"></i></button>
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                    <button class="action compare" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal-Compare"><i class="pe-7s-refresh-2"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Content Area End -->
                            <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
                                <div class="pages">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                        <!-- Shop Bottom Area End -->
                    </div>
                </div>
            </div>
        </div>


@endsection
