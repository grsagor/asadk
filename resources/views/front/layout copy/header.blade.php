<header class="header">
    <div class="logo-container">
        <a href="{{ url('/') }}" class="logo-link">
            <img src="{{ asset('assets/images/utils/logo-white.png') }}" alt="Logo" class="logo-image">
        </a>
    </div>

    <nav class="main-nav">
        <div class="mobile-nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-list">
            <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            {{-- <li class="dropdown">
                <a href="#" class="nav-link">Services <i class="fas fa-chevron-down"></i></a>
                <div class="dropdown-content">
                    <a href="{{ url('/services/web-development') }}" class="dropdown-link">Web Development</a>
                    <a href="{{ url('/services/mobile-apps') }}" class="dropdown-link">Mobile Apps</a>
                    <a href="{{ url('/services/design') }}" class="dropdown-link">Design</a>
                </div>
            </li> --}}
            <li><a href="{{ url('/templates') }}" class="nav-link">Templates</a></li>
            <li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
            <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
        </ul>
    </nav>

    <div class="user-section">
        @auth
            <div class="user-info dropdown">
                <button type="button" class="user-dropdown-toggle">
                    @if(auth()->user()->avatar)
                        <img src="{{ asset(auth()->user()->avatar) }}" alt="Avatar" class="user-avatar">
                    @else
                        <div class="user-avatar-placeholder">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                    @endif
                    <div class="user-details">
                        <span class="user-name">{{ auth()->user()->name }}</span>
                        <span class="user-email">{{ auth()->user()->email }}</span>
                    </div>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="dropdown-menu">
                    <div class="dropdown-header">
                        <span class="welcome-text">Welcome!</span>
                        <span class="user-role">{{ auth()->user()->role }}</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/profile') }}" class="dropdown-item">
                        <i class="fas fa-user"></i> My Profile
                    </a>
                    <a href="{{ url('/dashboard') }}" class="dropdown-item">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                       class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="login-btn btn-primary">Login</a>
        @endauth
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        const mainNav = document.querySelector('.main-nav');
        const dropdowns = document.querySelectorAll('.dropdown');

        mobileNavToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            this.classList.toggle('active');
        });

        if (window.innerWidth <= 991) {
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('click', function(e) {
                    this.classList.toggle('active');
                    e.stopPropagation();
                });
            });
        }
    });
</script>
