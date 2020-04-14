<aside id="colorlib-aside" role="complementary" class="js-fullheight">
  <h1 id="colorlib-logo"><a href="home">Megazine</a></h1>
  <nav id="colorlib-main-menu" role="navigation">
    <ul>
      <li class="{{ (Request::segment(1) == 'home' ? 'colorlib-active': '')}}"><a href="{{route('home')}}">Home</a></li>
      <li class="{{ (Request::segment(1) == 'style' ? 'colorlib-active': '')}}"><a href="{{route('style')}}">Style</a></li>
      <li class="{{ (Request::segment(1) == 'fashion' ? 'colorlib-active': '')}}"><a href="{{route('fashion')}}">Fashion</a></li>
      <li class="{{ (Request::segment(1) == 'travel' ? 'colorlib-active': '')}}"><a href="{{route('travel')}}">Travel</a></li>
      <li class="{{ (Request::segment(1) == 'sports' ? 'colorlib-active': '')}}"><a href="{{route('sports')}}">Sports</a></li>
      <li class="{{ (Request::segment(1) == 'video' ? 'colorlib-active': '')}}"><a href="{{route('video')}}">Video</a></li>
      <li class="{{ (Request::segment(1) == 'archives' ? 'colorlib-active': '')}}"><a href="{{route('archives')}}">Archives</a></li>
   
      @if (Auth::check())
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
      @else
        <li><a href="{{route('login')}}">Login</a></li>
      @endif
      
    </ul>
  </nav>

  @include('layouts.guest.footer')

</aside>