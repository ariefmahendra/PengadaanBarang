@extends('master')

@section('title')
    Resume
@endsection

@section('content')
    <div class="grid grid-cols-2 gap-4 text-center m-5 ">
        <div class="mt-5">
            <div class="font-inter text-2xl">Daftar Paket Pengadaan Langsung</div>
            <div class="grid grid-cols-2 gap-1 mt-5 bg-[#F6F6F6] shadow-xl shadow-black/20 rounded-xl items-center">
                <div>
                    <div class="m-1">
                        <canvas id="resume_1"></canvas>
                    </div>
                    <div class="container m-1">
                        <div class="text-left mx-5 flex items-center">
                            <div class="w-5 h-5 rounded-full bg-[#990099] mr-2"></div>
                            <div>RAB</div>
                        </div>
                        <div class="text-left mx-5 flex items-center">
                            <div class="w-5 h-5 rounded-full bg-[#109618] mr-2"></div>
                            <div>HPS</div>
                        </div>
                        <div class="text-left mx-5 flex items-center">
                            <div class="w-5 h-5 rounded-full bg-[#FF9900] mr-2"></div>
                            <div>Proses</div>
                        </div>
                        <div class="text-left mx-5 flex items-center">
                            <div class="w-5 h-5 rounded-full bg-[#DC3912] mr-2"></div>
                            <div>Kontrak</div>
                        </div>
                        <div class="text-left mx-5 flex items-center">
                            <div class="w-5 h-5 rounded-full bg-[#3366CC] mr-2"></div>
                            <div>Dibayar</div>
                        </div>
                    </div>
                </div>
                <div>
                    <table class="h-96 w-full">
                        <thead class="bg-[#F6F6F6] font-inter font-bold text-[20px] border-b-2 border-black">
                            <tr>
                                <th class="px-7">Jenis</th>
                                <th class="px-7">Nilai</th>
                            </tr>
                        </thead>
                        <tbody class="font-inter text-[16px]">
                            <tr class="border-b shadow-xl border-[#535353] bg-[#E1E1E1]">
                                <td>RAB</td>
                                <td>Rp. 1.654.191.878</td>
                            </tr>
                            <tr class="border-b shadow-xl border-[#535353] bg-[#F6F6F6]">
                                <td>HPS</td>
                                <td>Rp. 2.351.457.194</td>
                            </tr>
                            <tr class="border-b shadow-xl border-[#535353] bg-[#E1E1E1]">
                                <td>Proses</td>
                                <td>Rp. 1.048.866.010</td>
                            </tr>
                            <tr class="border-b shadow-xl border-[#535353] bg-[#F6F6F6]">
                                <td>Kontrak</td>
                                <td>Rp. 1.573.418.687</td>
                            </tr>
                            <tr class="border-b  border-[#535353] bg-[#E1E1E1]">
                                <td>Dibayar</td>
                                <td>Rp. 1.688.225.338</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="font-inter text-2xl">Daftar Paket Pengadaan Langsung</div>
            <div class="grid grid-cols-2 gap-1 mt-5 bg-[#F6F6F6] shadow-xl shadow-black/20 rounded-xl items-center">
                <div>
                    <div class="m-1">
                        <canvas id="resume_2"></canvas>
                    </div>
                    <div class="container m-1">
                        <div class="text-left mx-5 flex items-center">
                            <div class="w-5 h-5 rounded-full bg-[#990099] mr-2"></div>
                            <div>RAB</div>
                        </div>
                        <div class="text-left mx-5 flex items-center">
                            <div class="w-5 h-5 rounded-full bg-[#109618] mr-2"></div>
                            <div>HPS</div>
                        </div>
                        <div class="text-left mx-5 flex items-center">
                            <div class="w-5 h-5 rounded-full bg-[#FF9900] mr-2"></div>
                            <div>Proses</div>
                        </div>
                        <div class="text-left mx-5 flex items-center">
                            <div class="w-5 h-5 rounded-full bg-[#DC3912] mr-2"></div>
                            <div>Kontrak</div>
                        </div>
                        <div class="text-left mx-5 flex items-center">
                            <div class="w-5 h-5 rounded-full bg-[#3366CC] mr-2"></div>
                            <div>Dibayar</div>
                        </div>
                    </div>
                </div>
                <div>
                    <table class="h-96 w-full">
                        <thead class="bg-[#F6F6F6] font-inter font-bold text-[20px] border-b-2 border-black">
                            <tr>
                                <th class="px-7">Jenis</th>
                                <th class="px-7">Nilai</th>
                            </tr>
                        </thead>
                        <tbody class="font-inter text-[16px]">
                            <tr class="border-b shadow-xl border-[#535353] bg-[#E1E1E1]">
                                <td>RAB</td>
                                <td>Rp. 1.654.191.878</td>
                            </tr>
                            <tr class="border-b shadow-xl border-[#535353] bg-[#F6F6F6]">
                                <td>HPS</td>
                                <td>Rp. 2.351.457.194</td>
                            </tr>
                            <tr class="border-b shadow-xl border-[#535353] bg-[#E1E1E1]">
                                <td>Proses</td>
                                <td>Rp. 1.048.866.010</td>
                            </tr>
                            <tr class="border-b shadow-xl border-[#535353] bg-[#F6F6F6]">
                                <td>Kontrak</td>
                                <td>Rp. 1.573.418.687</td>
                            </tr>
                            <tr class="border-b  border-[#535353] bg-[#E1E1E1]">
                                <td>Dibayar</td>
                                <td>Rp. 1.688.225.338</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
