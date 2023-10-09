@extends('layouts.base')

@section('content')


    <!-- Start header area -->
@include('inc.header')
    <!-- End header area -->

    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title mb-10">My Account</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text__secondary">My Account</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- my account section start -->
        <admin-component vueurl={{config('app.front_end_url')}} ></admin-component>
        <!-- my account section end -->

        <!-- Start newsletter section -->

        <!-- End newsletter section -->


    </main>

    <!-- Start footer section -->
    @include('inc.footer')
    <!-- End footer section -->


@endsection

