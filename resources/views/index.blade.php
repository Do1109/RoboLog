<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RoboLog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM">
  <!-- CSSの設定ファイル -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    @vite(['resources/js/app.js'])
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success" z-index='3'>
      <a class="navbar-brand" style="margin-left: 20;" href="#">MENU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            HOME
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('create') }}">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M8.75 11a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5a.75.75 0 0 1 .75-.75Zm7.25.75a.75.75 0 0 0-1.5 0v3.5a.75.75 0 0 0 1.5 0v-3.5Z"></path><path d="M9.813 1h2.437a.75.75 0 0 1 .75.75V5h6.75A2.25 2.25 0 0 1 22 7.25v5.25h1.25a.75.75 0 0 1 0 1.5H22v5.75A2.25 2.25 0 0 1 19.75 22H4.25A2.25 2.25 0 0 1 2 19.75V14H.75a.75.75 0 0 1 0-1.5H2V7.25A2.25 2.25 0 0 1 4.25 5h7.25V2.5H9.813A.75.75 0 0 1 9.812 1ZM3.5 7.25v12.5c0 .414.336.75.75.75h15.5a.75.75 0 0 0 .75-.75V7.25a.75.75 0 0 0-.75-.75H4.25a.75.75 0 0 0-.75.75Z"></path></svg>
          SUBMISSION OF WORK
          </a>
        </li>
        
        <li class="nav-item nav-link">
        <form action="{{ route('logout') }}" method="post">
        @csrf
          <button type="submit" class="nav-link" style="background: none; border: none; padding: 0; cursor: pointer;">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-door-exit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M13 12v.01"></path>
            <path d="M3 21h18"></path>
            <path d="M5 21v-16a2 2 0 0 1 2 -2h7.5m2.5 10.5v7.5"></path>
            <path d="M14 7h7m-3 -3l3 3l-3 3"></path>
          </svg>
            LOGOUT  
          </button>
        </form>
        </li>
      </ul>
    </div>
    </nav>

  <div id='back-img' style="background-image: url({{ asset('css/2337435_m.jpg') }});">

    @if (session('flash_message'))
      <p>{{ session('flash_message') }}</p>
    @endif


  @foreach ($puramos as $puramo)
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div style="display: flex; justify-content: center; align-items: center;" z-index='1'>
          <a href="{{ route('detail', $puramo->id) }}">
          <h4 style="display: flex; justify-content: center; align-items: center;">{{ $puramo->title }}</h4>
          <img id="_image" src="{{ asset('storage/'.$puramo->image) }}" alt="Image" style="max-width: 90%; margin-left: 5%; max-height: 100%;">
          <h4 style="display: flex; justify-content: center; align-items: center;">製作者:{{ $puramo->user->name }}</h4>
        </div>
      </div>
    </div>
  </div>
  @endforeach

</main>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>