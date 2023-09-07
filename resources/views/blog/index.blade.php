@extends('layouts.app')

@section('content')
<div class="row gutter-40 col-mb-80">
    <!-- Post Content
    ============================================= -->
    <div class="postcontent col-lg-9">

        <!-- Posts
        ============================================= -->
        <div id="posts" class="row grid-container gutter-30">

            @if (!empty($blogs->id))
                <p>No content, please <a href="{{url('blog-create')}}" class="more-link">make content</a> at <a href="{{url('blog-create')}}" class="more-link">New Blog</a> menu.</p>
            @else
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
                                <p>
                                    @if (strlen($item->content) > 200)
                                        <span>{!! substr($item->content,0, 600) . " ..." !!}</span>
                                    @else
                                        <span>{!! $item->content !!}</span>
                                    @endif
                                </p>
                            </div>
                            <a href="{{ url('blog-details')}}/{{$item->id}}" class="more-link">Read More</a>
                        </div>
                    </div>
                @endforeach
            @endif

            {{ $blogs->onEachSide(3)->links() }}
        </div><!-- #posts end -->

        <!-- Pager
        ============================================= -->
        <div class="d-flex justify-content-between mt-5">
            <a href="{{$blogs->previousPageUrl()}}" class="btn btn-outline-secondary">&larr; Older</a>
            <a href="{{$blogs->NextPageUrl()}}" class="btn btn-outline-dark">Newer &rarr;</a>
        </div>
        <!-- .pager end -->

    </div><!-- .postcontent end -->

    <!-- Sidebar
    ============================================= -->
    <div class="sidebar col-lg-3">
        <div class="sidebar-widgets-wrap">
            
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