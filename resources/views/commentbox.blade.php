<div class="panel panel-default">
    <div class="panel-heading text-center">
        <h4 class="">Comments</h4>
    </div>

    <div class="panel-body">
        @include('partial.alerts')
        <form action="{{route('comment',$book->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <textarea class="form-control" name="comment" placeholder="Enter Your Comment Here"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
        <hr>
        @if (count($book->comments) > 0)
            @foreach($book->comments as $comment)
                <div class=" bg-light">
                    <p class="bg-primary p-1" style="display: inline;">{{$comment->user->name}}</p>
                    <span style="float: right" class="">{{$comment->created_at}}</span>
                    <p class="mt-2 pt-2 pb-2 bg-success" style="font-size: 18px">{{$comment->comment}}</p>
                </div>
                <!-- /.row -->
            @endforeach
        @endif
    </div>
</div>
