<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Love | Xoay</title>
  <link rel="stylesheet" href="{{ asset('css/xoay.css') }}" />
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
<!-- partial:index.partial.html -->
<div class="holder">  
  <div class="spinner">
    @foreach($images as $image)
    <div class="panel" 
    style="background-image: url({{ asset('images/'.$image->image) }});">
    </div>
    @endforeach
    <div class="fade"></div>
  </div>
</div>
<div class="pagination">
  <button type="button" id="prev">&#8592;</button>
  <button type="button" id="next">&#8594;</button>
</div>

<footer  style="top: 268px;" id='info'>Love <a target="_blank" href="#">Sown & Link</a></footer>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script><script  src="./script.js"></script>
  <script src="{{ asset('js/xoay.js') }}"></script>
</body>
</html>
