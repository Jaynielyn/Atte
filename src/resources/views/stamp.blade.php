@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('content')
<h2>さんお疲れ様です！</h2>
<form action="" method="POST">
    @csrf
    <div class="stamp__content">
        <div class="box1">
            <button class="start-time" type="submit" name="start-time">勤務開始</button>
        </div>
        <div class="box2">
            <button class="finish-time" type="submit" name="finish-time">勤務終了</button>
        </div>
        <div class="box3">
            <button class="break-start" type="submit" name="break-start">休憩開始</button>
        </div>
        <div class="box4">
            <button class="break-finish" type="submit" name="break-finish">休憩終了</button>
        </div>
    </div>
</form>
@endsection