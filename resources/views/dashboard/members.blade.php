@extends('dashboard.layouts.base')

@section('content')

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>User List
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
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <form class="form-inline search-form search-box">
                    <div class="form-group">
                        <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                            class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                    </div>
                </form>

                <a href="create-user.html" class="btn btn-primary mt-md-0 mt-2">Create User</a>
            </div>

            <div class="card-body">
                <div class="table-responsive table-desi">
                    <table class="all-package coupon-table table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <button type="button"
                                        class="btn btn-primary add-row delete_all">Delete</button>
                                </th>
                                <th>Avtar</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Last Login</th>
                                <th>Role</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr data-row-id="1">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault" data-id="1">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user.jpg" alt="">
                                </td>

                                <td>Rowan</td>

                                <td>Torres</td>

                                <td>Rowan.torres@gmail.com</td>

                                <td>6 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="2">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault1" data-id="2">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user1.jpg" alt="">
                                </td>

                                <td>Alonzo</td>

                                <td>Perez</td>

                                <td>Perez.Alonzo@gmail.com</td>

                                <td>2 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="3">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault2" data-id="3">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user2.jpg" alt="">
                                </td>

                                <td>Skylar</td>

                                <td>Lane</td>

                                <td>Lane.Skylar@gmail.com</td>

                                <td>1 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="4">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault3" data-id="4">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user3.jpg" alt="">
                                </td>

                                <td>Brody</td>

                                <td>Gray</td>

                                <td>Gray.Brody@gmail.com</td>

                                <td>3 Days ago</td>

                                <td>Admin</td>
                            </tr>

                            <tr data-row-id="5">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault4" data-id="5">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user4.jpg" alt="">
                                </td>

                                <td>Colton</td>

                                <td>Clay</td>

                                <td>Colton.Clay@gmail.com</td>

                                <td>1 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="6">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault5" data-id="6">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user5.jpg" alt="">
                                </td>

                                <td>Maxine</td>

                                <td>Woters</td>

                                <td>woters.maxine@gmail.com</td>

                                <td>10 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="7">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault6" data-id="7">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user.jpg" alt="">
                                </td>

                                <td>Alonzo</td>

                                <td>Perez</td>

                                <td>Perez.Alonzo@gmail.com</td>

                                <td>2 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="8">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault7" data-id="8">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user1.jpg" alt="">
                                </td>

                                <td>Skylar</td>

                                <td>Lane</td>

                                <td>Lane.Skylar@gmail.com</td>

                                <td>1 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="9">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault8" data-id="9">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user2.jpg" alt="">
                                </td>

                                <td>Brody</td>

                                <td>Gray</td>

                                <td>Gray.Brody@gmail.com</td>

                                <td>3 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="10">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault9" data-id="10">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user3.jpg" alt="">
                                </td>

                                <td>Colton</td>

                                <td>Clay</td>

                                <td>Colton.Clay@gmail.com</td>

                                <td>1 Days ago</td>

                                <td>Admin</td>
                            </tr>

                            <tr data-row-id="11">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault10" data-id="11">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user4.jpg" alt="">
                                </td>

                                <td>Maxine</td>

                                <td>Woters</td>

                                <td>woters.maxine@gmail.com</td>

                                <td>10 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="12">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault11" data-id="12">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user5.jpg" alt="">
                                </td>

                                <td>Alonzo</td>

                                <td>Perez</td>

                                <td>Perez.Alonzo@gmail.com</td>

                                <td>2 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="13">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault12" data-id="13">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user.jpg" alt="">
                                </td>

                                <td>Skylar</td>

                                <td>Lane</td>

                                <td>Lane.Skylar@gmail.com</td>

                                <td>1 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="14">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault13" data-id="14">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user1.jpg" alt="">
                                </td>

                                <td>Brody</td>

                                <td>Gray</td>

                                <td>Gray.Brody@gmail.com</td>

                                <td>3 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="15">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault14" data-id="15">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user2.jpg" alt="">
                                </td>

                                <td>Colton</td>

                                <td>Clay</td>

                                <td>Colton.Clay@gmail.com</td>

                                <td>1 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="16">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault15" data-id="16">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user3.jpg" alt="">
                                </td>

                                <td>Rowan</td>

                                <td>Torres</td>

                                <td>Rowan.torres@gmail.com</td>

                                <td>6 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="17">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault16" data-id="17">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user4.jpg" alt="">
                                </td>

                                <td>Alonzo</td>

                                <td>Perez</td>

                                <td>Perez.Alonzo@gmail.com</td>

                                <td>2 Days ago</td>

                                <td>Admin</td>
                            </tr>

                            <tr data-row-id="18">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault17" data-id="18">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user5.jpg" alt="">
                                </td>

                                <td>Skylar</td>

                                <td>Lane</td>

                                <td>Lane.Skylar@gmail.com</td>
                                <td>1 Days ago</td>

                                <td>Customer</td>
                            </tr>

                            <tr data-row-id="19">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault18" data-id="19">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user.jpg" alt="">
                                </td>

                                <td>Brody</td>

                                <td>Gray</td>

                                <td>Gray.Brody@gmail.com</td>

                                <td>3 Days ago</td>

                                <td>Admin</td>
                            </tr>

                            <tr data-row-id="20">
                                <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault19" data-id="20">
                                </td>

                                <td>
                                    <img src="assets/images/dashboard/user1.jpg" alt="">
                                </td>

                                <td>Colton</td>

                                <td>Clay</td>

                                <td>Colton.Clay@gmail.com</td>

                                <td>1 Days ago</td>

                                <td>Customer</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

@endsection
