@php
    $description = "Twitter自動化ツール「フォロワー増やし太郎」にてアカウントの設定を確認、変更できます。";
    $title = "自動機能設定";
@endphp
@extends('layouts.app')

@section('content')
<account-setting-screen></account-setting-screen>
@endsection

@section('sidebar')
@include('components.sidebar')
@endsection