@extends('layouts.master')
@section('page-title', 'List Category - Admin Page')
@section('content')
    <link href="{{asset('css/list.css')}}" rel='stylesheet' type='text/css' />
    <section id="main-content">
        <section class="wrapper">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        List Category
                    </div>
                    <div class="alert alert-success hidden mt-2" role="alert" id="messageSuccess"></div>
                    <div class="alert alert-danger hidden mt-2" role="alert" id="messageError"></div>
                    @if(count($list_obj)>0)
                    <div>
                        <table class="table table-light">
                            <thead>
                            <tr class="row col-lg-12">
                                <th class="col-md-1" style="width: 3%"></th>
                                <th class="col-md-1" style="width: 3%">ID</th>
                                <th class="col-md-2">Name</th>
                                <th class="col-md-2">Images</th>
                                <th class="col-md-4 text-center">Description</th>
                                <th class="col-md-2 text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_obj as $item)
                                <tr class="row col-lg-12" id="row-item-{{$item->id}}">
                                    <td class="col-md-1 text-center">
                                        <input type="checkbox" class="check-item">
                                    </td>
                                    <td class="col-md-1">{{$item->id}}</td>
                                    <td class="col-md-2">{{$item->name}}</td>
                                    <td class="col-md-2">
                                        <div class="card"
                                             style="background-image: url('{{$item->images}}'); background-size: cover; width: 70px; height: 70px;">
                                        </div>
                                    </td>
                                    <td class="col-md-4 text-justify">{{$item->description}}</td>
                                    <td class="col-md-2 text-center">
                                        <a href="/admin/category/{{$item -> id}}/edit" class="btn btn-link btn-edit" data-toggle="tooltip" title="Edit" data-placement="top"><span class="fa fa-edit"></span></a>
                                        <a href="javascript:void(0)" id="{{$item-> id}}" class="btn btn-link btn-delete-category" data-toggle="tooltip" title="Delete" data-placement="top"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-8 form-inline">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="check-all">
                                    <select id="select-action" class="form-control">
                                        <option selected value="0">Action</option>
                                        <option value="1">Delete All</option>
                                        <option value="2">Another Action</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary ml-2" id="btn-apply-category">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="pagination pull-right">
                            {!! $list_obj->links() !!}
                        </div>
                    </div>
                    @else
                        <div class="alert alert-info" role="alert">
                            Have no category, click <a href="/admin/category/create">here</a> to create new.
                        </div>
                    @endif
                </div>
        </section>
    </section>
    <script src="{{asset('js/delete.js')}}"></script>
    <script src="{{asset('js/checkAll.js')}}"></script>
@endsection
