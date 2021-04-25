@extends('adminlte::page')

@section('title', 'create category')
@section('content_header')
    <h4 class="mb-4">Welcome to admin panel, <span class="bg-dark rounded">{{request()->user()->name}}</span></h4>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title bg-primary p-2 rounded">Add Category</h3>
            <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a class="btn btn-outline-primary text-dark" href="{{route('categories.index')}}">All Category</a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('categories.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name">
                </div>
                <div class="form-group">
                    <button type="submit" name="add" class="btn btn-primary btn-block">Add Category</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop
