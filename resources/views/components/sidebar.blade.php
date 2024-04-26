<div>
    <div class=" bg-white" id="sidebar-wrapper" style="border-right: 4px solid #f5f5f5">
        <div class="sidebar-heading bg-white">
            <img src="img/shopping.webp" alt="shopping" class="" style="width: 50px; heigh:50px; border-radius:50%">
            <b>Kia Computer</b>
        </div>
        <p class="ms-3  mt-4 text-secondary">Menu</p>
        <div class="list-group list-group-flush">
            <a class="mb-2 list-group-item-action list-group-item-light p-3 d-flex align-items-center {{ request()->is('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}">
                <i class='bx bxs-dashboard bx-sm'></i>
                <p class="mb-0 ms-3 fw-">Dashboard</p>
            </a>
            <a class="mb-2 list-group-item-action list-group-item-light p-3 d-flex align-items-center {{ request()->is('statistik') ? 'active' : '' }}"
                href="{{ route('statistik') }}">
                <i class='bx bx-stats bx-sm'></i>
                <p class="mb-0 ms-3">Statistik</p>
            </a>
            <a class="mb-2 list-group-item-action list-group-item-light p-3 d-flex align-items-center {{ request()->is('produk') ? 'active' : '' }}"
                href="{{ route('produk') }}">
                <i class='bx bxs-store-alt bx-sm'></i>
                <p class="mb-0 ms-3">Produk</p>
            </a>
            <a class="mb-2 list-group-item-action list-group-item-light p-3 d-flex align-items-center " href="#!">
                <i class='bx bxs-user bx-sm'></i>
                <p class="mb-0 ms-3">Profil</p>
            </a>

        </div>
    </div>
</div>
