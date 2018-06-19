@extends('layouts2.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Publish a post</h1>
        <hr/>
        <form method="POST" action="/blogs">
            @csrf
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            <div class="form-group">
                <label for="exampleInputEmail1">Title:</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Title input"
                    name="title"
                >
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                </small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea id="body" class="form-control" name="body" placeholder="Body"></textarea>
                <small id="emailHelp" class="form-text text-muted">Simple fill body</small>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>

        @include('layouts2.errors')
    </div>
@endsection
