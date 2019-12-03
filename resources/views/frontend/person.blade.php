@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">

                        <div class="col-xs-12 col-sm-3">
                            <img src="{{ $user->photos->first()->path ?? $placeholder }}" alt="" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <h2>{{ $user->FullName }}</h2>

                        </div>


                        <div class="col-sm-12 top-buffer">
                            <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> {{ $user->objects->count() }} liked objects </button>
                            <ul class="list-group">
                                @foreach($user->objects as $object)
                                <li class="list-group-item">
                                    <a href="{{ route('object',['id'=>$object->id]) }}<?php ?>">  {{ $object->name }}</a>

                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-info btn-block"><span class="fa fa-user"></span> {{ $user->larticles->count() }} liked articles </button>
                            <ul class="list-group">
                                @foreach($user->larticles as $article)
                                <li class="list-group-item">
                                    <a href="{{ route('article',['id'=>$article->id]) }}<?php ?>">{{ $article->title }}</a>

                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span> {{ $user->comments->count() }} Comments </button>
                            <ul class="list-group">
                                @foreach($user->comments as $comment)
                                <li class="list-group-item">
                                    {{ $comment->content }}
                                    <a href="{{ $comment->commentable->link }}">{{ $comment->commentable->type }}</a>

                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection



