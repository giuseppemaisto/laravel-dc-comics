<header class="bg-white">
   <div class="logo">
        <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="">
   </div>
   <div>
          <nav>
               <ul class="list-menu list-unstyled gap-3 d-flex justify-content-center mt-5">
                    <li><a class="nav-link" href=>CHARACTERS</a></li>
                    <li><a class="nav-link" href="">COMICS</a></li>
                    <li><a class="nav-link" href="{{ Route('MOVIE')}}">MOVIES</a></li>
                    <li><a class="nav-link" href="{{ Route('TV')}}">TV</a></li>
                    <li><a class="nav-link" href="{{ Route('GAMES')}}">GAMES</a></li>
                    <li><a class="nav-link" href="{{ Route('COLLECTIBLES')}}">COLLECTIBLES</a></li>
                    <li><a class="nav-link" href="{{ Route('VIDEOS')}}">VIDEOS</a></li>
                    <li><a class="nav-link" href="{{ Route('FANS')}}">FANS</a></li>
                    <li><a class="nav-link" href="{{ Route('NEWS')}}">NEWS</a></li>
                    <li><a class="nav-link" href="{{ Route('SHOP')}}">SHOP</a></li>
               </ul>
               
          </nav>
   </div>
   <div class="search mt-5">
     <input type="text" placeholder="search">
   </div>
</header>