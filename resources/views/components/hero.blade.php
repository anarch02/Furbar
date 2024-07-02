        <!-- Slider Section Start -->
        <div class="section slider-section">

            <div class="slider-shape"></div>

            <div class="container">
                <div class="slider-active">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            @foreach ($heroes as $slider)
                                @php
                                    $slider = (object) $slider;
                                @endphp
                                <!-- Single Slider Start  -->
                                <div class="single-slider swiper-slide animation-style-01">

                                    <!-- Slider Content Start -->
                                    <div class="slider-content">
                                        <h2 class="title">{{ $slider->title }}</h2>
                                        <p>{{ $slider->description }}</p>
                                        <a href="{{ $slider->link }}" class="btn btn-primary btn-hover-dark">purchase now</a>
                                    </div>
                                    <!-- Slider Content End -->

                                    <!-- Slider images Start -->
                                    <div class="slider-images">
                                        <img src="{{ $slider->image }}" alt="Slider">
                                    </div>
                                    <!-- Slider images End -->

                                </div>
                                <!-- Single Slider End  -->

                            @endforeach
                        </div>

                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Section End -->
