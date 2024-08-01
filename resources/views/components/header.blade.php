<header class="header">
    <a href="#" class="logo"> <i class="fas fa-paw"></i> rawr music</a>
    <nav class="navbar">
        <a href="{{ url('/') }}">home</a>
        <a href="{{ url('/music') }}">music</a>
        <a href="{{ url('/shop') }}">Collection</a>
        <a href="{{ url('/video') }}">Music Video</a>
        
        @auth
            <!-- Jika pengguna login, tampilkan tautan profil dan logout -->
            <a href="{{ url('/profile') }}" class="fas fa-user" title="Profile">{{ Auth::user()->name }}</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="fas fa-sign-out-alt" title="Logout" style="background:none; border:none; cursor:pointer;"></button>
            </form>
        @else
            <!-- Jika pengguna belum login, tampilkan tautan login -->
            <a href="{{ url('/login') }}" class="fas fa-user" title="Login"></a>
        @endauth
    </nav>

    <div id="menu" class="fas fa-bars"></div>
</header>
