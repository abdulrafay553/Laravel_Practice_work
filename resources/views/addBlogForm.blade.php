@extends('layout')

@section('mycontent')
    <h1>ADD NEW BLOG</h1>
    <hr>
    <form action="{{ url('saveBlogForm') }}" method="POST" class="container">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blogs Title</label>
            <input type="text" class="form-control" id="t1" name="txtblogtitle" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blogs Author</label>
            <input type="text" class="form-control" id="t2" name="txtblogauthor" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blogs Content</label>
            <input type="text" class="form-control" id="t3" name="txtblogcontent" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
