@extends('index')

@section('title', 'Program')

@section('content')
    <div class="relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10">
                <div class="py-16 lg:overflow-hidden">
                    <div class="mx-auto max-w-7xl lg:px-8">
                        <div>
                            <h1 class="text-6xl font-bold text-[#e87c45] mb-10">
                                Meet Our <span class="text-[#313D92]">Mentors</span>
                            </h1>

                            <div class="grid grid-cols-3 gap-16 mx-10 text-white relative">
                                <div class="bg-[#313D92] p-6 rounded-3xl relative">
                                    <h3 class="text-xl font-bold">
                                        Kipli Kacang Panjang
                                    </h3>
                                    <p>
                                        Teknik Pertanian Universitas Brawijaya
                                    </p>
                                    <img src="/images/kipli-kacang-panjang.png" alt="Mentor" class="w-[300px]">

                                    <div class="absolute inset-0 bg-gradient-to-b from-[#313D9200] to-[#E78D4D] rounded-3xl h-1/2 bottom-0 top-1/2">
                                        <div class="h-full flex flex-col justify-end p-6 text-white">
                                            <h3 class=" mb-1">
                                                Awardee of
                                            </h3>
                                            <p class="text-xl font-bold">
                                                Beasiswa Unggulan
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-[#313D92] p-6 rounded-3xl relative">
                                    <h3 class="text-xl font-bold">
                                        Alukar Mulet
                                    </h3>
                                    <p>
                                        Akuntansi Universitas Brawijaya
                                    </p>
                                    <img src="/images/alukar-mulet.png" alt="Mentor" class="w-[300px]">

                                    <div class="absolute inset-0 bg-gradient-to-b from-[#313D9200] to-[#E78D4D] rounded-3xl h-1/2 bottom-0 top-1/2">
                                        <div class="h-full flex flex-col justify-end p-6 text-white">
                                            <h3 class=" mb-1">
                                                Awardee of
                                            </h3>
                                            <p class="text-xl font-bold">
                                                Beasiswa Djarum
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-[#313D92] p-6 rounded-3xl relative">
                                    <h3 class="text-xl font-bold">
                                        Skibidi Toilet
                                    </h3>
                                    <p>
                                        Sastra Belanda Universitas Gadjah Mada
                                    </p>
                                    <img src="/images/skibidi-toilet.png" alt="Mentor" class="w-[300px]">

                                    <div class="absolute inset-0 bg-gradient-to-b from-[#313D9200] to-[#E78D4D] rounded-3xl h-1/2 bottom-0 top-1/2">
                                        <div class="h-full flex flex-col justify-end p-6 text-white">
                                            <h3 class=" mb-1">
                                                Awardee of
                                            </h3>
                                            <p class="text-xl font-bold">
                                                Beasiswa BSI
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 mb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h2 class="text-[40px] font-bold text-[#e87c45] mb-2">
                    Semangat Untuk <span class="text-[#313D92]">Berbagi Pengetahuan</span> ?
                </h2>
                <p class="text-3xl">
                    Jangan ragu untuk menghubungi tim kami dan bergabung menjadi mentor untuk <strong>UBeasiswa</strong>!
                </p>
            </div>
            <div class="flex gap-4">
                <a href="" class="px-4 py-3 font-medium rounded-md text-white bg-[#313D92] hover:bg-ub-darkBlue">Whatsapp</a>
                <a href="" class="px-4 py-3 font-medium rounded-md text-white bg-[#313D92] hover:bg-ub-darkBlue">Instagram</a>
                <a href="" class="px-4 py-3 font-medium rounded-md text-white bg-[#313D92] hover:bg-ub-darkBlue">Twitter</a>
            </div>
        </div>
    </div>
@endsection
