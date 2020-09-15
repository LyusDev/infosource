@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-white">
    <div class="w-1/2 bg-white rounded-lg shadow-xl p-6">
        <h1 class="text-black text-3xl pt-10">Hi! Register your Account here.</h1>
        <h2 class="text-black ">Just fill up the forms below.</h2>

        <form method="POST" action="{{ route('register') }}" class="pt-10">
            @csrf

            <div class="relative">
                <label for="firstName" class="uppercase text-black-50 text-xs absolute p-3">First Name</label>
                <input id="firstName" type="text" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus placeholder="Juan">
                @error('firstName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <div class="relative pt-3">
                <label for="middleName" class="uppercase text-black-50 text-xs absolute p-3">Middle Name</label>
                <input id="middleName" type="text" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="middleName" value="{{ old('middleName') }}" required autocomplete="middleName" autofocus placeholder="Dela">
                <!-- @error('middleName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror -->

            </div>
            <div class="relative pt-3">
                <label for="lastName" class="uppercase text-black-50 text-xs absolute p-3">Last Name</label>
                <input id="lastName" type="text" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus placeholder="Cruz">
                @error('lastName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <div class="relative pt-3">
                <label for="birthDate" class="uppercase text-black-50 text-xs absolute p-3">Birth Date</label>
                <input id="birthDate" type="date" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="birthDate" value="{{ old('birthDate') }}" required autocomplete="birthDate" autofocus placeholder="Cruz">
                @error('birthDate')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="relative pt-3">
                <label for="province" class="uppercase text-black-50 text-xs absolute p-3">Province</label>
                <select id="province" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="province" value="{{ old('province') }}">
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                </select>
                @error('province')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="relative pt-3">
                <label for="city" class="uppercase text-black-50 text-xs absolute p-3">City</label>
                <select id="city" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="city" value="{{ old('city') }}">
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                </select>
                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="relative pt-3">
                <label for="barangay" class="uppercase text-black-50 text-xs absolute p-3">Barangay</label>
                <select id="barangay" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="barangay" value="{{ old('barangay') }}">
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                </select>
                @error('barangay')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="relative pt-3">
                <label for="streetAddress" class="uppercase text-black-50 text-xs absolute p-3">Street Address</label>
                <input id="streetAddress" type="text" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="streetAddress" value="{{ old('streetAddress') }}" required autocomplete="streetAddress" autofocus placeholder="Street Address">
                @error('streetAddress')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <div class="relative pt-3">
                <label for="email" class="uppercase text-black-50 text-xs absolute p-3">Email</label>
                <input id="email" type="email" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="LyusDev@email.com">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="relative pt-3">
                <label for="contactNumber" class="uppercase text-black-50 text-xs absolute p-3">Contact Number</label>
                <input id="contactNumber" type="text" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="contactNumber" value="{{ old('contactNumber') }}" required autocomplete="contactNumber" autofocus placeholder="Contact Number">
                @error('contactNumber')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="relative pt-3">
                <label for="password" class="uppercase text-black-50 text-xs absolute p-3">Password</label>
                <input id="password" type="password" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="password" required autocomplete="new-password" autofocus placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="relative pt-3">
                <label for="password-confirm" class="uppercase text-black-50 text-xs absolute p-3">Confirm Password</label>
                <input id="password-confirm" type="password" class="pt-10 w-full rounded p-3 text-black-50 bg-gray-200" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            </div>

            <div class="pt-8">
                <button type="submit" class="w-full text-black bg-teal-400 py-2 px-2 uppercase rounded font-bold text-left pl-3 hover:bg-teal-500">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
@endsection