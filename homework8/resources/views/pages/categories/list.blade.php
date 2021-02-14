@extends('layout')

@section('title', 'Categories')

@section('content')
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Actions</th>
        </tr>
        @forelse($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td>{{$category->slug}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td>
                    <p><a class="btn btn-secondary" href="categories-delete.php?id={{$category->id}}">Delete</a></p>
                    <p><a class="btn btn-secondary" href="categories-update.php?id={{$category->id}}">Update</a></p>
                </td>
            </tr>

        @empty
            <tr>
                <th><p>no categories</p></th>
            </tr>
        @endforelse
    </table>
    <div class="mb-3">
        <a class="btn btn-secondary" href="categories-create.php">Add new category</a>
    </div>
    <div class="mb-3">
        <a class="btn btn-secondary" href="../">Back</a>
    </div>
@endsection