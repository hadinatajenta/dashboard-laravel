<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            {{-- Toggle menu --}}
            <button class="btn btn-primary" id="sidebarToggle"><i class='bx bx-menu'></i></button>

            {{-- Nav link --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Dropdown --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" id="navbarDropdown" href="#"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bxs-user-circle bx-sm'></i> &nbsp;
                            <p class="mb-0">Profile</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#!">Action</a>
                            <a class="dropdown-item" href="#!">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
