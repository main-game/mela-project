@extends('layouts.master')
@section('page-title', 'Create Article - Admin Page')
@section('content')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">Create new article
                    <span class="tools pull-right">
                        <a href="javascript:;">
                            <span class="fa fa-chevron-down"></span>
                        </a>
                    </span>
                </header>
                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <label style="font-size: 15px">Please refill the form.</label>
                        </div>
                    @endif
                    <div class="form">
                        <form id="create-form" class="cmxform form-horizontal" method="post" action="/admin/article" novalidate="novalidate"  enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="col-lg-7">
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Title</label>
                                    <div class="col-lg-9">
                                        <input class=" form-control" name="title" type="text">
                                        @foreach ($errors->get('title') as $title)
                                            <p class="text-danger help-block">{{$title}}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Author</label>
                                    <div class="col-lg-9">
                                        <input class=" form-control" name="author" type="text">
                                        @foreach ($errors->get('author') as $author)
                                            <p class="text-danger help-block">{{$author}}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div><label class="control-label col-lg-2">Content</label></div>
                                    <div class="col-lg-12 ml-3 mt-4 w-full-md">
                                        <textarea class="form-control" rows="10" name="content" type="text" id="editor"></textarea>
                                        {{--Display autosave status--}}
                                        <div id="editor-status" class="help-block"></div>
                                        @foreach ($errors->get('content') as $content)
                                            <p class="text-danger help-block">{{$content}}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="custom-file">
                                    <label class="control-label col-lg-3">Images</label>
                                    <div class="col-lg-9">
                                        <input type="file" class="custom-file-input" name="images" id="img">
                                        <label class="custom-file-label text-truncate" for="img">Choose file</label>
                                        @foreach ($errors->get('images') as $images)
                                            <p class="text-danger help-block">{{$images}}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <button class="btn btn-default" type="reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <style>
        .footer {
            margin-left: 0px;
        }
        .ck-editor__editable {
            height: 300px;
        }
        .ck-editor.ck-rounded-corners {
            width: 800px;
            margin-left: 88px;
        }
    </style>
    <script src="{{asset('js/form.js')}}"></script>
    <script src="{{asset('js/ckeditor5/ckeditor.js')}}"></script>
    <script>
        let editor;

        ClassicEditor
            .create( document.querySelector( '#editor' ))
            .then( newEditor => {
                editor = newEditor;
                console.log(Array.from( editor.ui.componentFactory.names() ));
            } )
            .catch( err => {
                console.error( err.stack );
            } );

        document.querySelector( '#btn-submit' ).addEventListener( 'click', () => {
            const editorData = editor.getData();
            document.querySelector('#editor').innerHTML(editorData);
        } );

    </script>
@endsection