@extends('layouts.app')

@section('content')
<div class="row gutter-40 col-mb-80">
    <!-- Post Content
    ============================================= -->
    <div class="postcontent col-lg-9">

        <div class="single-post mb-0">

            <!-- Single Post
            ============================================= -->
            <div class="entry clearfix">

                <!-- Entry Title
                ============================================= -->
                <div class="entry-title">
                    <h2>{{$blogs->title}}</h2>
                </div><!-- .entry-title end -->

                <!-- Entry Meta
                ============================================= -->
                <div class="entry-meta">
                    <ul>
                        <li><i class="icon-calendar3"></i> {{ $blogs->created_at }}</li>
                        <li><a href="#"><i class="icon-user"></i> {{ $user->name }}</a></li>
                        <li><a href="#"><i class="icon-comments"></i> {{$comment_count}} Comments</a></li>
                    </ul>
                </div><!-- .entry-meta end -->

                <!-- Entry Image
                ============================================= -->
                <div class="entry-image">
                    <a href="#"><img src="{{asset('images/blog')}}/{{$blogs->blogPicture}}" alt="Blog Single"></a>
                </div><!-- .entry-image end -->

                <!-- Entry Content
                ============================================= -->
                <div class="entry-content mt-0">

                    <p>{!! $blogs->content !!}</p>
                    <!-- Post Single - Content End -->

                    <!-- Tag Cloud
                    ============================================= -->
                    <div class="tagcloud clearfix bottommargin">
                        {{-- <a href="#">general</a>
                        <a href="#">information</a>
                        <a href="#">media</a>
                        <a href="#">press</a>
                        <a href="#">gallery</a>
                        <a href="#">illustration</a> --}}
                        
                        {{-- @foreach($tags as $key => $tag)
                            @if ($tag->id == $tag->taggable_id)
                                @foreach($tag->tags as $tag)
                                    <a href="#">{{ $tag->name }}</a>
                                @endforeach
                            @else
                                <p>ga ada</p>
                            @endif
                        @endforeach --}}
                        {{-- @foreach($tags as $item)
                            @if ($item->id = $item->taggable_id)
                                @foreach($item->tags as $tag)
                                    <a href="#">{{ $tag->name }}</a>
                                @endforeach
                            @else
                                <p>ga ada</p>
                            @endif
                        @endforeach --}}
                        
                        @foreach($tags as $key => $tag)
                            @foreach($tag->tags as $tag)
                            
                                @if ($tag->id = $tag->taggable_id)
                                    <a  href="#">{{ $tag->name }}</a>
                                @else
                                <a  href="#">{{ $tag->name }}</a>
                                
                            @endif
                            @endforeach
                        @endforeach
                    </div><!-- .tagcloud end -->

                </div>
            </div><!-- .entry end -->

            <!-- Post Author Info
            ============================================= -->
            <div class="card">
                <div class="card-header"><strong>Posted by <a href="#">{{ $user->name }}</a></strong></div>
                <div class="card-body">
                    <div class="author-image">
                        <img src="{{asset('images/profile')}}/{{ $user->profilePicture }}" alt="Image" class="rounded-circle">
                    </div>
                    {{ $user->about }}
                </div>
            </div><!-- Post Single - Author End -->

            <!-- Comments
            ============================================= -->
            <div id="comments" class="clearfix">

                <h3 id="comments-title"><span>{{$comment_count}}</span> Comments</h3>
                
                <!-- Comments List
                ============================================= -->
                <ol class="commentlist clearfix">

                    @foreach ($comments as $item)
                        <li class="comment even thread-even depth-1">
                            <div id="comment-1" class="comment-wrap clearfix">

                                <div class="comment-meta">

                                    <div class="comment-author vcard">
                                        <span class="comment-avatar clearfix">
                                        <img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
                                    </div>

                                </div>

                                <div class="comment-content clearfix">

                                    <div class="comment-author">
                                        {{$item->name}}<span><a href="#" title="Permalink to this comment">{{$item->created_at}}</a></span>
                                    </div>

                                    <p>{{$item->comment}}</p>

                                    <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                </div>

                                <div class="clear"></div>

                            </div>
                        </li>
                    @endforeach

                </ol><!-- .commentlist end -->

                <div class="clear"></div>

                <!-- Comment Form
                ============================================= -->
                <div id="respond">

                    <h3>Leave a <span>Comment</span></h3>

                    @if (Route::has('login'))
                        @auth
                            <form class="row" action="{{url('blog-details-store')}}/{{$blogs->id}}" method="post">
                                @csrf
                                <div class="col-md-4 form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" size="22" tabindex="1" class="sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" size="22" tabindex="2" class="sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="website">Website</label>
                                    <input type="text" name="website" size="22" tabindex="3" class="sm-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
                                </div>

                                <div class="col-12 form-group">
                                    <button type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Submit Comment</button>
                                </div>
                            </form>
                        @else
                            <div class="col-md-6 form-group">
                                <h5 for="">Please <a href="{{ url('login')}}">login</a>, then you can leave a comments.</h5>
                            </div>
                        @endauth
                    @endif

                </div><!-- #respond end -->

            </div><!-- #comments end -->

        </div>

    </div><!-- .postcontent end -->

    <!-- Sidebar
    ============================================= -->
    <div class="sidebar col-lg-3">
        <div class="sidebar-widgets-wrap">

            <div class="widget widget-twitter-feed clearfix">

                <h4>Tag Cloud</h4>
                <div class="tagcloud">
                    @if($tags->count())
                        @foreach($tags as $key => $tag)
                            @foreach($tag->tags as $tag)
                                <a  href="#">{{ $tag->name }}</a>
                            @endforeach
                        @endforeach
                    @endif
                </div>

            </div>

        </div>
    </div><!-- .sidebar end -->
</div> 
@endsection