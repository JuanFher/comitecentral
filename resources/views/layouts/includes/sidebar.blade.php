<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body">
            <div>
                <img src="{{ asset('assets/images/faces/male/40.jpg') }}" alt="user-img" class="avatar avatar-xl brround mCS_img_loaded">
                            </div>
            <div class="user-info mb-2">
                <h4 class="font-weight-semibold text-dark mb-1">{{ auth()->user()->name }}</h4>
                <span class="mb-0 text-muted">Ui Designer</span>
            </div>
            
        </div>
    </div>
    <ul class="side-menu">
        <li>
            <a class="side-menu__item" href="{{ route('home')}}"><i class="side-menu__icon fa fa-dashboard"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li>
            <a class="side-menu__item" href="{{ route('courses.index')}}"><i class="side-menu__icon fa fa-building-o"></i><span class="side-menu__label">Cursos</span></a>
        </li>
        {{-- <li>
            <a class="side-menu__item" href="{{ route('patient.index')}}"><i class="side-menu__icon fa fa-heartbeat"></i><span class="side-menu__label">Pacientes</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-medkit"></i><span class="side-menu__label">Medicamentos</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{ route('laboratory.index')}}">Laboratorios</a></li>
                <li><a class="slide-item" href="{{ route('unit.index')}}">Unidad de medida</a></li>
                <li><a class="slide-item" href="{{ route('medicine.index')}}">Medicamentos</a></li>
            </ul>
        </li> --}}
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Usuarios</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                {{-- <li><a class="slide-item" href="{{ route('user.index')}}">Usuarios</a></li> --}}
                {{-- <li><a class="slide-item" href="{{ route('patient.index')}}">Roles</a></li>
                <li><a class="slide-item" href="{{ route('patient.index')}}">Permisos</a></li> --}}
            </ul>
        </li>
        
           
    </ul>
</aside>