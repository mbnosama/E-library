@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <h4 class="mb-4">Welcome to admin panel, <span class="bg-dark rounded">{{request()->user()->name}}</span></h4>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title bg-primary p-2 rounded">users</h3>
            <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a class="btn btn-outline-primary text-dark">Add User</a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-dark text-center">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                </tr>
                </thead>
                @if(count($users)>0)
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop
