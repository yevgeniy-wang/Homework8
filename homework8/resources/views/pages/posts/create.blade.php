@extends('layout')

@section('title', 'Post creating')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <input type="text" class="form-control" id="body" name="body" value="">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category ID</label>
                        <input type="text" class="form-control" id="category_id" name="category_id" value="">
                    </div>

                    <div class="mb-3">
                        <input href="category.php" type="submit" class="btn btn-primary mb-3" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection