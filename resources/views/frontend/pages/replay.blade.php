@extends('frontend\layout\app')

@section('content')

@include('frontend\components\fixed\blogHeader')
 <!-- Reply form -->
 {{-- <div class="reply-form" data-comment-id="{{ $comment->id }}">
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="blog_id" value="{{ $blogDetails->id }}">
        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
        <div class="form-group">
            <label for="content">Reply</label>
            <textarea name="content" id="content" rows="2" class="form-control" placeholder="Write Reply .."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Reply</button>
    </form>
</div> --}}


@endsection
