<header class="px-8 fixed left-0 top-5 items-center w-full">
  <div
    class="max-w-screen-xl border bg-white mt-5 rounded-full shadow-lg px-10  flex justify-between mx-auto text-gray-600 font-[600] p-3 w-full h-[80px] items-center ">
    <a href="" class="w-14 p-1 font-bold "><img src="img/logo.jpeg" alt=""></a>

    <nav class="nav-links text-[1rem] xl:text-[.9rem] hidden md:flex gap-12">
      <a href="/" :active="request()->is('/')">Beranda</a>
      <a href="/belajar" :active="request()->is('/belajar')">Belajar</a>
      <a href="/about" :active="request()->is('about')">Tentang Kami</a>
      <a href="https://discord.gg/DShrPFN6" target="_blank" :active="request()->is('project')">Komunitas</a>    
    </nav>

    
    <i id="burger-btn" name="menu" class="fa-solid fa-bars md:hidden flex text-2xl"></i>

  </div>
</header>

<script>
const burgerBtn = document.getElementById('burger-btn');
const menu = document.getElementById('menu');

burgerBtn.addEventListener('click', () => {
menu.classList.toggle('hidden');
});
</script>