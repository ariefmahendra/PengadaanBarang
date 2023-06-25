@extends('master')

@section('title')
    Daftar Pengguna
@endsection

@section('content')
    <div class="text-black font-inter font-bold text-center text-2xl py-5">
        Daftar Pengguna
    </div>
    <div class="flex justify-center mb-10">
        <div class="table-container shadow-xl shadow-black/20 rounded-xl bg-[#f6f6f6] ">
            <nav class="container justify-start p-5 min-w-full">
                <ul class="flex">
                    <li class="flex items-center">
                        <span class="p-1 mx-1 text-sm">show</span>
                        <div class="bg-blue-300 rounded-lg p-1 flex hover:bg-blue-500">
                            <button class="mx-1 text-sm">10</button>
                            <div>
                                <img src="img/panahAtas.png" alt="logoPanahAtas">
                                <img src="img/panahBawah.png" alt="logoPanahBatah">
                            </div>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <span class="p-1 ml-10 text-sm">Search</span>
                        <input id="search" type="text" placeholder=""
                            class="border border-gray-300 h-9 rounded-lg hover:ring-1 hover:ring-blue-700 focus:ring-1 focus-ring-blue-700 w-44 text-sm">
                    </li>
                </ul>
            </nav>
            <table class="min-w-full">
                <thead class="bg-[#F6F6F6] font-inter font-bold text-[20px] border-b-2 border-black">
                    <tr>
                        <th class="px-7">
                            <a href="#" class="flex items-center justify-center">
                                <span>No</span>
                                <div class="px-3">
                                    <img src="img/polygonAtas.png" alt="logoPanahAtas">
                                    <img src="img/polygonbawah.png" alt="logoPanahBatah">
                                </div>
                            </a>
                        </th>
                        <th class="px-7 ">
                            <a href="#" class="flex items-center justify-center">
                                <span>Nama</span>
                                <div class="px-3">
                                    <img src="img/polygonAtas.png" alt="logoPanahAtas">
                                    <img src="img/polygonbawah.png" alt="logoPanahBatah">
                                </div>                       
                            </a>
                        </th>
                        <th class="px-7 ">
                            <a href="#" class="flex items-center justify-center">
                                <span>Role</span>
                                <div class="px-3">
                                    <img src="img/polygonAtas.png" alt="logoPanahAtas">
                                    <img src="img/polygonbawah.png" alt="logoPanahBatah">
                                </div>
                            </a>
                        </th>
                        <th class="px-7 ">Aksi</th>
                    </tr>
                </thead>
                <tbody class="font-inter text-[16px]">
                    <tr class="border-b shadow-xl border-[#535353] bg-[#E1E1E1]">
                        <td class="text-center">1</td>
                        <td class="text-left">User 1</td>
                        <td class="text-center">Kontrak</td>
                        <td class="flex  justify-center m-1">
                            <div class="bg-blue-300 rounded-lg p-1 mr-3 hover:bg-blue-500">
                                <button>Role</button>
                            </div>
                            <div class="bg-red-500 rounded-lg p-1 hover:bg-red-700">
                                <button>Reset Password</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b shadow-xl border-[#535353] bg-[#F6F6F6]">
                        <td class="text-center">2</td>
                        <td class="text
                        -">User 2</td>
                        <td class="text-center">Kontrak</td>
                        <td class="flex justify-center m-1">
                            <div class="bg-blue-300 rounded-lg p-1 mr-3 hover:bg-blue-500">
                                <button>Role</button>
                            </div>
                            <div class="bg-red-500 rounded-lg p-1 hover:bg-red-700">
                                <button>Reset Password</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b shadow-lg border-[#535353] bg-[#E1E1E1]">
                        <td class="text-center">3</td>
                        <td class="text
                        -">User 3</td>
                        <td class="text-center">Kontrak</td>
                        <td class="flex justify-center m-1">
                            <div class="bg-blue-300 rounded-lg p-1 mr-3 hover:bg-blue-500">
                                <button>Role</button>
                            </div>
                            <div class="bg-red-500 rounded-lg p-1 hover:bg-red-700">
                                <button>Reset Password</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b shadow-lg border-[#535353] bg-[#F6F6F6]">
                        <td class="text-center">4</td>
                        <td class="text
                        -">User 4</td>
                        <td class="text-center">Kontrak</td>
                        <td class="flex justify-center m-1">
                            <div class="bg-blue-300 rounded-lg p-1 mr-3 hover:bg-blue-500">
                                <button>Role</button>
                            </div>
                            <div class="bg-red-500 rounded-lg p-1 hover:bg-red-700">
                                <button>Reset Password</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b shadow-lg border-[#535353] bg-[#E1E1E1]">
                        <td class="text-center">5</td>
                        <td class="text
                        -">User 5</td>
                        <td class="text-center">Kontrak</td>
                        <td class="flex justify-center m-1">
                            <div class="bg-blue-300 rounded-lg p-1 mr-3 hover:bg-blue-500">
                                <button>Role</button>
                            </div>
                            <div class="bg-red-500 rounded-lg p-1 hover:bg-red-700">
                                <button>Reset Password</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b shadow-lg border-[#535353] bg-[#F6F6F6]">
                        <td class="text-center">6</td>
                        <td class="text
                        -">User 6</td>
                        <td class="text-center">Kontrak</td>
                        <td class="flex justify-center m-1">
                            <div class="bg-blue-300 rounded-lg p-1 mr-3 hover:bg-blue-500">
                                <button>Role</button>
                            </div>
                            <div class="bg-red-500 rounded-lg p-1 hover:bg-red-700">
                                <button>Reset Password</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b shadow-lg border-[#535353] bg-[#E1E1E1]">
                        <td class="text-center">7</td>
                        <td class="text
                        -">User 7</td>
                        <td class="text-center">Kontrak</td>
                        <td class="flex justify-center m-1">
                            <div class="bg-blue-300 rounded-lg p-1 mr-3 hover:bg-blue-500">
                                <button>Role</button>
                            </div>
                            <div class="bg-red-500 rounded-lg p-1 hover:bg-red-700">
                                <button>Reset Password</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b shadow-lg border-[#535353] bg-[#F6F6F6]">
                        <td class="text-center">8</td>
                        <td class="text
                        -">User 8</td>
                        <td class="text-center">Kontrak</td>
                        <td class="flex justify-center m-1">
                            <div class="bg-blue-300 rounded-lg p-1 mr-3 hover:bg-blue-500">
                                <button>Role</button>
                            </div>
                            <div class="bg-red-500 rounded-lg p-1 hover:bg-red-700">
                                <button>Reset Password</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b shadow-lg border-[#535353] bg-[#E1E1E1]">
                        <td class="text-center">9</td>
                        <td class="text
                        -">User 9</td>
                        <td class="text-center">Kontrak</td>
                        <td class="flex justify-center m-1">
                            <div class="bg-blue-300 rounded-lg p-1 mr-3 hover:bg-blue-500">
                                <button>Role</button>
                            </div>
                            <div class="bg-red-500 rounded-lg p-1 hover:bg-red-700">
                                <button>Reset Password</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="border-b shadow-lg border-[#535353] bg-[#F6F6F6]">
                        <td class="text-center">10</td>
                        <td class="text
                        -">User 10</td>
                        <td class="text-center">Kontrak</td>
                        <td class="flex justify-center m-1">
                            <div class="bg-blue-300 rounded-lg p-1 mr-3 hover:bg-blue-500">
                                <button>Role</button>
                            </div>
                            <div class="bg-red-500 rounded-lg p-1 hover:bg-red-700">
                                <button>Reset Password</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav class="flex min-w-full">
                <span class="justify-start pt-1 m-5 text-xs ">
                    Showing 1 to 10 of 122 entries
                </span>
                <div class="flex-grow"></div>
                <ul class="flex m-5 justify-end">
                    <li>
                        <a
                            class="bg-blue-300 relative block rounded mx-1.5 px-2 py-1.5 text-xs text-black transition-all duration-300 hover:bg-blue-500" href="#!">Previous</a>
                    </li>
                    <li>
                        <a
                            class="relative block rounded bg-blue-300 mx-1 px-1.5 py-1.5 text-xs text-black transition-all duration-300 hover:bg-blue-500"href="#!">1</a>
                    </li>
                    <li>
                        <a class="relative block rounded bg-blue-300 mx-1 px-1.5 py-1.5 text-xs font-medium text-black transition-all duration-300 hover:bg-blue-500"
                            href="#!">2</a>
                    </li>
                    <li>
                        <a class="relative block rounded bg-blue-300 mx-1 px-1.5 py-1.5 text-xs text-black transition-all duration-300 hover:bg-blue-500"
                            href="#!">3</a>
                    </li>
                    <li>
                        <a class="relative block rounded bg-blue-300 mx-1 px-1.5 py-1.5 text-xs text-black transition-all duration-300 hover:bg-blue-500 "
                            href="#!">...</a>
                    </li>
                    <li>
                        <a class="relative block rounded bg-blue-300 mx-1 px-1.5 py-1.5 text-xs text-black transition-all duration-300 hover:bg-blue-500 "
                            href="#!">16</a>
                    </li>
                    <li>
                        <a class="relative block rounded bg-blue-300 mx-1 px-1.5 py-1.5 text-xs text-black transition-all duration-300 hover:bg-blue-500 "
                            href="#!">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
