 <!-- Page Banner Section Start -->

 <div class="section page-banner-section" style="background-image: url({{ $banner->image }});">
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">{{ $banner->title }}</h2>

            <ul class="breadcrumb">
                <li><a href="{{ route($banner->page) }}">Home</a></li>
                <li class="active">{{ $banner->title }}</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div>
<!-- Page Banner Section End -->
