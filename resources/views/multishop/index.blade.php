@extends('multishop/app')
@section('header')
	@include('multishop/part/nav')
	@include('multishop/part/carousel')
@endsection
@section('content')
	@include('multishop/part/featured')
	@include('multishop/part/categories')
	@include('multishop/part/products')
	@include('multishop/part/offer')
	@include('multishop/part/products')
	@include('multishop/part/vendor')
@endsection
@section('footer')
	@include('multishop/part/footer')
@endsection

    


    
