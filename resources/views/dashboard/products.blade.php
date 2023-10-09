@extends('dashboard.layouts.base')

@section('content')

<div class="page-body">
    <div class="m-5"></div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product List
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

                    <!-- Container-fluid starts-->
                    <div class="container-fluid">
                        <div class="row products-admin ratio_asos">

                            @forelse ($products as $product)

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="javascript:void(0)"><img src="{{$product->img_url}}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                <div class="product-hover">
                                                    <ul>
                                                        <li>
                                                            <button class="btn" type="button" data-original-title=""
                                                                title=""><i class="ti-pencil-alt"></i></button>
                                                        </li>
                                                        <li>
                                                            <button class="btn"><i class="ti-trash"></i></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i></div>
                                            <a href="javascript:void(0)">
                                                <h6>{{$product->name}}</h6>
                                            </a>
                                            <h4>NGN {{number_format($product->price, 2)}}</h4>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @empty

                            <div class="py-5 text-center">no products  yet...</div>

                            @endforelse


                        </div>
                    </div>
                    <!-- Container-fluid Ends-->
</div>



@endsection
