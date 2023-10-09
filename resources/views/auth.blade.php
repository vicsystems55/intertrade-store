@extends('layouts.base')

@section('content')

<auth-component storedb="{{request()->session()->get('storeDb')}}" vueurl="{{request()->session()->get('storeUrl')}}"></auth-component>

@endsection
