@extends('include/layout')
@section('content')

<div id="app">
  @include('include/header')

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">セミナーの流れ</li>
  </ol>
  </nav>
  <!-- メイン処理 -->
  <div class="container ops-main">
    <div class="row">
      <div class="col-md-12">
        <h3 class="ops-title">セミナーの流れ</h3>
      </div>
    </div>
    
    <div class="row">
        <div class="col-sm-6 cardlist">
            <div class="card">
            <img src="https://winnersmembers.com/wp-content/uploads/58f407608a5f5d700ccb295700303755-1024x576.png" class="attachment-large size-large wp-post-image" alt="" height=400>
            <div class="card-body">
                <h5 class="card-title">オリジナルブランドライン</h5>
            </div>
            </div>
        </div>
        <div class="col-sm-6 cardlist">
            <div class="card">
            <img src="https://winnersmembers.com/wp-content/uploads/6d4e9b8e2cd3e2a86774afd5339e5301-1024x576.png" class="attachment-large size-large wp-post-image" alt=""　height=400>
            <div class="card-body">
                <h5 class="card-title">エンジャリストライン</h5>
            </div>
            </div>
        </div>
        <div class="col-sm-6 cardlist">
            <div class="card">
            <img src="https://winnersmembers.com/wp-content/uploads/58f407608a5f5d700ccb295700303755-1024x576.png" class="attachment-large size-large wp-post-image" alt="" height=400>
            <div class="card-body">
                <h5 class="card-title">エンジャリストライン</h5>
            </div>
            </div>
        </div>
        <div class="col-sm-6 cardlist">
            <div class="card">
            <img src="https://winnersmembers.com/wp-content/uploads/6d4e9b8e2cd3e2a86774afd5339e5301-1024x576.png" class="attachment-large size-large wp-post-image" alt=""　height=400>
            <div class="card-body">
                <h5 class="card-title">オリジナルブランドライン</h5>
            </div>
            </div>
        </div>
    </div>
  </div>
  @include('include/footer')
</div>
 
@endsection

