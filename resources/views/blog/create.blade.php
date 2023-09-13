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
                    <div class="entry-image">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control">
                    </div><!-- .entry-title end -->

                    <!-- Entry Image
                    ============================================= -->
                    <div class="entry-image">
                        <div class="form-group">
                            <label>Blog Picture:</label>
                            <input type="file"  name="blogPicture" class="file-loading form-select" />
                        </div>
                    </div><!-- .entry-image end -->

                    <!-- Entry Tags
                    ============================================= -->
                    <div class="entry-image">
                        <div class="form-group">
                            <label>Tags:</label>
                            {{-- <input type="text" name="tags" class="form-control" data-role="tagsinput"> --}}
                            <input class="form-control" type="text" data-role="tagsinput" name="tags">
                            @if ($errors->has('tags'))
                                <span class="text-danger">{{ $errors->first('tags') }}</span>
                            @endif
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

        </div>

    </div><!-- .postcontent end -->

    <!-- Sidebar
    ============================================= -->
    <div class="sidebar col-lg-3">
        <div class="sidebar-widgets-wrap"></div>
    </div><!-- .sidebar end -->
</div> 
@endsection

@push('styles')
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.5.0/bootstrap-tagsinput.css" integrity="sha512-3uVpgbpX33N/XhyD3eWlOgFVAraGn3AfpxywfOTEQeBDByJ/J7HkLvl4mJE1fvArGh4ye1EiPfSBnJo2fgfZmg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .bootstrap-tagsinput {
            display: block;
            padding: 8px;
        }
        .tag.label.label-info {
            color: #000000;
            background-color: #F9F9F9 !important;
            border-radius: 3px;
            box-shadow: inset 0 -1px 0 rgba(0,0,0,0.15);
            padding: 5px 10px;
        }
        .note-icon-caret:before {
            display: none;
        }
    </style>
@endpush
@push('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.5.0/bootstrap-tagsinput.min.js" integrity="sha512-p9c//cVo76ZPq+afWSNPqiNDCwLR5uW605/nXIBQF/SdA72d5L/iuKjxVVHC2INv4k3OGbpLc2SF4ODyq6EeTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
