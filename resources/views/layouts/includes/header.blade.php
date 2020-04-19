<div class="app-header header py-1 d-flex">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="index.html">
                <img src="{{asset('assets/images/brand/logo.png') }}" class="header-brand-img d-none d-sm-block" alt="Spain logo">
                <img src="{{asset('assets/images/brand/logo.png') }}" class="header-brand-img-2 d-sm-none" alt="Spain logo">
            </a>
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
            
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown d-none d-md-flex " >
                    <a  class="nav-link icon full-screen-link">
                        <i class="mdi mdi-arrow-expand-all"  id="fullscreen-button"></i>
                    </a>
                </div>
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span class="avatar avatar-md brround"><img src="{{asset('assets/images/faces/male/40.jpg') }}" alt="Profile-img" class="avatar avatar-md brround"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                        <div class="text-center">
                            <a href="#" class="dropdown-item text-center font-weight-sembold user">{{ auth()->user()->name }}</a>

                            <div class="dropdown-divider"></div>
                        </div>
                        
                        
                        
                        <a class="dropdown-item" href="login.html">
                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>