@extends('layout')

@section('header')
<div class="page-header clearfix">
    <h1>
        <i class="glyphicon glyphicon-align-justify"></i> スカウトゲーム
        <a class="btn btn-success pull-right" href="{{ route('games.create') }}"><i class="glyphicon glyphicon-plus"></i> 登録</a>
    </h1>

</div>
@endsection

@section('content')
    <a href="https://game.app/games" class="btn btn-primary">全てのゲーム</a>
    <a href="https://game.app/games?q=nogear" class="btn btn-primary">道具なしでできるゲーム</a>
    <a href="https://game.app/games?team_flag=individual" class="btn btn-primary">個人でできるゲーム</a>
    <a href="https://game.app/games?team_only=true" class="btn btn-primary">チームでもできるゲーム</a>
<div class="row">
    <div class="col-md-12">
        @if($games->count())
        <table class="table table-condensed table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>タイトル</th>
                    <th>概要</th>
                    <th class="text-right">対象</th>
                </tr>
            </thead>

            <tbody>
                @foreach($games as $game)
                <tr>
                    <td>{{$game->id}}</td>
                    <td>
                        <a href="{{ route('games.show', $game->id) }}">{{$game->title}}</a>
                    </td>
                    <td>{{$game->over_view}}</td>
                    <td class="text-right">
                        @if(strpos($game->target,"BVS") !==false) BVS @endif
                        @if(strpos($game->target,"CS") !==false) CS @endif
                        @if(strpos($game->target,"BS") !==false) BS @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $games->render() !!}
        @else
        <h3 class="text-center alert alert-info">データがありません!</h3>
        @endif

    </div>
</div>

@endsection