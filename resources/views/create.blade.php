<!DOCTYPE html>
<html>
  <head>
    <body>
    <form action="{{ route('store') }}" method="post" class="text-center" class="container">
    @csrf
<tr>
    <div class="form-group" class="parent" class="child">
    <p>タイトル:<br><input type="text" id="message" rows="8" cols="80" class="form-control" name="title" style="display: inline; width: 20%;"><br></p>
    <p>作品画像:<br><input type="file" id="message" rows="8" cols="80" class="form-control" name="image" style="display: inline; width: 20%;"><br></p>
    <button type="submit" class="btn btn-primary">保存</button>
</tr>
</form>
    </body>
  </head>
</html>