@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data" style="width: 60%;">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" value="{{$category->name}}" name="category_name" class="form-control" placeholder="Category Name" required>
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection