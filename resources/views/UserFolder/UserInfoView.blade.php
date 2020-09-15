@extends('layouts.app')

@section('content')
<div class="mx-auto h-full grid justify-center">
    <div class="bg-white rounded-lg shadow-xl p-6">
        <h1 class="text-black text-3xl font-bold">Hi! {{$userInfo->firstName}}</h1>

        <div class="grid grid-cols-1 xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-2 gap-4">
            <div class="grid justify-center">

                <div class="rounded-lg shadow-lg p-2">{!! $qrcode !!}</div>
                <div class="text-2xl">Download QR Code here:</div>
                <button class="bg-teal-400 text-black text-2xl rounded-lg font-bold shadow-xl hover:bg-teal-500">Download</button>
            </div>
            <div>
                <div class="font-bold uppercase text-2xl">user's Information</div>
                <table class="table-fixed">
                    <thead>

                    </thead>
                    <tbody>
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">First Name:</td>
                            <td class="border px-4 py-2">{{$userInfo->firstName}}</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Middle Name:</td>
                            <td class="border px-4 py-2">{{$userInfo->middleName}}</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">Last Name:</td>
                            <td class="border px-4 py-2">{{$userInfo->lastName}}</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Birth Date:</td>
                            <td class="border px-4 py-2">{{$userInfo->birthDate}}</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">Contact Number:</td>
                            <td class="border px-4 py-2">{{$userInfo->contactNumber}}</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Email:</td>
                            <td class="border px-4 py-2">{{$userInfo->email}}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="font-bold uppercase text-2xl">user's Address</div>
                <table class="table-fixed">
                    <thead>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">Province:</td>
                            <td class="border px-4 py-2">{{$userInfo->province}}</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">City:</td>
                            <td class="border px-4 py-2">{{$userInfo->city}}</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border px-4 py-2">Barangay:</td>
                            <td class="border px-4 py-2">{{$userInfo->barangay}}</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Street Address:</td>
                            <td class="border px-4 py-2">{{$userInfo->streetAddress}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
@endsection