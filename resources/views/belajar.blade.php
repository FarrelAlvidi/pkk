<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>


  <section class="max-w-7xl mx-auto m-6">

    <div
      class=" flex flex-col-reverse lg:flex-row items-center justify-center max-w-screen-xl gap-y-5 px-4 py-5 mx-auto lg:gap-8 lg:py-16 lg:grid-cols-12 mb-12">
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1
          class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
          <span class="text-purple-600">Udah Mulai</span> <span class="text-blue-600">Tertarik</span> <span
            class="text-purple-600">sama </span> <span class="text-blue-600">Course Kami?</span>
        </h1>
        <p class="max-w-2xl mb-6  text-slate-700 lg:mb-8 text-base lg:text-lg dark:text-gray-400">Tekan
          selengkapnya dong biar ga penasaran sama paket belajarnya!</p>
        <a href="#paket"
          class="inline-flex items-center justify-center px-5 py-3 mr-3 text-sm lg:text-base font-medium text-center text-white rounded-lg hover:bg-blue-800  bg-blue-600 transition-all duration-200 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
          Lihat Selengkapnya
          <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>

      </div>
      <div class=" lg:mt-0 lg:col-span-5 lg:flex">
        <img src="img/bg2.png" class="rounded-2xl w-[25rem] animate-wiggle" alt="mockup">
      </div>
    </div>

    <div class="flex flex-col space-y-10">
      <div
        class="flex flex-col lg:flex-row items-center justify-center gap-8 p-5 border shadow rounded-lg m-6 lg:m-0"
        id="paket">
        <img src="img/html.png" alt="" class="h-36 border-1 border border-gray-300 rounded-2xl shadow-xl">
        <div class="text-center lg:text-left p-5">
          <h4 class="text-2xl font-semibold ">HTML Dasar: Hypertext Markup Language</h4>
          <p class="mt-5 text-lg">Untuk kamu yang belum tahu gimana caranya masukin sesuatu ke website. Kamu nanti bakal
            belajar gimana caranya buat teks tapi bisa masuk kedalam website, bahkan tabel juga! Ini adalah langkah awal
            yang penting banget sebelum kamu mau buat banyak hal.</p>
          <a href="https://wa.me/+6289534549006?text=Halo+kak%2C+Saya+ingin+Memesan+Paket+HTML+Dasar"
            class="inline-flex items-center justify-center px-5 py-3 mr-3 mt-5 text-base font-medium text-center text-white rounded-md hover:bg-sky-700 bg-sky-600 transition-all duration-200 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
            Pesan Paket
            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>

      <div
        class="flex flex-col lg:flex-row items-center justify-center gap-8 p-5 border shadow rounded-lg m-6 lg:m-0">
        <img src="img/htmlcss.png" alt="" class="h-36 border-1 border border-gray-300 rounded-xl shadow-xl">
        <div class="text-center lg:text-left p-5">
          <h4 class="text-2xl font-semibold">HTML & CSS : Web Design</h4>
          <p class="mt-5 text-lg">Untuk kamu yang mulai tahu gimana caranya masukin sesuatu ke website. Tapi masih belum
            keren karena polos? Cocok banget karena kamu nanti bakal belajar gimana caranya memberi styling kepada
            setiap
            komponen yang udah kamu buat lewat html dasar.</p>
          <a href="https://wa.me/+6289534549006?text=Halo+kak%2C+Saya+ingin+Memesan+Paket+HTML+dan+CSS"
            class="inline-flex items-center justify-center px-5 py-3 mr-3 mt-5 text-base font-medium text-center text-white rounded-md hover:bg-sky-700 bg-sky-600 transition-all duration-200 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
            Pesan Paket
            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>

      <div
        class="flex flex-col lg:flex-row items-center justify-center gap-8 p-5 border shadow rounded-lg m-6 lg:m-0">
        <img src="img/bootstrap.png" alt="" class="h-36 border-1 border border-gray-300 rounded-xl shadow-xl">
        <div class="text-center lg:text-left p-5">
          <h4 class="text-2xl font-semibold">Bootstrap</h4>
          <p class="mt-5 text-lg">Untuk kamu yang udah tau gimana caranya memberi styling dan juga penggunaan html
            dasar,
            bootstrap cocok buat kamu nih karena penggunaan css tidak sepenuhnya digunakan secara manual menggunakan
            bootstrap, styling cepat dan juga praktis dengan belajar bootstrap!</p>
          <a href="https://wa.me/+6289534549006?text=Halo+kak%2C+Saya+ingin+Memesan+Paket+Bootstrap"
            class="inline-flex items-center justify-center px-5 py-3 mr-3 mt-5 text-base font-medium text-center text-white rounded-md hover:bg-sky-700 bg-sky-600 transition-all duration-200 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
            Pesan Paket
            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>

      <div
        class="flex flex-col lg:flex-row items-center justify-center gap-8  p-5 border shadow rounded-lg m-6 lg:m-0">
        <img src="img/tw.png" alt="" class="h-36 border-1 border border-gray-300 rounded-xl shadow-xl">
        <div class="text-center lg:text-left p-5">
          <h4 class="text-2xl font-semibold">Tailwind CSS</h4>
          <p class="mt-5 text-lg">Untuk kamu yang udah paham dasar-dasar HTML dan pengen bawa website kamu ke level yang
            lebih keren, kursus ini bakal bantu kamu banget! untuk memberikan desain yang kece tanpa harus nulis banyak
            kode. Siap-siap bikin website yang bukan cuma berfungsi, tapi juga stylish!</p>
          <a href="https://wa.me/+6289534549006?text=Halo+kak%2C+Saya+ingin+Memesan+Paket+Tailwind"
            class="inline-flex items-center justify-center px-5 py-3 mr-3 mt-5 text-base font-medium text-center text-white rounded-md hover:bg-sky-700 bg-sky-600 transition-all duration-200 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
            Pesan Paket
            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>


    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 mt-20 mb-16">
      <!-- Kolom untuk gambar (dengan teks di sebelah kanan) -->
      <div class="hidden lg:mt-0 lg:col-span-5 lg:flex w-[35rem]">
        <img src="img/bg1.png" class="rounded-2xl" alt="mockup">
      </div>

      <!-- Kolom untuk teks (dengan gambar di sebelah kiri) -->
      <div class="pl-24 place-self-center lg:col-span-7">
        <h1
          class="max-w-2xl mb-4 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
          <span class="text-purple-600">Mau Belajar,</span>
          <span class="text-blue-600">Tapi</span>
          <span class="text-purple-600">Pesennya</span>
          <span class="text-blue-600">Gimana?</span>
        </h1>
        <p class="max-w-2xl mb-6 font-semibold text-slate-700 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Klik
          kontak kami dibawah ini untuk pemesanan lebih lanjut</p>
        <a href="https://wa.me/+6289534549006?text=Halo+kak%2C+Saya+ingin+Memesan+Paket+Belajar"
          class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg hover:bg-purple-700 bg-purple-600 transition-all duration-200 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
          Kontak Kami
          <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>

  </section>

</x-layout>