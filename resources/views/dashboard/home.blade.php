@extends('dashboard.layouts.base')

@section('content')
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Dashboard
                            <small>Admin Dashboard</small>
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
                        <li class="breadcrumb-item active">home</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-4 col-md-4 ">
                <div class="card o-hidden widget-cards">
                    <div class="warning-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center">
                                    <i data-feather="navigation" class="font-warning"></i>
                                </div>
                            </div>
                            <div class="media-body media-doller">
                                <span class="m-0">Sales</span>
                                <h3 class="mb-0">N <span class="counter">{{number_format($sales->sum('invoice.total_amount'),2)}}</span><br><small> {{\Carbon\Carbon::now()->format('d-m-y h:m:s')}}</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xxl-4 col-md-4 ">
                <div class="card o-hidden widget-cards">
                    <div class="danger-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center"><i data-feather="users"
                                        class="font-danger"></i></div>
                            </div>
                            <div class="media-body media-doller"><span class="m-0">Orders</span>
                                <h3 class="mb-0"> <span class="counter">{{$orders->count()}}</span><br><small> {{\Carbon\Carbon::now()->format('d-m-y h:m:s')}}</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-md-4 ">
                <div class="card o-hidden widget-cards">
                    <div class="danger-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center"><i data-feather="users"
                                        class="font-danger"></i></div>
                            </div>
                            <div class="media-body media-doller"><span class="m-0">Customers</span>
                                <h3 class="mb-0"> <span class="counter">{{$users->count()}}</span><br><small> {{\Carbon\Carbon::now()->format('d-m-y h:m:s')}}</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <input type="hidden" id="arrayList" value="{{$monthlySales}}">
        <div class="card">
            <div class="card-body">
            <canvas id="myChart"></canvas>


            </div>
        </div>


    </div>
    <!-- Container-fluid Ends-->
</div>

@endsection

@section('load-chart')


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    const ctx = document.getElementById('myChart');

    var myString = document.getElementById('arrayList').value

    var newArray = myString.split(' ');

    // alert(newArray)

    var salesChart = new Chart(ctx, {
        type: 'line',
        data: {
        labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
        datasets: [{
            label: 'Total Sales',
            data: [12, 19, 3, 5, 2, 3],
            lineTension: 0.2,
            borderWidth: 2
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });

    salesChart.data.datasets[0].data = newArray

    salesChart.update()
    </script>


@endsection
