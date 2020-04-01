@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="container">
                            <div class="row">
                                <div class="col-8 offset-2">

                                    <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label">Title</label>

                                        <input id="title" type="text"
                                               class="form-control @error('title') is-invalid @enderror"
                                               name="title" value="{{ old('title') ?? $user->profile->title }}" required
                                               autocomplete="title" autofocus>

                                        @error('title')

                                        <strong>{{ $message }}</strong>

                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-md-4 col-form-label">Description</label>

                                        <input id="description" type="text"
                                               class="form-control @error('description') is-invalid @enderror"
                                               name="description"
                                               value="{{ old('description') ?? $user->profile->description }}" required
                                               autocomplete="description" autofocus>

                                        @error('description')

                                        <strong>{{ $message }}</strong>

                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <label for="url" class="col-md-4 col-form-label">URL</label>

                                        <input id="url" type="text"
                                               class="form-control @error('url') is-invalid @enderror"
                                               name="url" value="{{ old('url') ?? $user->profile->url }}" required
                                               autocomplete="url" autofocus>

                                        @error('url')

                                        <strong>{{ $message }}</strong>

                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                                        <input type="file" name="image" id="image" class="form-control-file"
                                               value="{{ old('url') ?? $user->profile->image }}">

                                        @error('image')

                                        <div class="alert alert-danger mt-3">{{ $message }}</div>

                                        @enderror
                                    </div>

                                    <div class="row pt-5">
                                        <button type="submit" class="btn btn-primary mr-3">Save Profile</button>
                                        <a href="/profile/{{$user->id}}" class="btn btn-danger" role="button">Cancel</a>
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
