@extends('layouts.app')


@section('title', 'Press release')

@section('content')
<div class="section exvent-hero-section d-lg-flex d-block align-items-center inner-page-hero" style="background-image: url(assets/images/bg/about_page_bg.jpg);">
    <img class="shape-1 img-fluid" src="assets/images/shape/hero_shape1.png" alt="">
    <img class="shape-2 img-fluid" src="assets/images/shape/hero_shape2.png" alt="">

    <div class="container">
        <div class="row exvent-hero-row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="page-title">
                    <h2 class="section-title">Press Release</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="event-list-page-wrap section-padding-02">
    <div class="container">
        <!-- Event List Topbar Start   -->
        <div class="event-list-top-bar">
        <!-- Event List Content Start -->
        <div class="event-list-content-wrap">
            <div class="tab-content">

                <div class="tab-pane show active" id="list">
                    <!-- Event List Item Start -->
                    @forelse ($posts as $post)
                        <div class="event-list-item event-list d-lg-flex align-items-center">
                            <div class="event-img">
                                <a href="/press-release/{{ $post->id }}/show"><img src="{{ asset("posts/$post->image") }}" style="width: 300px; height: 180px;" alt=""></a>
                            </div>
                            <div class="event-list-content">

                                <h3 class="title"><a href="/press-release/{{ $post->id }}/show">{{ $post->title }}</a></h3>
                                <div class="meta-data">
                                    <span><i class="far fa-clock"></i> {{ $post->created_at->toDateString() }}</span>
                                </div>
                                <div class="event-desc">
                                    <p>{{ Illuminate\Support\Str::limit($post->description, 200, $end='...') }}</p>
                                </div>
                                <a class="ticket-link" href="{{ route('register') }}">Register Now</a>
                            </div>
                            <span class="event-time" style="font-size: 20px">{{ $post->id }}</span>
                        </div>
                    @empty
                        <div class="">
                            <h5 class="text-center">Nothing to fetch</h5>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
        <!-- Event List Content End -->

        <div class="event-next-prev-btn text-center">
            <a class="event-btn" href="event-list.html"><i class="flaticon-back"></i> Previous</a>
            <a class="event-btn btn-next" href="event-list.html">Next <i class="flaticon-next"></i></a>
        </div>
    </div>

</div>
@endsection
