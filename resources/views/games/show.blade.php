@extends('layout')
@section('header')
<div class="page-header">
    <h1>スカウトゲーム / 詳細 #{{$game->id}}</h1>
    <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="btn-group pull-right" role="group" aria-label="...">
            <a class="btn btn-warning btn-group" role="group" href="{{ route('games.edit', $game->id) }}"><i class="glyphicon glyphicon-edit"></i> 修正</a>
            <button type="submit" class="btn btn-danger">削除 <i class="glyphicon glyphicon-trash"></i></button>
        </div>
    </form>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-condensed table-striped">
            <tr>
                <th>ID</th>
                <td>{{$game->id}}</td>
            </tr>
            <tr>
                <th>タイトル</th>
                <td>{{$game->title}}</td>
            </tr>
            <tr>
                <th>概要</th>
                <td>{{$game->over_view}}</td>
            </tr>
            <tr>
                <th>対象</th>
                <td>{{$game->target}}</td>
            </tr>
            <tr>
                <th>区分</th>
                <td>{{$game->team_flag}}</td>
            </tr>
            <tr>
                <th>時間</th>
                <td>{{$game->duration}}</td>
            </tr>
            <tr>
                <th>人数</th>
                <td>{{$game->at_least}}</td>
            </tr>
            <tr>
                <th>フィールド</th>
                <td>{{$game->field}}</td>
            </tr>
            <tr>
                <th>道具</th>
                <td>{{$game->gear}}</td>
            </tr>
        </table>
        <hr>
        <h3>展開方法</h3>
        {!! nl2br(e($game->how_to)) !!}
        <hr>
        <h3>実施上のポイント</h3>
        {!! nl2br(e($game->hint)) !!}
        <hr>
        <h3>安全対策</h3>
        {!! nl2br(e($game->safty_point)) !!}
        <hr>
        <h3>アレンジや応用</h3>
        {!! nl2br(e($game->arrangement)) !!}
        <hr>


        <a class="btn btn-link" href="{{ route('games.index') }}"><i class="glyphicon glyphicon-backward"></i> 戻る</a>

    </div>
</div>

@endsection