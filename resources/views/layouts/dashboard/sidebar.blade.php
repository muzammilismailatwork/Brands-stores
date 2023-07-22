<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a @if(auth()->user() == null) href="{{route("home")}}" @else href="{{route("dashboard")}}" @endif class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/logo-small.png">
            </div>
        </a>
        <a @if(auth()->user() == null) href="{{route("home")}}" @else href="{{route("dashboard")}}" @endif class="simple-text logo-normal">
            Brands & Stores

        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="@if(Route::is("home")) active @elseif(Route::is("dashboard")) active @endif">
                <a @if(auth()->user() == null) href="{{route("home")}}" @else href="{{route("dashboard")}}" @endif>
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="@if(Route::is("brands")) active @endif">
                <a href="{{route("brands")}}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Brands</p>
                </a>
            </li>
            <li class="@if(Route::is("stores")) active @endif">
                <a href="{{route("stores")}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Stores</p>
                </a>
            </li>
            <li class="@if(Route::is("manage_brands")) active @endif">
                <a href="{{route("manage_brands")}}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Manage Brands</p>
                </a>
            </li>


            <li class="@if(Route::is("manage_stores")) active @endif">
                <a href="{{route("manage_stores")}}">
                    <i class="nc-icon nc-shop"></i>
                    <p>Manage Stores</p>
                </a>
            </li>
        </ul>
    </div>
</div>
