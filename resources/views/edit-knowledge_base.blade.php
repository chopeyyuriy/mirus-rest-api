@extends('layouts.master')

@section('title') Edit Knowledge Base @endsection

@section('css')
    <!-- main css -->
    <link href="{{ URL::asset('/assets/css/main.css') }}" rel="stylesheet" type="text/css" />

    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- ckeditor5 css -->
    <link type="text/css" href="{{ URL::asset('/assets/libs/ckeditor5/sample/css/sample.css') }}" rel="stylesheet" media="screen" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Knowledge Bases @endslot
        @slot('title') Edit Knowledge Base @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('knowledge_base.update', $knowledgeBase->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="productname">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $knowledgeBase->title }}">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="manufacturername">Author</label>
                                    <select name="author_id" class="select2 form-control select2-multiple" data-placeholder="Choose ...">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" @if($user->id == $knowledgeBase->author_id) selected @endif>{{ $user->first_name . ' ' . $user->last_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('author_id')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Date</label>
                                    <input type="date" name="date" class="form-control" value="{{ date('Y-m-d', strtotime($knowledgeBase->date)) }}">
                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="manufacturerbrand">Type</label>
                                    <select name="type" class="select2 form-control select2-multiple" data-placeholder="Choose ...">
                                        <option value="knowledge_base" @if('knowledge_base' == $knowledgeBase->type) selected @endif>Knowledge Base</option>
                                        <option value="support" @if('support' == $knowledgeBase->type) selected @endif>Support</option>
                                    </select>
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="productdesc">Description</label>
                                    <textarea name="description" class="form-control" id="description" rows="5">{!! $knowledgeBase->description !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-flex flex-wrap gap-2 mb-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                    <a href="{{ route('knowledge_base.index') }}" class="btn btn-secondary waves-effect waves-light">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')

    <!-- ckeditor5 js -->
    <script src="{{ URL::asset('/assets/libs/ckeditor5/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ), {
                // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( err => {
                console.error( err.stack );
            } );
    </script>

    <!-- select 2 plugin -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-select2.init.js') }}"></script>
    <script>
        function getData(event) {
            var ar = '';
            event.target.files.forEach(element => {
                ar += element.name + '<br>';
            });;
            event.target.nextElementSibling.nextElementSibling.innerHTML = ar;
        }

    </script>
@endsection
