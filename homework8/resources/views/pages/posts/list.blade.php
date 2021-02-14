@extends('layout')

@section('title', 'Posts')

@section('content')
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Body</th>
            <th>Category ID</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Actions</th>
        </tr>
        @forelse($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <p><a class="btn btn-secondary" href="posts-delete.php?id={{$post->id}}">Delete</a></p>
                    <p><a class="btn btn-secondary" href="posts-update.php?id={{$post->id}}">Update</a></p>
                </td>
            </tr>

        @empty
            <tr>
                <th><p>no posts</p></th>
            </tr>
        @endforelse
    </table>
    <div class="mb-3">
        <a class="btn btn-secondary" href="posts-create.php">Add new post</a>
    </div>
    <div class="mb-3">
        <a class="btn btn-secondary" href="../">Back</a>
    </div>
@endsection