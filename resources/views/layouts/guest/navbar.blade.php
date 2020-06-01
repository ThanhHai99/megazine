<aside id="colorlib-aside" role="complementary" class="js-fullheight">
  <h1 id="colorlib-logo"><a href="home">Megazine</a></h1>
  <nav id="colorlib-main-menu" role="navigation">
    <ul>
      @foreach ($topics as $topic)
        <li class="{{ (Request::segment(1) == $topic->name ? 'colorlib-active': '')}}"><a href="{{route($topic->name)}}">{{$topic->name}}</a></li>
      @endforeach
      <li class="{{ (Request::segment(1) == 'video' ? 'colorlib-active': '')}}"><a href="{{route('video')}}">video</a></li>
   
      @if (Auth::user())
        <li>
            <a href="{{ route('dashboard.logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
      @else
        <li><a href="{{route('dashboard.login')}}">Login</a></li>
      @endif
      
    </ul>
  </nav>

  @include('layouts.guest.footer')

</aside>