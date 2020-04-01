@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row">

                        <div class="col-8">
                            <a href="/profile/{{$post->user->id}}">
                                <img src="/storage/{{$post->image}}"
                                     class="w-100">
                            </a>
                        </div>

                        <div class="col-4">
                            <div class="d-flex align-items-center">
                                <div class="pr-2">
                                    <img src="{{$post->user->profile->profileImage()}}"
                                         class="w-100 rounded-circle"
                                         style="max-width:40px;">
                                </div>
                                <div>
                                    <div class="font-weight-bold">
                                        <a href="/profile/{{$post->user->id}}">
                                            <span class="text-dark font-weight-bold">{{$post->user->username}}</span>
                                        </a>
                                        <a href="/profile/{{$post->user->id}}" class="pl-3">Follow</a>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <p>
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-dark font-weight-bold">{{$post->user->username}} </span>
                                </a>
                                {{$post->caption}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row mt-3">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
