<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Love | @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
  <header class="header" id="header">
    <nav class="navbar container">
       <section class="navbar-left">
          <a href="{{ route('index') }}" class="brand">Love</a>
          <div class="burger" id="burger">
             <span class="burger-line"></span>
             <span class="burger-line"></span>
             <span class="burger-line"></span>
          </div>
       </section>
       <section class="navbar-center">
          <span class="overlay"></span>
          <div class="menu" id="menu">
             <div class="menu-header">
                <span class="menu-arrow"><i class="bx bx-chevron-left"></i></span>
                <span class="menu-title"></span>
             </div>
             <ul class="menu-inner">
                <li class="menu-item"><a href="{{ route('index') }}" class="menu-link">Thông tin</a></li>
                <li class="menu-item"><a href="{{ route('sukien') }}" class="menu-link">Sự kiên</a></li>
                <li class="menu-item"><a href="{{ route('xoay') }}" class="menu-link">Xoay</a></li>
               
             </ul>
          </div>
       </section>
       <section class="navbar-right">
          
       </section>
    </nav>
 </header>

 @yield('main')

 <footer id='info'>Love <a target="_blank" href="#">Sown & Link</a></footer>
 <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

