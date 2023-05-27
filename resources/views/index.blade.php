<!DOCTYPE html>
<html>
  <head>
    <body>
    <h1>Image Save and Display Example</h1>
    
    @foreach ($puramos as $puramo)
        <img id="_image" src="{{ route('showImage', ['image' => $puramo->image]) }}" alt="Image">
    @endforeach

    <a href="{{ route('create') }}">作成</a>
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <input type="submit" value="ログアウト">
    </form>
    <script src="js/index.js"></script>
    </body>
  </head>
</html>


ログアウト機能　未実装
