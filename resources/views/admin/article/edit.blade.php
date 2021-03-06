@extends('layouts.master')
@section('page-title', 'Edit Article - Admin Page')
@section('content')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">Edit article
                    <span class="tools pull-right">
                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                     </span>
                </header>
                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <label style="font-size: 15px">Please refill the form.</label>
                        </div>
                    @endif
                    <div class="form">
                        <form id="create-form-edit" class="cmxform form-horizontal" method="post" action="/admin/article/{{$obj -> id}}" novalidate="novalidate"  enctype="multipart/form-data">
                            @method('PUT')
                            {{csrf_field()}}
                            <div class="col-lg-7">
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Title</label>
                                    <div class="col-lg-9">
                                        <input class=" form-control" name="title" type="text" value="{{$obj->title}}">
                                        @foreach ($errors->get('title') as $title)
                                            <p class="text-danger help-block">{{$title}}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: 30px">
                                    <label class="control-label col-lg-2">Author</label>
                                    <div class="col-lg-9">
                                        <input class=" form-control" name="author" type="text" value="{{$obj->author}}">
                                        @foreach ($errors->get('author') as $error)
                                            <p class="text-danger help-block">{{$error}}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: 100px">
                                    <label class="control-label col-lg-2">Content</label>
                                    <div class="col-lg-12">
                                        <textarea class="form-control" rows="10" name="content" type="text" id="editor">{{$obj->content}}</textarea>
                                        {{--Display autosave status--}}
                                        <div id="editor-status" class="help-block"></div>
                                        @foreach ($errors->get('content') as $error)
                                            <p class="text-danger help-block">{{$error}}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="custom-file">
                                    <label class="control-label col-lg-3">Images</label>
                                    <div class="col-lg-9">
                                        <input type="file" class="custom-file-input" name="images" id="img" value="{{$obj->images}}">
                                        <label class="custom-file-label text-truncate" for="img">Choose file</label>
                                        <img class="mt-2 img-fluid mb-5" style="background-size: cover; width: 260px;" src="{{$obj->images}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-6">
                                    <button class="btn btn-primary" type="submit" id="btn-sumbit">Save</button>
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