<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <section class=" mt-8 bg-white">
        <div
            class="flex lg:flex-row flex-col-reverse justify-center w-full  items-center max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 mb-8 ">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-7xl dark:text-white">
                    Buka <br> <span class="xl:text-6xl">Potensi Coding Anda</span></h1>
                <p class="max-w-2xl mb-6 font-normal text-gray-500 lg:mb-8 md:text-lg lg:text-lg dark:text-gray-400">
                    Masuki dunia keunggulan pemrograman dengan platform kursus coding kami yang komprehensif. Apakah
                    Anda seorang pemula yang baru memulai atau pengembang berpengalaman, kursus yang dirancang ahli kami
                    cocok untuk semua tingkat keterampilan.</p>
                <a href="#"
                    class="inline-flex items-center justify-center px-8 py-4 mr-3 text-base font-medium text-center text-white rounded-full bg-black hover:bg-gray-900 focus:ring-4 focus:ring-gray-300">
                    Cari Kelas
                    <svg class="w-7 h-7 ml-2 -mr-1 bg-white text-black rounded-full p-1.5" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-8 py-4 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-full hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-sky-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Hubungi Kami
                </a>
            </div>
            <div class=" lg:flex">
                <img src="img/mockup.png" alt="mockup" class="h-[30rem] animate-wiggle">
            </div>
        </div>


        <div class="max-w-7xl mx-auto mb-20 p-6">
            <h1 class="font-bold text-5xl">New Skills With Code Catalyst. <br> A Detailed Look at Our Curriculum</h1>
            <div class="flex flex-col gap-10 lg:flex-row mt-16 justify-between">
                <div class="w-full lg:w-1/2 h-[400px] bg-sky-500 rounded-3xl content-center px-10 shadow-md text-white">
                    <svg class="w-12 h-12 mb-10 bg-white rounded-full p-2 text-black" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="font-bold text-3xl mb-10 ">Belajar Dengan waktu <br> yang Fleksibel.</h3>
                    <p class="">Ikuti kursus sesuai dengan jadwal Anda sendiri. Platform kami mendukung pembelajaran
                        mandiri dengan akses 24/7 ke semua
                        materi kursus, memungkinkan Anda belajar kapan saja dan di mana saja.</p>
                </div>
                <div class="w-full lg:w-1/2 h-[400px] bg-sky-400 rounded-3xl content-center px-10 text-white">
                    <svg class="w-12 h-12 mb-10 bg-white rounded-full p-2 text-black " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023" />
                    </svg>
                    <h3 class="font-bold text-3xl mb-10 ">Dukungan <br> dan Komunitas.</h3>
                    <p class="">Bergabung dengan komunitas pembelajar dan mentor yang aktif. Dapatkan dukungan langsung
                        dari pengajar melalui forum
                        diskusi dan sesi tanya jawab. Anda juga dapat berkolaborasi dengan peserta lain untuk memperluas
                        wawasan Anda.</p>
                </div>
            </div>

            <div class="my-20 flex flex-col lg:flex-row items-center justify-between gap-y-8">
                <h2 class="font-bold text-3xl text-center lg:text-left ">Cari Pembelajaran <br> yang sesuai dengan Kamu</h2>
                <div class="flex flex-col lg:flex-row gap-5 w-full lg:w-auto">
                    <button
                        class="p-3 w-full lg:w-36 bg-gray-100 rounded-full font-semibold hover:bg-sky-300 hover:text-white transition-colors duration-200"><a
                            href="/belajar">HTML</a></button>
                    <button
                        class="p-3 w-full lg:w-44 bg-gray-100 rounded-full font-semibold hover:bg-sky-300 hover:text-white transition-colors duration-200"><a
                            href="/belajar">CSS</a></button>
                    <button
                        class="p-3 w-full lg:w-36 bg-gray-100 rounded-full font-semibold hover:bg-sky-300 hover:text-white transition-colors duration-200"><a
                            href="/belajar">Bootstrap</a></button>
                    <button
                        class="p-3 w-full lg:w-52 bg-gray-100 rounded-full font-semibold hover:bg-sky-300 hover:text-white transition-colors duration-200"><a
                            href="/belajar">TailwindCSS</a></button>
                </div>
            </div>
            <hr class="mb-10 border-1 border-black">
        </div>




        <div class="max-w-7xl mx-auto p-6">
            <div class="w-full bg-indigo-400 lg:h-[30rem] flex flex-col lg:flex-row rounded-2xl items-center gap-16 ">
                <img src="img/link.png" alt="" class="hidden lg:block h-[25rem] mt-20 transition duration-300">
                <div class="p-8">
                    <h2 class="text-4xl lg:text-6xl text-white font-bold">Why Learn In <br>Code Catalyst</h2>
                    <p class="mt-5 text-gray-100 text-lg">Kami memahami bahwa setiap siswa memiliki jadwal yang berbeda.
                        Kursus kami dirancang untuk fleksibel, memungkinkan Anda
                        menyesuaikan waktu belajar dengan rutinitas Anda.</p>
                    <div class="flex text-white mt-5 items-center">
                        <svg class="w-10 mr-3 h-10 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-xl">Interactive</p>
                    </div>
                    <div class="flex text-white mt-5 items-center">
                        <svg class="w-10 mr-3 h-10 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-xl">Student Friendly</p>
                    </div>
                    <div class="flex text-white mt-5 items-center">
                        <svg class="w-10 mr-3 h-10 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-xl">Collaborative Learning</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class=" max-w-7xl mx-auto py-10 my-16">
            <h2 class="text-5xl font-semibold text-center">Popular Courses</h2>

            <form class="mt-10 max-w-xl mx-auto">
                <div class="flex justify-between gap-3">


                    <input type="search"
                        class="placeholder:text-sky-300 w-full border border-gray-100  pl-6 placeholder:font-semibold shadow p-2.5 rounded-full h-14 focus:ring-sky-300"
                        placeholder="Search...">
                    <button type="submit"
                        class="h-auto p-4 text-sm font-medium text-white shadow rounded-full text-center border hover:bg-gray-200 focus:ring-4 focus:outline-none dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5 mx-auto text-sky-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2.5" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>

                </div>
            </form>
            <div class="flex place-items-center mt-3 ml-10">
                <a href="/belajar   " class="flex">Lihat Semua
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m10 16 4-4-4-4" />
                    </svg>
                </a>

            </div>

            <div class="mt-5 gap-y-10 grid grid-cols-3 place-items-center">
                <div
                    class="border border-gray-200 h-auto w-[22rem] rounded-[3%] p-6 hover:-translate-y-2 hover:shadow-lg transition-all">
                    <div class="grid grid-rows-3 grid-flow-col gap-5 ">
                        <div class="row-span-3 ..."><img class="rounded-lg w-32" src="img/php.png" alt="php"></div>
                        <div class="col-span-2 justify-self-end ">
                            <h5
                                class="bg-indigo-600 rounded-md text-center text-[0.8em] font-semibold p-1.5 text-gray-100 ">
                                Beginner</h5>
                        </div>
                        <div class="row-span-2 col-span-2 place-self-end">
                            <h3 class="text-end font-bold text-2xl">Materi<br> Php Dasar</h3>
                        </div>
                    </div>
                    <div class="flex justify-between mt-5 mb-2 items-center">
                        <h5 class=" rounded-lg text-center text-[1.2em] font-bold p-1 text-red-500">GRATIS</h5>
                        <h5 class=" rounded-lg text-center text-[1em] font-semibold p-1 ">Tutor Name</h5>
                    </div>
                    <button
                        class="bg-sky-600 text-white font-semibold h-12 w-full rounded-lg hover:bg-sky-700 text-sm">Lihat
                        Selengkapnya</button>
                </div>
                <div
                    class="border border-gray-200 h-auto w-[22rem] rounded-[3%] p-6 hover:-translate-y-2 hover:shadow-lg transition-all">
                    <div class="grid grid-rows-3 grid-flow-col gap-5 ">
                        <div class="row-span-3 ..."><img class="rounded-lg w-32" src="img/JavaScript-logo.png"
                                alt="php"></div>
                        <div class="col-span-2 justify-self-end ">
                            <h5
                                class="bg-yellow-300 rounded-md text-center text-[0.8em] font-semibold p-1.5 text-white ">
                                Intermediate</h5>
                        </div>
                        <div class="row-span-2 col-span-2 place-self-end">
                            <h3 class="text-end font-bold text-2xl">JavaScript <br> Dasar</h3>
                        </div>
                    </div>
                    <div class="flex justify-between mt-5 mb-2 items-center">
                        <h5 class=" rounded-lg text-center text-[1.2em] font-bold p-1 text-red-500">Rp. 30.000</h5>
                        <h5 class=" rounded-lg text-center text-[1em] font-semibold p-1 ">Tutor Name</h5>
                    </div>
                    <button
                        class="bg-sky-600 text-white font-semibold h-12 w-full rounded-lg hover:bg-sky-700 text-sm">Lihat
                        Selengkapnya</button>
                </div>
                <div
                    class="border border-gray-200 h-auto w-[22rem] rounded-[3%] p-6 hover:-translate-y-2 hover:shadow-lg transition-all">
                    <div class="grid grid-rows-3 grid-flow-col gap-5 ">
                        <div class="row-span-3 ..."><img class="rounded-lg w-32" src="img/bootstrap.png" alt="php">
                        </div>
                        <div class="col-span-2 justify-self-end ">
                            <h5
                                class="bg-purple-500 rounded-md text-center text-[0.8em] font-semibold p-1.5 text-white ">
                                Beginner</h5>
                        </div>
                        <div class="row-span-2 col-span-2 place-self-end">
                            <h3 class="text-end font-bold text-2xl">Tutorial <br>Bootstrap </h3>
                        </div>
                    </div>
                    <div class="flex justify-between mt-5 mb-2 items-center">
                        <h5 class=" rounded-lg text-center text-[1.2em] font-bold p-1 text-red-500">GRATIS</h5>
                        <h5 class=" rounded-lg text-center text-[1em] font-semibold p-1 ">Tutor Name</h5>
                    </div>
                    <button
                        class="bg-sky-600 text-white font-semibold h-12 w-full rounded-lg hover:bg-sky-700 text-sm">Lihat
                        Selengkapnya</button>
                </div>

            </div>

        </div> --}}

        <div class="bg-gray-800 h-96 mx-auto text-center content-center mt-20">
            <h1 class=" text-3xl lg:text-5xl text-white font-bold mb-10">Mulai Belajar Pemrograman Disini!</h1>
            <a href="/belajar" class="bg-sky-500 text-white rounded-md w-52 p-4 font-bold">Mulai Sekarang</a>
        </div>


    </section>


</x-layout>