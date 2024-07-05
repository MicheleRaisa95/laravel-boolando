@extends('layouts.app')

@section('title')
HOME
@endsection

@section('main')
<div class="container py-5">
    <div class="row g-3">
        @foreach ($products as $product)
        <div class="col-4">
            @include('partials.product-card')
        </div>
        @endforeach 
    </div>
</div>
@endsection
