@php
    $description = "Twitter自動化ツール「フォロワー増やし太郎」にてツイートの投稿を予約します。";
    $title = "ツイート予約";
@endphp
@extends('layouts.app')

@section('content')
<reserve-tweet--screen></reserve-tweet--screen>
@endsection

@section('sidebar')
@include('components.sidebar')
@endsection