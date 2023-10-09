<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function index(Request $request)
    {

        // if (auth('sanctum')::once(['api_token' => 'HYZL4RdYbUz2hMVYXYsSY18AWtbYcfhLxsLBYrf7'])) {
        //     # code...

        //     return $user = auth()->user();


        // }

        // return $request->user()->name;

        // return auth()::attempt(['api_token' => 'THxJSUsphWKrdPU4Y6rAUX2v5JloljF4FEorqpYR']);

        $sales = ProductOrder::with('invoice')->whereHas('invoice', function($q){
            $q->where('status', 'paid');
        })->latest()->get();

        $orders = ProductOrder::with('invoice')->whereHas('invoice', function($q){
            $q->where('status', 'unpaid');
        })->latest()->get();

        $users = User::where('role', 'user')->get();

        $monthlySales = [];

        for ($i=0; $i < 12; $i++) {
            # code...

            $monthSales = ProductOrder::
            whereHas('invoice', function($q){
                $q->where('status', 'paid');
            })->whereMonth('created_at', $i)
            ->get()->sum('invoice.total_amount');

            array_push($monthlySales, $monthSales);
        }

        // return $monthlySales;


        $monthlySales = implode(" ",$monthlySales);


        // return $productOrders;

        return view('dashboard.home', compact(['orders', 'sales', 'users', 'monthlySales']));
    }

    public function products()
    {

        $products = Product::latest()->get();


        return view('dashboard.products', compact('products'));
    }

    public function orders()
    {

        $orders = Invoice::latest()->get();


        return view('dashboard.orders', compact('orders'));
    }

    public function settings() {


        return view('dashboard.settings');

    }
}
