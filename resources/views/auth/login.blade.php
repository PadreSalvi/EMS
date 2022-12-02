
<link href="LoginForm/style.css" rel="stylesheet" />

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"></script>
    <link href="LoginForm/style.css" rel="stylesheet" />
    <title>Management System</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="{{ route('login') }}" method="POST" class="sign-in-form">
                    @csrf

                    <h2 class="title">Employee Management</h2>
                    <h2 class="title">System</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>

                        <input type="email" name="email" id="emailaddress" placeholder="username" 
                        class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        />
                    </div>
                  
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" id="password"
                        input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" />
                    </div>
                    @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    
                    <button type="submit" value="Login" class="btn solid">Login</button>
                   
                    {{-- <input type="submit" value="Login" class="btn solid" /> --}}
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Mission</h3>
                    <p>To provide a comprehensive education that enhances the 
                        lives of QCU Student for nation-building and as world citizen</p>
                    <h3>Vision</h3>
                    <p>To be recognized as the number 1 local university of employable graduates </p>
                   

                </div>
                <img src="LoginForm/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">

                <img src="LoginForm/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="LoginForm/app.js"></script>
</body>
</html>


{{-- @extends('layouts.frontend')

@section('content')

<div class="w-full max-w-xs mx-auto">
    <form method="POST" action="{{ route('login') }}" class="bg-white shadow rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="emailaddress">
                Email Address
            </label>
            <input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="emailaddress" placeholder="email@example.com">
            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" id="password" placeholder="******************">
            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-500 font-bold">
                <input class="mr-2 leading-tight" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="text-sm">
                    Remember Me
                </span>
            </label>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Sign In
            </button>
        </div>
    </form>
</div>

@endsection --}}
