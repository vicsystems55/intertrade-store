@extends('dashboard.layouts.base')


@section('content')

<div class="page-body">

       <!-- Container-fluid starts-->
       <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <form class="form-inline search-form search-box">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search..">
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table all-package" id="editableTable">
                                <thead>
                                    <tr>
                                        <th>Order Image</th>
                                        <th>Order Code</th>
                                        <th>Date</th>
                                        <th>Payment Method</th>
                                        <th>Delivery Status</th>
                                        <th>Amount</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse ($orders as $order)

                                    <tr>
                                        <td>
                                            <img src="assets/images/dashboard/product/1.jpg" alt="users">
                                        </td>

                                        <td data-field="number">+ 406-4883635</td>

                                        <td data-field="date">Jul 20, 2021</td>

                                        <td data-field="text">Paypal</td>

                                        <td class="order-success">
                                            <span>Approved</span>
                                        </td>

                                        <td data-field="number">$15</td>

                                        <td>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-edit" title="Edit"></i>
                                            </a>

                                            <a href="javascript:void(0)">
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty

                                    <h6 class="py-5 text-center">No orders yet...</h6>

                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>

@endsection
