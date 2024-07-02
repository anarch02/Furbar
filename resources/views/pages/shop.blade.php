@extends('layouts.app')

@section('content')

    <x-banner :page="$banner" />

    <!-- Shop Section Start -->
    <div class="section section-padding mt-n10">
        <div class="container">

            <!-- Shop top Bar Start -->
            <div class="shop-top-bar">
                <div class="shop-text">
                    <p><span>12</span> Product Found of <span>30</span></p>

                </div>
                <div class="shop-tabs">
                    <ul class="nav">
                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#grid"><i class="fa fa-th"></i></button></li>
                    </ul>
                </div>
                <div class="shop-sort">
                    <span class="title">Sort By :</span>
                    <select class="nice_select">
                        <option value="1">Default</option>
                        <option value="2">Default</option>
                        <option value="3">Default</option>
                        <option value="4">Default</option>
                    </select>
                </div>
            </div>
            <!-- Shop top Bar End -->

            <div class="tab-content">
                <div class="tab-pane fade  show active" id="grid">

                    <!-- Shop Product Wrapper Start -->
                    <div class="shop-product-wrapper">
                        <div class="row">
                            @foreach ($products as $product)
                            <div class="col-lg-3 col-sm-6">
                                <x-product-card :product="$product" />
                            </div>
                            @endforeach

                    </div>
                    <!-- Shop Product Wrapper End -->

                </div>
            </div>

            {{ $products->links('pagination::bootstrap-5') }}

        </div>
    </div>
    <!-- Shop Section End -->
@endsection
