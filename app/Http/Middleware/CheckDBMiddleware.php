<?php

namespace App\Http\Middleware;

use DB;
use Artisan;
use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Artisan as FacadesArtisan;

class CheckDBMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // $db = 'icreatea_'.str_replace(".icreateagency.com","",$request->url);

        // $contains = Str::contains($request->url(), 'client1');

        // $subs = Http::get('localhost:5555/api/subscription',[
        //     'storeUrl' => $request->url()// this will be store official url
        // ]);

        // $subs = json_decode($subs);

        // return $subs;

        // $request->session()->flush();


        if ($request->session()->get('storeDb')) {
            # code...
            Config::set('database.connections.mysql.database', $request->session()->get('storeDb'));

        return $next($request);

        }else{

            // $subs = Http::get('localhost:5555/api/subscriptions',[
            //     'storeUrl' => ($request->url())// this will be store official url
            // ]);

            // $subs = json_decode($subs);

            // $request->session()->put('storeDb', $subs->store_db);
            // $request->session()->put('storeUrl', $subs->store_url);


            // Config::set('database.connections.mysql.database', $request->session()->get('storeDb'));

            // return $next($request);
        }


    }
}
