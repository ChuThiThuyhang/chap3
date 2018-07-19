@extends('master')
<<<<<<< c2331992b3e96c3d94020c65104bb2110690631f
@section('title', 'Contact')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Submit a new ticket</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                            <span class="help-block">Feel free to ask us any question.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
=======
@section('title', 'Create a new ticket')
@section('content')
    <div class = "container col-md-8 col-md-offset-2">
        <div class = "well well bs-component">
            <form class = "form-horizontal" method = "post">
                @foreach ($errors->all() as $error)
                    <p class = "alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class = "alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}">
                <fieldset>
                    <legend>Submit a new ticket</legend>
                    <div class = "form-group">
                        <label for = "title" class = "col-lg-2 control-label">Title</label>
                        <div class = "col-lg-10">
                            <input type = "title" class = "form-control" id = "title" placeholder = "Title" name = "title">
                        </div> 
                    </div>
                    <div class = "form-group">
                        <label for = "content" class = "col-lg-2 control-label">Content</label>
                        <div class = "col-lg-10">
                            <textarea class = "form-control" rows = 3" id = "content" name = "content"></textarea>
                            <span class = "help-block">Feel free to ask us any question.</span>
                        </div>
                    </div>
                    <div class = "form-group">
                        <div class = "col-lg-10 col-lg-offset-2">
                            <button class = "btn btn-default">Cancel</button>
                            <button type = "submit" class = "btn btn-primary">Submit</button>
>>>>>>> commit in develop
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
<<<<<<< c2331992b3e96c3d94020c65104bb2110690631f
@endsection
=======
@endsection
>>>>>>> commit in develop
