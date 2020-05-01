@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="text-right">
            <a class="btn btn-primary" href="{{route ('posts.edit')}}">
                編集する
            </a>

            <a class="btn btn-danger" href="">
                削除する
            </a>
        </div>
    </div>

    <div class="container my-4">
        <div class="card mb-4">
            <div class="card-header">
                <h2>
                    {{$post->title}}
                </h2>
            </div>
            <div calss="card-body">
                <p class="card-text">
                {{$post->body}}
                </p>
            </div>
            <div class="card-footer">
                 <span>
                    投稿日時：{{$post->created_at->format('Y-m-d')}}
                 </span>
            </div>
        </div>
    </div>


@endsection('content')