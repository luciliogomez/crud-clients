<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('/css/assets/materialize/css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/assets/font-awesome-4.7.0/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/assets/custom_index.css') }}">
    <title>LOGIN</title>
</head>
<body style="background-image: url({{asset('/css/assets/back.jpg') }})">
    <div class="content center">
        <div class="row ">
            <div class="col s12 m4 l4 push-l7 push-m7  center">
                <div class="login  center">
                    <div class="logo">
                        <i class="fa fa-pencil fa-3x blue-text "></i>
                        <h5 class="light blue-text">CRUD</h5>
                    </div>
                    <div class="row campus">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="col s12 input-field">
                                <input type="text" id="email" name="email" value="{{ old('email') }}" >
                                <label for="email">Email</label>
                            </div>
                            @error('email')
                            <div class="col s12 input-field">
                                    <strong class="red-text">{{ $message }}</strong>
                            </div>
                            @enderror
                            

                            <div class="col s12 input-field">
                                <input type="password" name="password" >
                                <label for="password">Password</label>
                            </div>
                            @error('password')
                            <div class="col s12 input-field">
                                <strong class="red-text">{{ $message }}</strong>
                            </div>
                            @enderror


                            <div class="col s12 input-field">
                                <button type="submit" class="btn blue" >{{ __('Login') }}</button>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="col s12 input-field">
                                    <a  href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif

                            


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/css/assets/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/css/assets/materialize/js/materialize.js') }}"></script>
    <script>

    </script>
</body>
</html>