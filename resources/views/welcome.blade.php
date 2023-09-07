@extends('layouts.app')

@section('content')
<div class="row gutter-40 col-mb-80">
    <!-- Post Content
    ============================================= -->
    <div class="postcontent col-lg-9">

        <!-- Posts
        ============================================= -->
        <div id="posts" class="row grid-container gutter-30">

            @foreach ($blogs as $item)
                <div class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{{asset('images/blog')}}/{{$item->blogPicture}}" data-lightbox="image"><img src="{{asset('images/blog')}}/{{$item->blogPicture}}" alt="Standard Post with Image"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="#">{{$item->title}}</a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> {{$item->created_at}}</li>
                                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>{{$item->content}}</p>
                            <a href="{{ url('blog-details')}}/{{$item->id}}" class="more-link">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- #posts end -->

        <!-- Pager
        ============================================= -->
        <div class="d-flex justify-content-between mt-5">
            <a href="#" class="btn btn-outline-secondary">&larr; Older</a>
            <a href="#" class="btn btn-outline-dark">Newer &rarr;</a>
        </div>
        <!-- .pager end -->

    </div><!-- .postcontent end -->

    <!-- Sidebar
    ============================================= -->
    <div class="sidebar col-lg-3">
        <div class="sidebar-widgets-wrap">

            <div class="widget widget-twitter-feed clearfix">

                <h4>Twitter Feed</h4>
                <ul class="iconlist twitter-feed" data-username="envato" data-count="2">
                    <li></li>
                </ul>

                <a href="#" class="btn btn-secondary btn-sm float-end">Follow Us on Twitter</a>

            </div>

            <div class="widget clearfix">

                <h4>Tag Cloud</h4>
                <div class="tagcloud">
                    <a href="#">general</a>
                    <a href="#">videos</a>
                    <a href="#">music</a>
                    <a href="#">media</a>
                    <a href="#">photography</a>
                    <a href="#">parallax</a>
                    <a href="#">ecommerce</a>
                    <a href="#">terms</a>
                    <a href="#">coupons</a>
                    <a href="#">modern</a>
                </div>

            </div>

        </div>

    </div><!-- .sidebar end -->
</div>   
@endsection