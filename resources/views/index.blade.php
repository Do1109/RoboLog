<!DOCTYPE html>
<html lang="ja">
  <head>
</head>
    <body>
    @foreach ($puramos as $puramo)
        <img id="_image" src="{{ asset('storage/'.$puramo->image) }}" alt="Image">
    @endforeach

    <a href="{{ route('create') }}">作成</a>
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <input type="submit" value="ログアウト">
    </form>
    <script src="js/index.js"></script>
    </body>
</html>