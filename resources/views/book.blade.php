@extends('layouts.app')

@section('content')
        <div class="card">
            <div class="card-header">
                <h4>Book >> <span class="bg-dark p-1 text-white rounded">{{$book->title}}</span></h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img style="width: 250px;height: 250px;"  src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-responsive border"/>
                    </div>
                    <!-- /.col-md-12 -->
                    <div class="col-md-7">
                        <h2>{{$book->title}}</h2>
                        <p>{{$book->info}}</p>
                        <br/>
                        Author : {{$book->author}} <br/>
                        <a href="{{asset('storage/books/'.$book->bookfile)}}" class="btn btn-primary">Download</a>
                        {{--                            <a href="{{route('book',$book->id)}}" class="btn btn-info">More info</a>--}}
                    </div>
                    <!-- /.col-md-9 -->
                </div>
                <hr>
                @include('commentbox')
            </div>

        </div>
@endsection
