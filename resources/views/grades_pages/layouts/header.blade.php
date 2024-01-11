

<nav style="background-color: #28a745; border-radius: 16px; margin-top: 5px; align-items: baseline" class="navbar navbar-expand-lg navbar-light">
    <div style="display: flex; align-items: center;">
      <a style="margin-right: 0;" class="navbar-brand" target="_blank" href="https://www.facebook.com/hightechinsteg/">
        <img class="bi me-2" width="50" height="50" role="img" aria-label="Bootstrap" src="{{asset('grades/images/logo.jpg')}}" style="border-radius: 25px;">
      </a>
      <h6 style="color: white; margin-bottom:0px;">HIGHTER TECHNOLOGICAL INSTITUTE</h6>
    </div>
          {{-- dropdown btn --}}
    <div class="dropdown" style="margin-left: auto;">
      <button onclick="myFunction()" class="dropbtn">
        <img class="bi me-2" width="30" height="50" role="img" aria-label="Bootstrap" src="{{asset('grades/images/menu.png')}}">
      </button>
      <div id="myDropdown" class="dropdown-content">
        @if (auth('web')->check())
        <h6 class="h66">      HI      {{Auth::user()->name}}        </h6>
        <h6 class="h66">            {{Auth::user()->email}}        </h6>

        <a href="{{route('register')}}">register</a>
	
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>							
        
        @else
        <a href="{{route('login')}}">login</a>
        @endif
        
      </div>
    </div>
  </nav>

