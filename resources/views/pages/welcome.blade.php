@extends('layout.main')

@section('title', '| HomePage')

@section('stylesheets')
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-3">Welcome to my blog</h1>
                <p class="lead">Thank you for visiting my blog.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                </p>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda delectus doloremque eveniet
                    explicabo facere incidunt ipsa ipsam labore, minima minus necessitatibus, numquam odit officiis,
                    quaerat quisquam quo vel velit voluptatum...
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda delectus doloremque eveniet
                    explicabo facere incidunt ipsa ipsam labore, minima minus necessitatibus, numquam odit officiis,
                    quaerat quisquam quo vel velit voluptatum...
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda delectus doloremque eveniet
                    explicabo facere incidunt ipsa ipsam labore, minima minus necessitatibus, numquam odit officiis,
                    quaerat quisquam quo vel velit voluptatum...
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda delectus doloremque eveniet
                    explicabo facere incidunt ipsa ipsam labore, minima minus necessitatibus, numquam odit officiis,
                    quaerat quisquam quo vel velit voluptatum...
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@stop

@section('scripts')
@stop