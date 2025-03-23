    @auth
    <!-- Offcanvas Sidebar per Mobile -->
    <div class="offcanvas offcanvas-start offcanvas-bg text-white" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mobileSidebarLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <img src="/images/logo.png" alt="Logo" class="py-5">
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
                <li class="nav-item my-4">
                    <a href="" class="nav-link"><img src="/images/Profile.png" alt=""></a>
                </li>
                <li class="nav-item my-4">
                    <a href="" class="nav-link"><img src="/images/Chat.png" alt=""></a>
                </li>
                <li class="nav-item my-4">
                    <a href="" class="nav-link"><img src="/images/Notification.png" alt=""></a>
                </li>
                <li class="nav-item my-4">
                    <a href="" class="nav-link"><img src="/images/2 message.png" alt=""></a>
                </li>
                <li class="nav-item my-4">
                    <a href="" class="nav-link"><img src="/images/Delete.png" alt=""></a>
                </li>
            </ul>
            <hr>
            <div class="dropdown pb-4">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUserDesktop" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://i.pinimg.com/1200x/85/5b/2b/855b2b606c64c961da2922a240a43236.jpg" alt="User" width="30" height="30" class="rounded-circle">

                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="d-flex justify-content-center">

                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- Sidebar fissa per Desktop -->
    <div class="sidebar-fixed d-none d-md-block bg-dark-custom text-white p-3">
        <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="/images/logo.png" alt="Logo" class="py-5">
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start" id="menu">
            <li class="nav-item my-4">
                <a href="" class="nav-link"><img src="/images/Profile.png" alt=""></a>
            </li>
            <li class="nav-item my-4">
                <a href="" class="nav-link"><img src="/images/Chat.png" alt=""></a>
            </li>
            <li class="nav-item my-4">
                <a href="" class="nav-link"><img src="/images/Notification.png" alt=""></a>
            </li>
            <li class="nav-item my-4">
                <a href="" class="nav-link"><img src="/images/2 message.png" alt=""></a>
            </li>
            <li class="nav-item my-4">
                <a href="" class="nav-link"><img src="/images/Delete.png" alt=""></a>
            </li>
        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUserDesktop" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://i.pinimg.com/1200x/85/5b/2b/855b2b606c64c961da2922a240a43236.jpg" alt="User" width="30" height="30" class="rounded-circle">

            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li class="d-flex justify-content-center">

                </li>
            </ul>
        </div>
    </div>


    <nav class="navbar navbar-dark bg-dark-custom d-md-none">
        <div class="container-fluid">
            <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </nav>

    @endauth