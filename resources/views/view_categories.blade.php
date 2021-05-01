@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
<h1 class="text-center text-bold">KATEGORI</h1>
@stop
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-bold">
                    {{ __('KELOLA KATEGORI') }}

                </div>
                <div class="card-body">
                    <button class="btn btn-primary float-left mr-3" data-toggle="modal" data-target="#tambahBukuModal"><i class="fa fa-plus"></i> Add Data</button>
                    <a href="{{route('admin.print.books')}}" target="_blank" class="btn btn-secondary mb-5"><i class="fa fa-print"></i>Print to PDF</a>
                    <div class="btn-group mb-5" role="group" aria-label="Basis Example">
                        <a href="{{route('admin.book.export')}}" class="btn btn-info" target="_blank">Exports</a>
                        <a href="" class="btn btn-warning" data-toggle="modal" data-target="#importDataModal">Import</a>
                    </div>
                    <table id="table-data" class="table table-borderer display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>TITLE</th>
                                <th>AUTHOR</th>
                                <th>YEAR</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach($kategori as $key)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$key->name}}</td>
                                <td>{{$key->description}}</td>
                                <td><button>
                                        tes
                                    </button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop