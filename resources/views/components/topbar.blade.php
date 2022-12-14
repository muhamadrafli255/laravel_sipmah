                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (auth()->user()->image != null)
                                    <img class="img-profile rounded-circle" src="{{ asset('img/profile-images/' . auth()->user()->image) }}" style="max-width: 60px">
                                @else
                                    <img class="img-profile rounded-circle" src="http://bootdey.com/img/Content/avatar/avatar1.png" style="max-width: 60px">
                                @endif
                                <span class="ml-2 d-none d-lg-inline text-white small">{{ auth()->user()->name }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/accounts">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Akun
                                </a>
                                <a class="dropdown-item" href="/accounts/password">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Kata Sandi
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->