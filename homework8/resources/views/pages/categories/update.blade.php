@extends('layout')

@section('title', 'Category updating')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$category->title}}">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{$category->slug}}">
                </div>

                <div class="mb-3">
                    <input href="category.php" type="submit" class="btn btn-primary mb-3" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
