@extends('layout')
@section('css')

@endsection
@section('header')
<div class="page-header">
    <h1><i class="glyphicon glyphicon-plus"></i> スカウトゲーム / 新規登録 </h1>
</div>
@endsection

@section('content')
@include('error')

<div class="row">
    <div class="col-md-12">

        <form action="{{ route('games.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group @if($errors->has('title')) has-error @endif">
                <label for="title-field">タイトル</label>
                <input type="text" id="title-field" name="title" class="form-control" value="{{ old("title") }}" />
                @if($errors->has("title"))
                <span class="help-block">{{ $errors->first("title") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('over_view')) has-error @endif">
                <label for="over_view-field">概要</label>
                <input type="text" id="over_view-field" name="over_view" class="form-control" value="{{ old("over_view") }}" />
                @if($errors->has("over_view"))
                <span class="help-block">{{ $errors->first("over_view") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('target')) has-error @endif">
                <label for="target-field">ターゲット</label>
                <input type="text" id="target-field" name="target" class="form-control" value="{{ old("target") }}" />
                @if($errors->has("target"))
                <span class="help-block">{{ $errors->first("target") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('team_flag')) has-error @endif">
                <label for="team_flag-field">区分(チーム or 個人)</label>
                <input type="text" id="team_flag-field" name="team_flag" class="form-control" value="{{ old("team_flag") }}" />
                @if($errors->has("team_flag"))
                <span class="help-block">{{ $errors->first("team_flag") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('duration')) has-error @endif">
                <label for="duration-field">ゲームにかかる時間</label>
                <input type="text" id="duration-field" name="duration" class="form-control" value="{{ old("duration") }}" />
                @if($errors->has("duration"))
                <span class="help-block">{{ $errors->first("duration") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('at_least')) has-error @endif">
                <label for="at_least-field">必要な人数</label>
                <input type="text" id="at_least-field" name="at_least" class="form-control" value="{{ old("at_least") }}" />
                @if($errors->has("at_least"))
                <span class="help-block">{{ $errors->first("at_least") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('field')) has-error @endif">
                <label for="field-field">フィールド</label>
                <input type="text" id="field-field" name="field" class="form-control" value="{{ old("field") }}" />
                @if($errors->has("field"))
                <span class="help-block">{{ $errors->first("field") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('gear')) has-error @endif">
                <label for="gear-field">必要な道具</label>
                <input type="text" id="gearfield" name="gear" class="form-control" value="{{ old("gear") }}" />
                @if($errors->has("gear"))
                <span class="help-block">{{ $errors->first("gear") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('how_to')) has-error @endif">
                <label for="how_to-field">展開方法</label>
                <textarea name="how_to" id="" cols="30" rows="10" class="form-control"></textarea>
                <!-- <input type="text" id="how_to-field" name="how_to" class="form-control" value="{{ old("how_to") }}" /> -->
                @if($errors->has("how_to"))
                <span class="help-block">{{ $errors->first("how_to") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('hint')) has-error @endif">
                <label for="hint-field">実施上のポイント</label>
                <textarea name="hint" id="" cols="30" rows="10" class="form-control"></textarea>
                <!-- <input type="text" id="hint-field" name="hint" class="form-control" value="{{ old("hint") }}" /> -->
                @if($errors->has("hint"))
                <span class="help-block">{{ $errors->first("hint") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('safty_point')) has-error @endif">
                <label for="safty_point-field">安全対策</label>
                <textarea name="safty_point" id="" cols="30" rows="10" class="form-control"></textarea>
                <!-- <input type="text" id="safty_point-field" name="safty_point" class="form-control" value="{{ old("safty_point") }}" /> -->
                @if($errors->has("safty_point"))
                <span class="help-block">{{ $errors->first("safty_point") }}</span>
                @endif
            </div>

            <div class="form-group @if($errors->has('arrangement')) has-error @endif">
                <label for="arrangement-field">アレンジや応用</label>
                <textarea name="arrangement" id="" cols="30" rows="10" class="form-control"></textarea>
                <!-- <input type="text" id="arrangement-field" name="arrangement" class="form-control" value="{{ old("arrangement") }}" /> -->
                @if($errors->has("arrangement"))
                <span class="help-block">{{ $errors->first("arrangement") }}</span>
                @endif
            </div>

            <div class="well well-sm">
                <button type="submit" class="btn btn-primary">登録</button>
                <a class="btn btn-link pull-right" href="{{ route('games.index') }}"><i class="glyphicon glyphicon-backward"></i> 戻る</a>
            </div>
        </form>

    </div>
</div>
@endsection
@section('scripts')

@endsection