<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="{{route("home")}}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/logo-small.png">
            </div>
        </a>
        <a href="{{route("home")}}" class="simple-text logo-normal">
            Brands & Stores

        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="@if(Route::is("home")) active @endif">
                <a href="{{route("home")}}">
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
        </ul>
    </div>
</div>
