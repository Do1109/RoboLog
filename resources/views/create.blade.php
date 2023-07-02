<!DOCTYPE html>
<html lang="ja">
  <head>
  <link href="{{ asset('css/index.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM">  
  @vite(['resources/js/app.js'])  
</head>
    <body>
    <div style="background-image: url({{ asset('css/dioramapakutaso-4459_TP_V4.jpg') }}); background-size: cover; background-position: center; position: relative; height: 100vh;">

      <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" class="text-center container">
        @csrf
          <tr>
            <div class="form-group element" class="child" style="color: aqua; text-align: center;">
            <p>タイトル<br><input type="text" id="message" rows="8" cols="80" class="form-control" name="title" style="display: inline; width: 20%;"><br></p>
            <label>製作者コメント<br><textarea type="text" rows="8" cols="80" class="form-control" name="comment" style="display: inline; width: 60%;"></textarea><br>
            <p>作品画像<br><input type="file" id="message" rows="8" cols="80" class="form-control" name="image" style="display: inline; width: 22%;"><br></p>
            <button type="submit" class="btn btn-primary btn-sm btn-*">保存</button>            
            </div>
          </tr>
      </form>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>