@php
$description = "Twitter自動化ツール「フォロワー増やし太郎」に登録したアカウントを削除します。";
$title = "Twitterアカウント登録削除";
@endphp
@extends('layouts.app')

@section('content')
<h2 class="c-title">Twitterアカウント登録削除</h2>
<section class="p-section">
    <account-list></account-list>
</section>
@endsection

@section('sidebar')
@include('components.sidebar')
@endsection