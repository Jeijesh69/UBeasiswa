<nav class="bg-white shadow-sm z-50 sticky top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <div class="flex-shrink-0 flex items-center">
          <span class="text-xl font-bold">
            <span class="text-[#313D92]">UB</span><span class="text-[#e87c45]">easiswa</span>
          </span>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-center space-x-4">
            <a href="/" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-[#313D92]">
              Home
            </a>
            <a href="/program" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-[#313D92]">
              Program
            </a>
            <a href="/mentor" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-[#313D92]">
              Mentor
            </a>
            <a href="/beasiswa" class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-[#313D92]">
              Beasiswa
            </a>
            <div class="flex items-center space-x-2">
              <a href="/daftar" class="bg-[#313D92] border-2 border-[#313D92] px-4 py-1 rounded-lg text-white hover:bg-ub-darkBlue">
                Daftar
              </a>
              <a href="/masuk" variant="outline" class="border-2 border-[#313D92] px-4 py-1 rounded-lg text-[#313D92] hover:bg-[#313D92] hover:text-white">
                Masuk
              </a>
            </div>
          </div>
        </div>
        <div class="md:hidden">
          <button
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100"
          >
            <Menu size={24} />
          </button>
        </div>
      </div>
    </div>

    {{-- {/* Mobile menu */} --}}
    {{-- {isMenuOpen && (
      <div class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-[#313D92]">
            Home
          </a>
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-[#313D92]">
            Program
          </a>
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-[#313D92]">
            Mentor
          </a>
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-[#313D92]">
            Beasiswa
          </a>
          <div class="flex flex-col space-y-2 mt-3">
            <Button class="bg-[#313D92] text-white hover:bg-ub-darkBlue">
              Daftar
            </Button>
            <Button variant="outline" class="border-[#313D92] text-[#313D92] hover:bg-[#313D92] hover:text-white">
              Masuk
            </Button>
          </div>
        </div>
      </div>
    )} --}}
  </nav>
