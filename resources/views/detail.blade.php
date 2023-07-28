<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>RoboLog</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM">
  <!-- CSSの設定ファイル -->
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  @vite(['resources/js/app.js'])
</head>

<body style="text-align: center;">
<div id='back-img' style="background-image: url({{ asset('plastic-model-car.jpg') }});">
<h1>作品詳細</h1>  
<div class="row d-flex justify-content-center">    
  <div class="col-9">
    <div class="row">
      <div class="col-12">
        <img id="_image" src="{{ asset('storage/'.$puramo->image) }}" class="img-thumbnail" alt="Image">
        <h2>作品名:{{ $puramo->title }}</h2><br>
        <h4>製作者:{{ $puramo->user->name }}</h4><br>
        <h6>製作者コメント:{{ $puramo->comment }}</h6>
        @if ($puramo->user_id == Auth::user()->id) 
        <form action="{{ route('destroy', $puramo) }}" method="post">
          @csrf
          @method('delete')
          <button type="submit">削除</button>
        </form>
        @endif
        <form action="{{ route('index') }}" method="get">
          @csrf
          <button type="submit">戻る</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>