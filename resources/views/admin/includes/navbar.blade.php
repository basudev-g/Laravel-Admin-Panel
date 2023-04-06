<!-- navbar navigation component -->
<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <button type="button" id="sidebarCollapse" class="btn btn-light">
        <i class="fas fa-bars"></i><span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <div class="nav-dropdown">
                    <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                        <ul class="nav-list">
                            <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                            <div class="dropdown-divider"></div>
                            @role('admin')
                            <li><a href="{{ route('admin-roles') }}" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                            @endrole
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <div class="nav-dropdown">
                    <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> <span>{{ Auth::user()->name }}</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                        <ul class="nav-list">
                            <li><a href="{{route('profile.edit')}}" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                            <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                            @role('admin')
                            <li><a href="{{ route('admin-settings') }}" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                            @endrole
                            <div class="dropdown-divider"></div>
                            <!-- <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li> -->
                            <!-- Authentication -->
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="route('logout')" class="dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i>
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- end of navbar navigation -->