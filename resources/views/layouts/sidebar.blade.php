

<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src111">SURVEY</div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>

                @role('agente')
                <li>
                    <a href="{{ url('/home') }}" class='{{ $page_title === "Dashboard" ? "mm-active" : "" }}'>
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{Route('anagrafica')}}"  class='{{ $page_title === "Anagrafica" ? "mm-active" : "" }}' >
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Anagrafica
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ url('/home') }}" class='{{ $page_title === "Dashboard" ? "mm-active" : "" }}'>
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{Route('survey')}}"  class='{{ $page_title === "Survey" ? "mm-active" : "" }}' >
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Survey
                    </a>
                </li>
                {{-- <li>
                    <a href="{{Route('survey')}}"  class='{{ $page_title === "Domande" ? "mm-active" : "" }}' >
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Modifica domande
                    </a>
                </li> --}}
                <li>
                    <a href="{{Route('agenti')}}" class='{{ $page_title === "Agenti" ? "mm-active" : "" }}' >
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Agenti
                    </a>
                </li>
                @endrole



            </ul>
        </div>
    </div>
</div>
