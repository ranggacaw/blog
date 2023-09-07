@extends('layouts.app')

@section('content')
<div class="row gutter-40 col-mb-80">
    <!-- Post Content
    ============================================= -->
    <div class="postcontent col-lg-9">

        <div class="single-post mb-0">
            
            <form action="{{ url('blog-create-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <!-- Single Post
                ============================================= -->
                <div class="entry clearfix">

                    <!-- Entry Title
                    ============================================= -->
                    <div class="entry-title">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control">
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <div class="entry-meta">
                        <ul>
                            <li><i class="icon-calendar3"></i> 10th July 2021</li>
                            <li><a href="#"><i class="icon-user"></i> {{ $user->name }}</a></li>
                            <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
                        </ul>
                    </div><!-- .entry-meta end -->

                    <!-- Entry Image
                    ============================================= -->
                    <div class="entry-image">
                        <div class="form-group">
                            <label>Blog Picture:</label>
                            <input type="file"  name="blogPicture" class="file-loading form-select" />
                        </div>
                    </div><!-- .entry-image end -->

                    <!-- Entry Content
                    ============================================= -->
                    <div class="entry-content mt-0">
                        <div class="form-group">
                            <label>Content:</label>
                            <textarea id="summernote" name="content" required></textarea>
                        </div>
                    </div>

                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-secondary">Create New Content</button>
                    </div>
                </div><!-- .entry end -->
            </form>

            <!-- Post Navigation
            ============================================= -->
            <div class="row justify-content-between col-mb-30 post-navigation">
                <div class="col-12 col-md-auto text-center">
                    <a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
                </div>

                <div class="col-12 col-md-auto text-center">
                    <a href="#">This is an Embedded Audio Post &rArr;</a>
                </div>
            </div><!-- .post-navigation end -->

            <div class="line"></div>

            <!-- Post Author Info
            ============================================= -->
            <div class="card">
                <div class="card-header"><strong>Posted by <a href="#">John Doe</a></strong></div>
                <div class="card-body">
                    <div class="author-image">
                        <img src="images/author/1.jpg" alt="Image" class="rounded-circle">
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
                </div>
            </div><!-- Post Single - Author End -->

            <!-- Comments
            ============================================= -->
            <div id="comments" class="clearfix">

                <h3 id="comments-title"><span>3</span> Comments</h3>

                <!-- Comments List
                ============================================= -->
                <ol class="commentlist clearfix">

                    <li class="comment even thread-even depth-1" id="li-comment-1">

                        <div id="comment-1" class="comment-wrap clearfix">

                            <div class="comment-meta">

                                <div class="comment-author vcard">

                                    <span class="comment-avatar clearfix">
                                    <img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

                                </div>

                            </div>

                            <div class="comment-content clearfix">

                                <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>

                                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                            </div>

                            <div class="clear"></div>

                        </div>


                        <ul class='children'>

                            <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">

                                <div id="comment-3" class="comment-wrap clearfix">

                                    <div class="comment-meta">

                                        <div class="comment-author vcard">

                                            <span class="comment-avatar clearfix">
                                            <img alt='Image' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40' /></span>

                                        </div>

                                    </div>

                                    <div class="comment-content clearfix">

                                        <div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                        <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                                    </div>

                                    <div class="clear"></div>

                                </div>

                            </li>

                        </ul>

                    </li>

                    <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

                        <div id="comment-2" class="comment-wrap clearfix">

                            <div class="comment-meta">

                                <div class="comment-author vcard">

                                    <span class="comment-avatar clearfix">
                                    <img alt='Image' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' /></span>

                                </div>

                            </div>

                            <div class="comment-content clearfix">

                                <div class="comment-author"><a href='https://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

                            </div>

                            <div class="clear"></div>

                        </div>

                    </li>

                </ol><!-- .commentlist end -->

                <div class="clear"></div>

                <!-- Comment Form
                ============================================= -->
                <div id="respond">

                    <h3>Leave a <span>Comment</span></h3>

                    @if (Route::has('login'))
                        @auth
                            <form class="row" action="#" method="post" id="commentform">
                                <div class="col-md-4 form-group">
                                    <label for="author">Name</label>
                                    <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
                                </div>

                                <div class="col-md-4 form-group">
                                    <label for="url">Website</label>
                                    <input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
                                </div>

                                <div class="w-100"></div>

                                <div class="col-12 form-group">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
                                </div>

                                <div class="col-12 form-group">
                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Submit Comment</button>
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
        <div class="sidebar-widgets-wrap"></div>
    </div><!-- .sidebar end -->
</div> 
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                toolbar: [
                ['font', ['bold', 'underline', 'italic', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
                ['view', ['codeview', 'help']],
                ],
            });
        });
    </script>
@endpush