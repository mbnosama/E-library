@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header text-center bg-success text-white">
            <h4>{{$category->name}}</h4>
        </div>

        <div class="card-body">
            @if ($category->books()->count() > 0)
                @foreach($category->books as $book)
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
                            <a href="{{route('book',$book->id)}}" class="btn btn-info">More info</a>
                        </div>
                        <!-- /.col-md-9 -->
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </div>

@endsection
