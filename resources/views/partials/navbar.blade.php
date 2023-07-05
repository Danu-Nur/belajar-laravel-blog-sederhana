<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ ($judul === 'HOME') ? 'active' : ''; }}" href="/">Home</a>
                <a class="nav-link {{ ($judul === 'ABOUT') ? 'active' : ''; }}" href="/about">About</a>
                <a class="nav-link {{ ($judul === 'BLOG') ? 'active' : ''; }}" href="/blog">Blog</a>
            </div>
        </div>
    </div>
</nav>
