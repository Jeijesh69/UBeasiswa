@extends('index')

@section('title', 'Beranda')

@section('content')
    <div class="relative overflow-hidden bg-gradient-to-b from-[#ffff] to-[#E78D4D]">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10">
                <div class="mx-auto max-w-7xl lg:px-8 w-1/2 py-24">
                    <div class="bg-white rounded-2xl shadow-md p-8">
                        <h2 class="text-center text-3xl font-bold text-[#d38445] mb-8">Daftar</h2>

                        <form>
                        <!-- Username -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-black mb-2">
                            Username <span class="text-red-500">*</span>
                            </label>
                            <input type="text" placeholder="Masukkan username anda" class="w-full h-[50px] px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-300" />
                        </div>

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

                        <!-- Button -->
                        <button type="submit" class="w-full h-[50px] bg-[#373f9e] hover:bg-[#2f3689] text-white font-semibold rounded-md shadow-md transition duration-300">
                            Daftar
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
