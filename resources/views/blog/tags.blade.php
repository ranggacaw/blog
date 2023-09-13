
<input type="text" name="tags" class="form-control" data-role="tagsinput">

@push('styles')
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

    </style>
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.5.0/bootstrap-tagsinput.min.js" integrity="sha512-p9c//cVo76ZPq+afWSNPqiNDCwLR5uW605/nXIBQF/SdA72d5L/iuKjxVVHC2INv4k3OGbpLc2SF4ODyq6EeTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
@endpush