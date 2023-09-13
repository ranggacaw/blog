<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 Tags System Example - Nicesnippets.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />
    <style>
        .bootstrap-tagsinput .tag{
            margin-right: 2px;
            color: #ffffff;
            background: #2196f3;
            padding: 3px 7px;
            border-radius: 3px;
        }
        .bootstrap-tagsinput {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center mb-5">Laravel 8 Tags System Example - Nicesnippets.com</h3>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
            
                <form action="{{ url('create-tags') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <input type="text" class="form-control" name="title" placeholder="Enter title">
                        @if ($errors->has('title_name'))
                        <span class="text-danger">{{ $errors->first('<title></title>') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" name="content" placeholder="Enter content"></textarea>
                        @if ($errors->has('content'))
                        <span class="text-danger">{{ $errors->first('content') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="text" data-role="tagsinput" name="tags">
                        @if ($errors->has('tags'))
                            <span class="text-danger">{{ $errors->first('tags') }}</span>
                        @endif
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-info btn-submit text-white">Submit</button>
                    </div>

                </form>

                <div class="alert alert-success p-1 mt-3 text-center">
                    Tag Collection
                </div>

                @if($tags->count())
                    @foreach($tags as $key => $tag)
                        <h3><strong>Title</strong> : {{ $tag->title}}</h3>
                        <p><strong>Content :</strong> {{ $tag->content }}</p>
                        <div>
                            <strong>Tag:</strong>
                            @foreach($tag->tags as $tag)
                                <label class="badge bg-primary">{{ $tag->name }}</label>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
</body>
</html>