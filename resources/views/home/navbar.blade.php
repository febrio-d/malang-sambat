  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/home">Malang Sambat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('reports*') ? 'active' : '' }}" href="/reports">Reports</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ request()->is('profile*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/profile">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/signout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item">Sign Out</button>
                    </form>
                  </li>
                </ul>
            </li>
        </ul>
      </div>
    </div>
  </nav>