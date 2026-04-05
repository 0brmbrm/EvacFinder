      <!-- Nav Header (Logo) -->
      <div class="nav-header">
        <a href="?route=home" class="brand-logo">
          <img class="logo-abbr"    src="views/assets/images/logo-white.png"      alt="Logo">
          <img class="logo-compact" src="views/assets/images/logo-text-white.png" alt="Logo Text">
          <img class="brand-title"  src="views/assets/images/logo-text-white.png" alt="Brand">
        </a>
        <div class="nav-control">
          <div class="hamburger">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
        </div>
      </div>

    <!-- Top Navbar -->
      <div class="header">
        <div class="header-content">
          <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">

              <!-- Left: Search -->
              <div class="header-left">
                <div class="search_bar dropdown">
                  <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                  <div class="dropdown-menu p-0 m-0">
                    <form>
                      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>
                  </div>
                </div>
              </div>

              <!-- Right: User Profile -->
              <ul class="navbar-nav header-right">
                <li class="nav-item dropdown header-profile">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                    <i class="mdi mdi-account-circle font-size-h3"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="?route=profile" class="dropdown-item ai-icon">
                      <i class="ti-user text-primary"></i> Profile
                    </a>
                    <a href="?route=logout" class="dropdown-item ai-icon">
                      <i class="ti-close text-danger"></i> Logout
                    </a>
                  </div>
                </li>
              </ul>

            </div>
          </nav>
        </div>
      </div>