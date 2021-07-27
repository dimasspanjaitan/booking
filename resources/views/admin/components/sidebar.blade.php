<!-- sidebar -->
<div class="sidebar app-aside" id="sidebar">
    <div class="sidebar-container perfect-scrollbar">
        <nav>
            <!-- start: SEARCH FORM -->
            @include('admin.components.search-menu')
            <!-- end: SEARCH FORM -->

            <!-- start: MAIN NAVIGATION MENU -->
                <div class="navbar-title">
                    <span>Menu</span>
                </div>
                <ul class="main-navigation-menu">
                    <li class="{{ set_active('admin.dashboard') }}">
                        <a href="dashboard">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-home"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Dashboard </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    {{-- <li class="{{ set_active('admin.renungan-list') }}">
                        <a href="javascript:void(0)">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-pencil-alt"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Input </span><i class="icon-arrow"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('admin.input') }}">
                                    <span class="title">Input Renungan</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="javascript:void(0)">
                            <div class="item-content">
                                <div class="item-media">
                                    <i class="ti-settings"></i>
                                </div>
                                <div class="item-inner">
                                    <span class="title"> Settings </span><i class="icon-arrow"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                    <span class="title"> Elements </span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            <!-- end: MAIN NAVIGATION MENU -->
        </nav>
    </div>
</div>
<!-- / sidebar -->