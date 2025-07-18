  <header>
    <div class="menu-toggle" onclick="toggleMenu(this)">
  <div></div>
  <div></div>
  <div></div>
</div>
    <img src="logo.png" alt="Soojin BBQ" class="logo-mobile">
    <nav>
      <a href="#" class="active">TRANG CHỦ</a>
      <a href="#about">GIỚI THIỆU</a>
      <a href="#menu">MENU</a>
      <img src="logo.png" alt="Soojin BBQ" class="logo-center">
      <a href="#gallery">HÌNH ẢNH</a>
      <a href="#news">TIN TỨC</a>
      <a href="#contact">LIÊN HỆ</a>
    </nav>
  </header>
 
 <script>
  function toggleMenu(button) {
    const nav = document.querySelector('nav');
    button.classList.toggle('open');       // For X animation
    nav.classList.toggle('active');        // To show sidebar
    document.body.classList.toggle('nav-open'); // Optional scroll lock
  }
</script>