@extends('layouts.master')

@section('title', "蔬菓預購系統")

@section('content')
    <div class="container clearfix">
        <h2>瀏覽商品清單</h2>
    </div>
    {{ $tel }}
    {{--  {{ $data }}  --}}
@stop

@section('js')
    <script scr="js/2.js"></script>
    @parent
@stop
