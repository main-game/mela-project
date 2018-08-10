@extends('layouts.master)
@section('page-title', 'List Order - Admin Page')
<link href="css/list.css" rel='stylesheet' type='text/css' />//để sang bên master layout hộ c
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        List Order
                    </div>
                    <div>
                        <table class="table" ui-jq="footable" ui-options='{
                            "paging": {
                              "enabled": true
                            },
                            "filtering": {
                              "enabled": true
                            },
                            "sorting": {
                              "enabled": true
                            }}'>
                            <thead>
                            <tr>
                                <th data-breakpoints="xs"></th>
                                <th>Client</th>
                                <th>Total</th>
                                <th data-breakpoints="xs sm md" data-title="DOB">Action</th>
                            </thead>
                            <tbody>
                            @foreach($list_obj as $item)
                                <tr class="row" id="row-item-{{$item->id}}">
                                    <td>
                                        <input type="checkbox" class="check-item">
                                    </td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->clientId}}</td>
                                    <td>{{$item->total}}</td>
                                    <td>
                                        <a href="#" class="btn btn-link btn-quick-edit">Quick Edit</a>&nbsp;&nbsp;
                                        <a href="/admin/bakery/edit/{{$item -> id}}" class="btn btn-link btn-edit">Edit</a>&nbsp;&nbsp;
                                        <a href="#" id="{{$item-> id}}" class="btn btn-link btn-delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-8 form-inline">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="check-all">
                            <label class="form-check-label" for="defaultCheck1">Check All</label>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <select id="select-action" class="form-control">
                                <option selected value="0">Action</option>
                                <option value="1">Delete All</option>
                                <option value="2">Another Action</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2" id="btn-apply">Submit</button>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection