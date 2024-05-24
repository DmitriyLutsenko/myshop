@if(!empty($slider))
    @foreach($slider as $params)
        @if(count($params['slides']) > 0)
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            @foreach($params['slides'] as $slide)
                <!-- Single slider item -->
                <div class="hero-slide-item slider-height-2 swiper-slide bg-color1"
                    data-bg-image="{{ $slide['image'] }}">
                    <div class="container h-100">
                        <div class="row h-100 flex-row-reverse">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                                <div class="hero-slide-content hero-slide-content-2 slider-animated-1">
                                    <h2 class="title-1">
                                        {!! $slide['title'] !!}
                                        <span class="price">
                                            @if(strlen($slide['subtitle']) > 0)
                                            <span class="mini-title">
                                                {!! $slide['subtitle'] !!}
                                            </span>
                                            @endif
                                            @if(strlen($slide['price']) > 0)
                                            <span class="amount">
                                                {!! $slide['price'] !!}
                                            </span>
                                            @endif
                                        </span>
                                    </h2>
                                    @if(strlen($slide['link']) > 0)
                                    <a href="{{ $slide['link'] }}" class="btn btn-primary text-capitalize">{{ $slide['link_text'] }}</a>
                                    @endif
                                </div>
                            </div>
                            @if(strlen($slide['image']) > 0)
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative align-items-center">
                                <div class="show-case">
                                    <div class="hero-slide-image slider-2">
                                        <img src="{{ $slide['image'] }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Single slider item -->
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
        @endif
    @endforeach
@endif
