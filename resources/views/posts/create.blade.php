@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Post</div>

                <div class="card-body">
                    <form action="/post" enctype="multipart/form-data" method="POST">
                        @csrf

                        <div class="container">
                            <div class="row">
                                <div class="col-8 offset-2">

                                    <div class="form-group row">
                                        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                                        <input id="caption" type="text"
                                               class="form-control @error('caption') is-invalid @enderror"
                                               name="caption" value="{{ old('caption') }}" required
                                               autocomplete="caption" autofocus>

                                        @error('caption')

                                        <strong>{{ $message }}</strong>

                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="image" class="col-md-4 col-form-label">Image</label>

                                        <input type="file" name="image" id="image" class="form-control-file">

                                        @error('image')

                                        <div class="alert alert-danger mt-3">{{ $message }}</div>

                                        @enderror
                                    </div>

                                    <div class="row pt-5">
                                        <button type="submit" class="btn btn-primary">Add New Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
