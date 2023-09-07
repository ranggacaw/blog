@extends('layouts.app')

@section('content')
<div class="row clearfix">

    <div class="col-md-9">
        @if (!empty($user->profilePicture))
            <img src="{{asset('images/profile')}}/{{$user->profilePicture}}" class="alignleft img-circle img-thumbnail my-0" alt="Avatar" style="max-width: 84px;">
        @else
            <img src="https://static.vecteezy.com/system/resources/previews/005/544/718/non_2x/profile-icon-design-free-vector.jpg" class="alignleft img-circle img-thumbnail my-0" alt="Avatar" style="max-width: 84px;">
        @endif
        
        <div class="heading-block border-0">
            <h3>{{$user->name}}</h3>
            <span>Your Profile Bio</span>
        </div>

        <div class="clear"></div>

        <div class="row clearfix">

            <div class="col-lg-12">

                <div class="tabs tabs-alt clearfix" id="tabs-profile">

                    <ul class="tab-nav clearfix">
                        <li><a href="#tab-feeds"><i class="icon-rss2"></i> Feeds</a></li>
                        {{-- <li><a href="#tab-posts"><i class="icon-pencil2"></i> Posts</a></li> --}}
                    </ul>

                    <div class="tab-container">

                        <div class="tab-content clearfix" id="tab-feeds">
                            
                            @if (!empty($user->feeds))
                                <p>{{ $user->feeds }}</p>
                            @else
                                <p>Lengkapi Feeds di halaman <a href="{{ url('profile-edit') }}">Edit Profile</a>.</p>
                            @endif

                            <table class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                  <th>Time</th>
                                  <th>Activity</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <code>5/23/2021</code>
                                  </td>
                                  <td>Payment for VPS2 completed</td>
                                </tr>
                                <tr>
                                  <td>
                                    <code>5/23/2021</code>
                                  </td>
                                  <td>Logged in to the Account at 16:33:01</td>
                                </tr>
                                <tr>
                                  <td>
                                    <code>5/22/2021</code>
                                  </td>
                                  <td>Logged in to the Account at 09:41:58</td>
                                </tr>
                                <tr>
                                  <td>
                                    <code>5/21/2021</code>
                                  </td>
                                  <td>Logged in to the Account at 17:16:32</td>
                                </tr>
                                <tr>
                                  <td>
                                    <code>5/18/2021</code>
                                  </td>
                                  <td>Logged in to the Account at 22:53:41</td>
                                </tr>
                              </tbody>
                            </table>

                        </div>
                        {{-- <div class="tab-content clearfix" id="tab-posts">

                            <!-- Posts
                            ============================================= -->
                            <div class="row gutter-40 posts-md mt-4">

                                <div class="entry col-12">
                                    <div class="grid-inner row align-items-center g-0">
                                        <div class="col-md-4">
                                            <a class="entry-image" href="images/blog/full/17.jpg" data-lightbox="image"><img src="images/blog/small/17.jpg" alt="Standard Post with Image"></a>
                                        </div>
                                        <div class="col-md-8 ps-md-4">
                                            <div class="entry-title title-sm">
                                                <h3><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                                    <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <a href="blog-single.html" class="more-link">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry col-12">
                                       <div class="grid-inner row align-items-center g-0">
                                        <div class="col-md-4">
                                            <div class="entry-image">
                                                <iframe src="https://player.vimeo.com/video/87701971" width="500" height="281" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-8 ps-md-4">
                                            <div class="entry-title title-sm">
                                                <h3><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><i class="icon-calendar3"></i> 16th Feb 2021</li>
                                                    <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19</a></li>
                                                    <li><a href="#"><i class="icon-film"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem.</p>
                                                <a href="blog-single-full.html" class="more-link">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="entry col-12">
                                    <div class="grid-inner row align-items-center g-0">
                                        <div class="col-md-4">
                                            <div class="entry-image">
                                                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                                    <div class="flexslider">
                                                        <div class="slider-wrap">
                                                            <div class="slide"><a href="images/blog/full/10.jpg" data-lightbox="gallery-item"><img src="images/blog/small/10.jpg" alt="Standard Post with Gallery"></a></div>
                                                            <div class="slide"><a href="images/blog/full/20.jpg" data-lightbox="gallery-item"><img src="images/blog/small/20.jpg" alt="Standard Post with Gallery"></a></div>
                                                            <div class="slide"><a href="images/blog/full/21.jpg" data-lightbox="gallery-item"><img src="images/blog/small/21.jpg" alt="Standard Post with Gallery"></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 ps-md-4">
                                            <div class="entry-title title-sm">
                                                <h3><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><i class="icon-calendar3"></i> 24th Feb 2021</li>
                                                    <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21</a></li>
                                                    <li><a href="#"><i class="icon-picture"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                <a href="blog-single-small.html" class="more-link">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="w-100 line d-block d-md-none"></div>

    <div class="col-md-3">

        <div class="list-group">
            <a href="{{ url('profile-edit') }}" class="list-group-item list-group-item-action d-flex justify-content-between"><div>Edit Profile</div><i class="icon-user"></i></a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action d-flex justify-content-between"><div>Logout</div><i class="icon-line2-logout"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

        <div class="fancy-title topmargin title-border">
            <h4>About Me</h4>
        </div>
        @if (!empty($user->about))
            <p>{{ $user->about }}</p>
        @else
            <p>Lengkapi About Me di halaman <a href="{{ url('profile-edit') }}">Edit Profile</a>.</p>
        @endif

        <div class="fancy-title topmargin title-border">
            <h4>Social Profiles</h4>
        </div>

        <a href="#" class="social-icon si-facebook si-small si-rounded si-light" title="Facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
        </a>

        <a href="#" class="social-icon si-instagram si-small si-rounded si-light" title="Instagram">
            <i class="icon-instagram"></i>
            <i class="icon-instagram"></i>
        </a>

        <a href="#" class="social-icon si-twitter si-small si-rounded si-light" title="Twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
        </a>

    </div>

</div>
@endsection