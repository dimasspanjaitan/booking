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
                        <a href="{{ route('admin.dashboard') }}">
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
                    @foreach($menus as $key => $menu)
                    <li class="open">
                        @if ($menu->parent_id == 0)
                            <a href="javascript:void(0)">
                                <div class="item-content">
                                    <div class="item-media">
                                        <i class="{{$menu->icon}} fa-2x"></i>
                                    </div>
                                    <div class="item-inner">
                                        <span class="title"> {{ucfirst($menu->name)}} </span><i class="icon-arrow"></i>
                                    </div>
                                </div>
                            </a>  
                        @endif
                        <ul class="sub-menu">
                            @if($menu->children->count() > 0)
                                @foreach($menu->children as $k => $child)
                                    <li>
                                        <a href="{{url('admin'.$child->url)}}">
                                            <div class="item-content">
                                                <div class="item-media" style="padding: 0px 5px 0px 0px !important">
                                                    <i class="{{$child->icon}}"></i>
                                                </div>
                                                <div class="item-inner" style="padding: 5px 5px 0px 0px !important">
                                                    <span class="title">{{$child->label}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                       
                    </li>
                    @endforeach
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