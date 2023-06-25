@extends('master')

@section('title')
    Profil
@endsection

@section('content')
<div class="h-full w-full">
    <div class="text-black font-inter font-bold text-center text-2xl py-10">
        Ganti Password
    </div>
    <div class="mx-auto w-[550px] h-[310px] bg-gray-100 rounded-3xl shadow-lg py-5">
        <div class="h-10 px-10 py-1 my-5 flex justify-center items-center">
            <label for="password_lama" class="mr-auto">Password Lama</label>
            <input id="password_lama" type="password" placeholder="Masukkan password lama" class="border border-gray-300 px-9 h-9 rounded-lg hover:ring-1 hover:ring-blue-700 focus:ring-1 focus-ring-blue-700">
        </div>
        <div class="h-10 px-10 py-1 my-5 flex justify-center items-center ">
            <label for="password_lama" class="mr-auto">Password Baru</label>
            <input id="password_lama" type="password" placeholder="Masukkan password baru" class="border border-gray-300 px-9 h-9 rounded-lg hover:ring-1 hover:ring-blue-700 focus:ring-1 focus-ring-blue-700">
        </div>
        <div class="h-10 px-10 py-1 my-5 flex justify-center items-center">
            <label for="password_lama" class="mr-auto">Password Baru</label>
            <input id="password_lama" type="password" placeholder="Masukkan sekali lagi" class="border border-gray-300 px-9 h-9 rounded-lg focus:ring-1 focus:ring-blue-700">
        </div>
        <div class="bg-blue-300 rounded-lg my-10 h-[50px] mx-5">
            <button class=" w-full h-full text-white font-bold text-center hover:bg-blue-400 hover:rounded-lg hover:ring-1 hover:ring-blue-700">Submit</button>
        </div>
    </div>
</div>
@endsection
