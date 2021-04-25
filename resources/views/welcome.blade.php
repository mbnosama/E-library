@extends('layouts.app')

@section('content')
    <div class="card">
        <h4 class="card-header text-center bg-success text-white">All Books</h4>
        <div class="card-body">
            @if (count($books) > 0)
                @foreach($books as $book)
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
        <div class="d-flex justify-content-center">
            {!! $books->links() !!}
        </div>
    </div>
@endsection
