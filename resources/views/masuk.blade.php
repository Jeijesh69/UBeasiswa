@extends('index')

@section('title', 'Beranda')

@section('content')
    <div class="relative overflow-hidden bg-gradient-to-b from-[#ffff] to-[#E78D4D]">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10">
                <div class="mx-auto max-w-7xl lg:px-8 w-1/2 py-24">
                    <div class="bg-white rounded-2xl shadow-md p-8">
                        <h2 class="text-center text-3xl font-bold text-[#E78D4D] mb-8">Masuk</h2>

                        <form>

                        <!-- Email -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-black mb-2">
                            Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" placeholder="Masukkan email anda" class="w-full h-[50px] px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-300" />
                        </div>

                        <!-- Password -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-black mb-2">
                            Password <span class="text-red-500">*</span>
                            </label>
                            <input type="password" placeholder="Masukkan password anda" class="w-full h-[50px] px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-300" />
                        </div>

                        <div class="flex justify-end mb-6">
                            <a href="#" class=" underline text-[#E78D4D] font-bold">Lupa Password?</a>
                        </div>

                        <!-- Button -->

                        <button type="submit" class="w-full h-[50px] mb-6 bg-[#373f9e] hover:bg-[#2f3689] text-white font-semibold rounded-md shadow-md transition duration-300">
                            Daftar
                        </button>
                        <button type="submit" class="w-full h-[50px] bg-[#373f9e] hover:bg-[#2f3689] text-white font-semibold rounded-md shadow-md transition duration-300">
                            👤 Masuk dengan SSO Universitas Brawijaya
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
