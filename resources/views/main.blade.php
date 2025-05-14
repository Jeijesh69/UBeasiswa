@extends('index')

@section('title', 'Beranda')

@section('content')
    <div class="relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10">
                <div class="py-16 lg:overflow-hidden">
                    <div class="mx-auto max-w-7xl lg:px-8">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                            <div class="mx-auto max-w-md sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                                <div class="lg:py-24">
                                    <h1 class=" tracking-tight font-bold text-gray-900">
                                        <span class="block text-[#313D92] text-4xl font-normal mb-2">Discover <span class="font-semibold">the path</span> to your dream</span>
                                        <span class="block text-[#e87c45] text-6xl">Scholarship</span>
                                    </h1>
                                    <div class="mt-8">
                                        <Button class=" px-4 py-3 font-medium rounded-md text-white bg-[#313D92] hover:bg-ub-darkBlue">
                                            Lihat Selengkapnya
                                        </Button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-12 lg:relative lg:mt-0">
                                <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                                    <img
                                        class="h-[70vh]"
                                        src="/images/home1.png"
                                        alt="UBeasiswa Mascot"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="/images/Home2.png" alt="home2" class="w-[300px] absolute bottom-0 left-0">
    </div>

    <div class="pb-16">
        <div class="text-center bg-[#313D92] py-6">
          <h2 class="text-5xl font-bold text-white flex items-center justify-center">
            Kenapa harus UBeasiswa?
            <span class="ml-2">🤔</span>
          </h2>
        </div>
        <div class=" bg-[#E78D4D] py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-1 md:grid-cols-3">
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-1">
                    <div class="bg-green-500 text-white text-center py-3 rounded-t-lg">
                        <h3 class="text-lg font-medium">Kelas Eksklusif</h3>
                    </div>
                    <div class="p-6 text-center">
                        <p class="text-gray-700">
                        Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-1">
                    <div class="bg-cyan-500 text-white text-center py-3 rounded-t-lg">
                        <h3 class="text-lg font-medium">Beasiswa Terpersonalisasi</h3>
                    </div>
                    <div class="p-6 text-center">
                        <p class="text-gray-700">
                        Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <div class="p-1">
                    <div class="bg-purple-500 text-white text-center py-3 rounded-t-lg">
                        <h3 class="text-lg font-medium">Tutor Berpengalaman</h3>
                    </div>
                    <div class="p-6 text-center">
                        <p class="text-gray-700">
                        Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-5xl font-bold text-[#313D92]">Program Kami</h2>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="rounded-xl overflow-hidden shadow-lg mb-8">
                        <div class="relative">
                            <img
                                class="h-[300px] w-full object-cover"
                                src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=300&q=80"
                                alt="Scholarship Fair"
                                />
                            <div class="absolute inset-0 bg-gradient-to-b from-[#313D9200] to-[#313D92]">
                                <div class="h-full flex flex-col justify-end p-6 text-white">
                                    <h3 class="text-4xl font-bold mb-2">
                                        Scholarship Fair
                                    </h3>
                                    <p class="text-xl">
                                        Lorem ipsum dolor sit amet. Neque porro quisquam est qui dolorem ipsum quia dolor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="py-4 px-6 bg-[#e87c45] flex items-center justify-end">
                            <a href="/program" class="text-xl font-bold hover:text-[#313D92] cursor-pointer">
                                Lihat lebih lengkap
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-bold">
                    Maju Bersama <span class="text-[#313D92]">UB</span><span class="text-[#e87c45]">easiswa</span>!
                </h2>
            </div>
            <div class="relative">

                <div class="mb-16 flex justify-center">
                    <img
                        src="/images/indonesia-map.png"
                        alt="Indonesia Map"
                        class="w-full"
                    />
                </div>

                <div class=" bg-[#313D92E5] rounded-lg shadow-lg py-8 px-10 absolute -bottom-[10%] left-1/2 transform -translate-x-1/2">
                    <div class="flex gap-16 text-center">
                        <div>
                            <p class="text-5xl font-bold text-white">3000+</p>
                            <p class="mt-2 text-2xl text-[#e87c45]">Peserta</p>
                        </div>
                        <div>
                            <p class="text-5xl font-bold text-white">90+</p>
                            <p class="mt-2 text-2xl text-[#e87c45]">Universitas</p>
                        </div>
                        <div>
                            <p class="text-5xl font-bold text-white">55+</p>
                            <p class="mt-2 text-2xl text-[#e87c45]">Kota/Kabupaten</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
