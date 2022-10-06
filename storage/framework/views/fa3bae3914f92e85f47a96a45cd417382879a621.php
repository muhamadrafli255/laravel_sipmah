        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="/img/logo/logo2.png">
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo e(env('APP_NAME')); ?></div>
            </a>
            <hr class="sidebar-divider my-0">
            <?php if(auth()->user()->HasRole('member')): ?>
            <li class="nav-item <?php echo e(Request::is('home*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span></a>
            </li>
            <?php else: ?>
            <li class="nav-item <?php echo e(Request::is('dashboard*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dasbor</span></a>
            </li>
            <?php endif; ?>

            <?php if(auth()->user()->HasRole('admin')): ?>
            <li class="nav-item <?php echo e(Request::is('members*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/members">
                    <i class="fa-solid fa-users"></i>
                    <span>Anggota</span>
                </a>
            </li>
            <?php elseif(auth()->user()->HasRole('officer')): ?>
            <li class="nav-item <?php echo e(Request::is('members*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/members">
                    <i class="fa-solid fa-users"></i>
                    <span>Anggota</span>
                </a>
            </li>
            <?php else: ?>

            <?php endif; ?>

            <?php if(auth()->user()->HasRole('admin')): ?>
            <li class="nav-item <?php echo e(Request::is('officers*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/officers">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Petugas</span>
                </a>
            </li>
            <?php else: ?>
            
            <?php endif; ?>
            <li class="nav-item <?php echo e(Request::is('categories*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/categories">
                    <i class="fa-solid fa-tag"></i>
                    <span>Kategori</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('racks*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/racks">
                    <i class="fa-solid fa-table-list"></i>
                    <span>Rak</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('publishers*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/publishers">
                    <i class="fa-solid fa-building"></i>
                    <span>Penerbit</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('books*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/books">
                    <i class="fa-solid fa-book"></i>
                    <span>Buku</span>
                </a>
            </li>
            <li class="nav-item <?php echo e(Request::is('borrows*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/borrows">
                    <i class="fa-solid fa-arrow-up-from-bracket"></i>
                    <span>Peminjaman</span>
                </a>
            </li>
            <?php if(auth()->user()->HasRole('member')): ?>
                
            <?php else: ?>
            <li class="nav-item <?php echo e(Request::is('reports*') ? 'active' : ''); ?>">
                <a class="nav-link" href="/reports">
                    <i class="fa-solid fa-file"></i>
                    <span>Laporan</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
        <!-- Sidebar --><?php /**PATH /Users/muhamadrafli/Documents/app-laravel/laravel-sipmah/resources/views/components/sidebar.blade.php ENDPATH**/ ?>