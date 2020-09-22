@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center">
    <div class="lg:w-1/4 xl:w-1/4 w-1/2 bg-gray-200 rounded-lg shadow-xl p-6">

        <h1 class="text-black text-3xl pt-10">Welcome back!</h1>
        <h2 class="text-black ">Enter your credentials below.</h2>

        <form method="POST" action="{{ route('login') }}" class="pt-10">
            @csrf

            <div class="relative">
                <label for="email" class="uppercase text-black-50 text-xs absolute p-3">Email</label>
                <input id="email" type="email" class="pt-10 w-full rounded p-3 text-black-50" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="LyusDev@email.com">
                @error('email')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="relative pt-3">
                <label for="password" class="uppercase text-black-50 text-xs absolute p-3">Password</label>


                <input id="password" type="password" class="pt-10 w-full rounded p-3 text-black-50" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="pt-2">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="pt-8">
                <button type="submit" class="w-full text-black-50 bg-teal-400 py-2 px-2 uppercase rounded font-bold text-left pl-3 hover:bg-teal-500">
                    Login
                </button>
            </div>

            <div class="flex justify-between text-black-50 pt-8 text-sm font-bold">
                <a href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
                <a href="{{ route('register') }}">
                    Register
                </a>
            </div>
        </form>
    </div>
</div>
@endsection