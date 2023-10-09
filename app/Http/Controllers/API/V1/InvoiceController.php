<?php

namespace App\Http\Controllers\API\V1;
use App\Models\Invoice;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;

use Illuminate\Http\Request;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        return 1231;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        //

        // return $request->user();

        Invoice::updateOrCreate(
            [
                'user_id' => $request->user()->id,
                'invoice_code' => $request->invoice_code
            ],
            [
            'user_id' => $request->user()->id,
            'invoice_code' => $request->invoice_code,
            'total_amount' => 0

        ]);

        return Invoice::where('invoice_code', $request->invoice_code)->first();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($invoice_code)
    {
        //

        $invoiceData = Invoice::with('invoice_items.products')->where('invoice_code', $invoice_code)->first();

        return $invoiceData;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
