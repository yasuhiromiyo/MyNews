@extends('layouts.profilefront')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="title">
                                    {{ str_limit($post->name, 50) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->gender, 10) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->hobby, 100) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->introduction, 1500) }}
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection