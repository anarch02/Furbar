<!-- Single Product Start -->
<div class="single-product">
    <a href="product-details.html"><img src="{{ $product->images[0] }}" alt="{{ $product->name }}"></a>
    <div class="product-content">
        <h4 class="title"><a href="product-details.html">{{ $product->name }}</a></h4>
        <div class="price">
            <span class="sale-price">${{ $produc->price }}</span>
        </div>
    </div>
    <ul class="product-meta">
        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
    </ul>
</div>
<!-- Single Product End -->
