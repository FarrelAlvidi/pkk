<header class="mx-8">
  <div
    class="max-w-screen-xl border bg-white mt-5 rounded-full shadow-lg px-10 sticky top-5 z-10 flex justify-between mx-auto text-gray-600 font-[600] p-3 w-full h-[80px] items-center ">
    <a href="" class="w-14 p-1 font-bold "><img src="img/logo.jpeg" alt=""></a>

    <nav class="nav-links text-[1rem] xl:text-[.9rem] hidden md:flex gap-12">
      <a href="/" :active="request()->is('/')">Beranda</a>
      <a href="/belajar" :active="request()->is('/belajar')">Belajar</a>
      <a href="/about" :active="request()->is('about')">Tentang Kami</a>
      <a href="https://discord.gg/DShrPFN6" target="_blank" :active="request()->is('project')">Komunitas</a>

      
    
    </nav>
    <i onclick="onToggleMenu(this)" name="menu" class="fa-solid fa-bars lg:hidden flex text-2xl"></i>

  </div>
</header>

<script>
  const navLinks = document.querySelector('.nav-links')
  function onToggleMenu(e) {
  e.name = e.name === 'menu' ? 'close' : 'menu'
  navLinks.classList.toggle("lg:flex");
  }
</script>