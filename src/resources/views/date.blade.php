@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/date.css') }}">
@endsection

@section('content')
<div class="date__top">
    <input class="date__ttl" type="date" name="date">
</div>
<form>
    <table>
        <tr>
            <th>名前</th>
            <th>勤務開始</th>
            <th>勤務終了</th>
            <th>休憩時間</th>
            <th>勤務時間</th>
        </tr>
        <tr>
            <td>{{}}</td>
            <td>{{}}</td>
            <td>{{}}</td>
            <td>{{}}</td>
            <td>{{}}</td>
        </tr>
    </table>
</form>
<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&lt;</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&gt;</span>
            </a>
        </li>
    </ul>
</nav>
@endsection