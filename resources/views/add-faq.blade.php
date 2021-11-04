@extends('layouts.master')

@section('title') @lang('translation.Form_Editors') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') FAQs @endslot
        @slot('title') faqs @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="">Frequently Asked Questions and Answers <a href="{{route('getfaq')}}" class="btn btn-secondary float-end">BACK</a></h2>
                    {{-- <p class="card-title-desc">Bootstrap-wysihtml5 is a javascript
                        plugin that makes it easy to create simple, beautiful wysiwyg editors
                        with the help of wysihtml5 and Twitter Bootstrap.</p> --}}

                    <form method="post" action="{{route('saveFaq')}}">
                        @csrf
                        <div class="form-group">
                            <h4>Question</h4>
                            <input class="form-control" placeholder="Question ..." name="question">
                        </div>
                        <div class="form-group">
                            <h4>Answer</h4>
                            <textarea class="tinymce" name="answer"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <div class="col-6">
                            <select name="status" id="" class="form-control ">
                                <option value="published">published</option>
                                <option value="draft">draft</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group my-2">
                            @error('question')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            @error('answer')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            @error('status')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success text-white my-2">SAVE DATA</button>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <!--tinymce js-->
    <script src="assets/libs/tinymce/tinymce.min.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/form-editor.init.js"></script>
@endsection
