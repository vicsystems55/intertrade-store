@extends('layouts.base')

@section('content')


@include('inc.header')
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content">
                        <h1 class="breadcrumb__content--title mb-10">Checkout</h1>
                        <ul class="breadcrumb__content--menu d-flex">
                            <li class="breadcrumb__content--menu__items"><a href="index.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text__secondary">Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start checkout page area -->
    <div class="checkout__page--area section--padding">
      <checkout-component storedb="{{request()->session()->get('storeDb')}}" vueurl="{{config('app.url')}}"></checkout-component>
    </div>
    <!-- End checkout page area -->

     <!-- Start newsletter section -->

    <!-- End newsletter section -->
</main>

@include('inc.footer')

@endsection
