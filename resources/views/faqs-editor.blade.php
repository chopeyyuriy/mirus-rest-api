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
                    <h3 class="card-title">
                        Frequently Asked Questions and Answers
                        <a href="add-faq" class="btn btn-primary float-end">Add Faq</a>
                    </h3>
                    <livewire:faq-livewire />
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

    <script>
        function initTinyMce() {
            //console.log('here');
            setTimeout(()=>{renderTinymce();},1000)
        }
        function renderTinymce() {
            if ($(".tinymce").length > 0) {
                tinymce.init({
                    selector: ".tinymce",
                    height: 200,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [{
                            title: 'Bold text',
                            inline: 'b'
                        },
                        {
                            title: 'Red text',
                            inline: 'span',
                            styles: {
                                color: '#ff0000'
                            }
                        },
                        {
                            title: 'Red header',
                            block: 'h1',
                            styles: {
                                color: '#ff0000'
                            }
                        },
                        {
                            title: 'Example 1',
                            inline: 'span',
                            classes: 'example1'
                        },
                        {
                            title: 'Example 2',
                            inline: 'span',
                            classes: 'example2'
                        },
                        {
                            title: 'Table styles'
                        },
                        {
                            title: 'Table row 1',
                            selector: 'tr',
                            classes: 'tablerow1'
                        }
                    ]
                });
            }
        }

    </script>

@endsection
