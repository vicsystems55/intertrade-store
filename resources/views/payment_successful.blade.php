@extends('layouts.base')

@section('content')
@include('inc.header')
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->

    <!-- End breadcrumb section -->

    <!-- Start error section -->
    <section class="error__section section--padding">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="error__content text-center">
                        <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_47pyyfcf.json"
                        background="transparent" speed="1" style="min-width: 300px; height: 300px;" loop
                        autoplay></lottie-player>
                        <h2 class="error__content--title">Payment Successful </h2>
                        <p class="error__content--desc"></p>
                        <a class="error__content--btn primary__btn" href="/">Back To Store</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End error section -->

    <!-- Start newsletter section -->

    <!-- End newsletter section -->

</main>

@include('inc.footer')

@endsection
