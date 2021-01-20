@extends('layouts.app')

@section('content') <br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <button type="button" class="btn btn-danger"><a href="http://amit.com/posts/create">Create Posts</a></button>
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
