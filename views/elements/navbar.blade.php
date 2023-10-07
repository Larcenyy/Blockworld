<nav class="p-3 mb-5 navbar navbar-expand-md navbar-dark py-3 position-fixed w-100 navIndex">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="{{ trans('messages.nav.toggle') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between position-relative" id="navbar">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav bg-opacity-50 w-100 p-2 ps-5 justify-content-center gap-3 rounded-1 nav_anim flex-wrap me-4">
                <a href="{{route("home")}}" class="mt-2 position-absolute start-0 top-50 translate-middle">
                    <img class="wallNav" src="{{site_logo()}}" alt="">
                </a>
                @foreach($navbar as $element)
                    @if(!$element->isDropdown())
                        <li class="nav-item">
                            <a class="nav-link d-flex gap-2 align-items-center position-relative  @if($element->isCurrent()) active @endif" href="{{ $element->getLink() }}" @if($element->new_tab) target="_blank" rel="noopener noreferrer" @endif>
                                {{ $element->name }}
                            </a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center position-relative @if($element->isCurrent()) active @endif" href="#" id="navbarDropdown{{ $element->id }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $element->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown{{ $element->id }}">
                                @foreach($element->elements as $childElement)
                                    <a class="dropdown-item @if($childElement->isCurrent()) active @endif" href="{{ $childElement->getLink() }}" @if($childElement->new_tab) target="_blank" rel="noopener noreferrer" @endif>
                                        {{ $childElement->name }}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto align-items-center bg-myText shadow-lg gap-1 rounded-1">

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-dark bg-myBackground  border-0"  href="{{ route('login') }}">{{ trans('auth.login') }}</a>
                    </li>
                    @if(Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link border-0 bg-myBackground text-dark"  href="{{ route('register') }}">{{ trans('auth.register') }}</a>
                        </li>
                    @endif
                @else
                    @include('elements.notifications')
                    <li class="nav-item dropdown">
                        <a id="userDropdown" class="nav-link d-flex flex-column align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ Auth::user()->getAvatar(32) }}" alt="{{ Auth::user()->name }}">
                            <span class="d-flex gap-1">
                                {{ Auth::user()->name }}
                                <i class="bi bi-caret-down-fill"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile.index') }}">
                                <i class="bi bi-person"></i> {{ trans('messages.nav.profile') }}
                            </a>

                            @foreach(plugins()->getUserNavItems() ?? [] as $navId => $navItem)
                                <a class="dropdown-item" href="{{ route($navItem['route']) }}">
                                    <i class="{{ $navItem['icon'] ?? 'bi bi-three-dots' }}"></i> {{ $navItem['name'] }}
                                </a>
                            @endforeach

                            @if(Auth::user()->hasAdminAccess())
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                    <i class="bi bi-speedometer2"></i> {{ trans('messages.nav.admin') }}
                                </a>
                            @endif

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i> {{ trans('auth.logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
