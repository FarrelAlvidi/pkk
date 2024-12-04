<header class="max-w-[86rem] shadow-md border-2 bg-white mx-auto mt-5  rounded-xl sticky top-5 z-10">
  <div class="max-w-[86rem] flex justify-between mx-auto text-gray-600 font-[600] p-3 w-full h-[80px] items-center ">
  <a href="" class="xl:w-[150px] font-bold "><img src="img/logo.png" alt=""></a>
  
  <nav class=" text-[1rem] xl:text-[.9rem] flex gap-14">
      <a href="/" :active="request()->is('/')">Beranda</a>
      <a href="/belajar" :active="request()->is('/belajar')">Belajar</a>
      <a href="/about" :active="request()->is('about')">Tentang Kami</a>
      <a href="https://discord.gg/DShrPFN6" target="_blank" :active="request()->is('project')">Komunitas</a>


  </nav>
  <div class="logo flex gap-2">
      <a href="" class="xl:text-[.8rem] rounded-full h-[44px] w-[90px] border border-1 inline-flex justify-center items-center hover:bg-gray-100">Daftar</a>
      <a href="" class="xl:text-[.8rem] rounded-full h-[44px] w-[90px] text-white inline-flex bg-black transition-colors hover:bg-[#9999F4] justify-center items-center ">Masuk</a>
  </div>

</div>
</header>