@extends('layouts.app')

<body>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
                

                    <div style="text-align:center;">
                    <h2>模型投稿サイト<h2>
                    <h1>RoboLog</h1>


                    @guest
                            @if (Route::has('login'))
                                <h5 class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </h5>
                            @endif
                            @if (Route::has('register'))
                                <h5 class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </h5>
                            @endif
                    @endguest  
</div>      

            </div>
        </div>
    </div>
</div>
@endsection
</body>
