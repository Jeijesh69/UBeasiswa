@extends('index')

@section('title', 'Program')

@section('content')
    <div class="relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10">
                <div class=" py-40 lg:overflow-hidden">
                    <div class="mx-auto max-w-7xl lg:px-8">
                        <div class="text-center">
                            <h1 class="text-7xl font-bold text-[#313D92] mb-2">
                                Scolarship Fair
                            </h1>
                            <p class="text-xl w-3/4 mx-auto">
                                Lorem ipsum dolor sit amet. Neque porro quisquam est qui dolorem ipsum quia dolor.
                                Lorem ipsum dolor sit amet. Neque porro quisquam est qui.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <img src="/images/Home2.png" alt="home2" class="w-[300px] absolute top-0 left-0 rotate-180">
        <img src="/images/Home2.png" alt="home2" class="w-[300px] absolute bottom-0 right-0"> --}}
    </div>

    <div class="pb-16">
        <div class=" bg-[#E78D4D] py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 relative">
                    <div class="">
                        <h1 class="text-5xl font-bold text-[#313D92] mb-6">
                            Apasih Benefitnya?
                        </h1>
                        <div class="flex flex-col gap-4">
                            <p class="bg-white p-2 rounded-2xl text-2xl">
                                Mendapatkan <strong>Tips & Trik</strong> untuk mendapatkan beasiswa.
                            </p>
                            <p class=" border-5 border-white p-2 rounded-2xl text-2xl text-white">
                                <strong>Essay Review</strong> bersama mentor yang merupakan <strong>awardee beasiswa</strong> tahun lalu.
                            </p>
                            <p class=" border-5 border-white p-2 rounded-2xl text-2xl text-white">
                                Berkonsultasi <strong>tanpa dipungut biaya</strong> mengenai beasiswa.
                            </p>
                        </div>
                    </div>
                    <div class="relative">
                        <img
                            class=" w-full object-cover absolute top-1/2 transform -translate-y-1/2"
                            src="/images/program.png"
                            alt="Scholarship Fair"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-16 mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-12">
            <h3 class="text-5xl font-bold text-[#E78D4D] mt-2">Intip Keseruannya!</h3>
          </div>

          <div class="max-w-6xl mx-auto relative">
            <div class="overflow-hidden bg-[#313D92] p-6">
              <div id="carouselTrack" class="carousel-track">
                <!-- Slides will be inserted here -->
              </div>
            </div>

            <!-- Navigation Buttons -->
            <button id="prevBtn" class="absolute top-1/2 -left-6 -translate-y-1/2 bg-white p-2 rounded-full h-10 w-10 cursor-pointer shadow-lg hover:bg-gray-100 z-10" aria-label="Previous slide">
              &#8592;
            </button>
            <button id="nextBtn" class="absolute top-1/2 -right-6 -translate-y-1/2 bg-white p-2 rounded-full h-10 w-10 cursor-pointer shadow-lg hover:bg-gray-100 z-10" aria-label="Next slide">
              &#8594;
            </button>
          </div>
        </div>
      </div>

      <script>
        const programData = [
          {
            title: "Webinar Beasiswa Unggulan",
            // category: "Program Unggulan",
            description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec ornare metus.",
            image: "https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&h=300&q=80"
          },
          {
            title: "Scholarship Fair",
            // category: "Program Populer",
            description: "Curabitur consectetur, est sit amet euismod posuere, magna arcu imperdiet elit.",
            image: "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=400&h=300&q=80"
          },
          {
            title: "Intip Keseruannya!",
            // category: "Program Terbaru",
            description: "Cras ultrices, quam non suscipit accumsan, arcu orci tristique neque, et luctus leo elit id neque.",
            image: "https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=400&h=300&q=80"
          }
        ];

        const carouselTrack = document.getElementById('carouselTrack');

        programData.forEach(program => {
          const slide = document.createElement('div');
          slide.className = 'carousel-slide';
          slide.innerHTML = `
            <div class=" overflow-hidden mx-6">
              <div class="md:flex">
                <div class="md:flex-shrink-0 order-2 md:order-1">
                  <img class="h-64 w-full object-cover md:w-96 rounded-2xl" src="${program.image}" alt="${program.title}" />
                </div>
                <div class="p-8 md:w-2/3 order-1 md:order-2 flex flex-col justify-center">
                  <div class="uppercase tracking-wide text-sm text-white font-semibold hidden">${program.category}</div>
                  <h2 class="mt-1 text-3xl font-bold text-white">${program.title}</h2>
                  <p class="mt-4 text-gray-200">${program.description}</p>
                  <div class="mt-6 hidden">
                    <button class="flex items-center px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-400">
                      Lihat lebih lengkap
                      <span class="ml-2">&#8594;</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          `;
          carouselTrack.appendChild(slide);
        });

        let currentSlide = 0;
        const totalSlides = programData.length;

        function updateSlidePosition() {
          carouselTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        document.getElementById('nextBtn').addEventListener('click', () => {
          currentSlide = (currentSlide + 1) % totalSlides;
          updateSlidePosition();
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
          currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
          updateSlidePosition();
        });
      </script>
@endsection
