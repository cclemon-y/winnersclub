@extends('include/layout')
@section('content')

<div id="app">
  @include('include/header')

  <img src="https://winnersmembers.com/wp-content/uploads/top_image3.png" height="400" width="1920" alt="&nbsp;" class="slider-286 slide-287" title="top_image3" draggable="false">

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
            <img src="https://winnersmembers.com/wp-content/uploads/6de4a548b34f2be722fd8be2b792bba9-730x410.png" class="attachment-large size-large wp-post-image" alt="" height=400>
            <div class="card-body">
                <h5 class="card-title">【44】2020.6.15 複業3.0レクチャー(桜井翔平)</h5>
            </div>
            </div>
        </div>
        <div class="col-sm-6 cardlist">
            <div class="card">
            <img src="https://winnersmembers.com/wp-content/uploads/49aba195f62a03c5f04f15fb73cb9379-730x410.png" class="attachment-large size-large wp-post-image" alt=""　height=400>
            <div class="card-body">
                <h5 class="card-title">【43】2020.7.10 zoomレクチャー(三浦紘樹)</h5>
            </div>
            </div>
        </div>
        <div class="col-sm-6 cardlist">
            <div class="card">
            <img src="https://winnersmembers.com/wp-content/uploads/1aaa93b02d5b708b57dd07f93818ce7a-730x410.png" class="attachment-large size-large wp-post-image" alt="" height=400>
            <div class="card-body">
                <h5 class="card-title">【42】2020.7.7 zoomレクチャー(湯徳慎一郎)</h5>
            </div>
            </div>
        </div>
        <div class="col-sm-6 cardlist">
            <div class="card">
            <img src="https://winnersmembers.com/wp-content/uploads/b4f5dc9c6612773b32ad17e0189f7115-730x410.png" class="attachment-large size-large wp-post-image" alt=""　height=400>
            <div class="card-body">
                <h5 class="card-title">【41】2020.7.2下克上レクチャー(内山裕太)</h5>
            </div>
            </div>
        </div>

        @include('include/pagination')
    </div>
  </div>
  @include('include/footer')
</div>
 
@endsection

