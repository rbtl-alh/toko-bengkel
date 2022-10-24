<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title pb-2" style="font-size: 3rem; font-weight: 700">Sign In</h1>
                        <h3 class="card-title" style="font-size: 2rem; font-weight: 600">Welcome to Toko Bengkel!</h3>
                        <x-guest-layout>
                            {{-- <x-auth-card> --}}
                                {{-- <x-slot name="logo">
                                    <a href="/">
                                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                                    </a>
                                </x-slot> --}}
                    
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                    
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                    
                                    <!-- Email Address -->
                                    <div class="form-group py-3">
                                        <x-label for="email" :value="__('Email')" style="color: white"/>
                    
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>
                    
                                    <!-- Password -->
                                    <div class="form-group pb-1 mt-4">
                                        <x-label for="password" :value="__('Password')" style="color: white"/>
                    
                                        <x-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />
                                    </div>
                    
                                    <!-- Remember Me -->
                                    {{-- <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div> --}}

                                    <div class="signup pb-3">
                                        <div>Belum punya akun? <a href="{{ url('/register') }}" style="color: white">Daftar disini</a></div>
                                    </div>
                                    
                                    
                                    <div class="flex items-center  justify-end mt-4">
                                        {{-- @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif --}}
                    
                                        <x-button class="ml-3">
                                            {{ __('Log in') }}
                                        </x-button>
                                    </div>
                                </form>
                            {{-- </x-auth-card> --}}
                        </x-guest-layout>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
</body>
</html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title pb-2">Sign In</h1>
                        <h3 class="card-title">Welcome to Toko Bengkel!</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group py-3">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group pb-1">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="signup pb-3">
                                <div>Belum punya akun? <a href="{{ url('/register') }}">Daftar disini</a></div>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <div class="col-md-12 text-center py-3">
                                <button type="submit" class="btn btn-light px-4">Submit</button>
                            </div>
                        </form>
                    </div>
                  </div>
            
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>

</body>
</html> --}}