@php
    $i = true;
    $i2 = true;
@endphp
<!-- Product Wrapper Start -->
<div class="product-wrapper mt-9 product-active">

    <!-- Product Top Wrapper Start -->
    <div class="product-top-wrapper">

        <!-- Section Title Start -->
        <div class="section-title">
            <h2 class="title"># {{ $title }}</h2>
        </div>
        <!-- Section Title End -->

        <!-- Product Menu Start -->
        <div class="product-menu">
            <ul class="nav">
                @foreach ($wrapper as $title => $items)
                <li><button @if ($i)
                    class="active"
                    @php
                        $i = false;
                    @endphp
                @endif data-bs-toggle="tab" data-bs-target="#{{ $title }}">{{ $title }}</button></li>
                @endforeach
            </ul>
        </div>
        <!-- Product Menu End -->

        <!-- Swiper Arrows End -->
        <div class="swiper-arrows">
            <!-- Add Arrows -->
            <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
            <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
        </div>
        <!-- Swiper Arrows End -->

    </div>
    <!-- Product Top Wrapper End -->

    <!-- Product Tabs Content Start -->
    <div class="product-tabs-content">
        <div class="tab-content">
            @foreach ($wrapper as $title => $items)
            <div class="tab-pane fade @if($i2) show active @endIf" id="{{ $title}}">
                @php
                    $i2 = false;
                @endphp
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($items as $item)
                        <div class="swiper-slide">
                            <x-product-card :product="$item" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Product Tabs Content End -->

</div>
<!-- Product Wrapper End -->
