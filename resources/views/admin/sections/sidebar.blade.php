<div class="leftbar">
    <div class="sidebar">
        <div class="logobar">
            <a href="#" class="logo logo-large"><img src="{{ asset('admin\images\logo.svg') }}" class="img-fluid" alt="logo"></a>
            <a href="#" class="logo logo-small"><img src="{{ asset('admin\images\small_logo.svg') }}" class="img-fluid" alt="logo"></a>
        </div>
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('admin\images\svg-icon\dashboard.svg') }}" class="img-fluid" alt="dashboard">
                        <span>Dashboard</span>
                    </a>
                </li> 
                <li>
                    <a href="{{ route('admin.site_settings.index') }}" class="profile-icon"><i class="dripicons-gear"></i><span>Site settings</span></a>
                </li>     
                <li>
                    <a href="{{ route('admin.logout') }}" class="profile-icon" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <img src="{{ asset('admin\images\svg-icon\logout.svg') }}" class="img-fluid" alt="logout"><span>{{ __('Logout') }}</span></a>
                </li>                                     
            </ul>
        </div>
    </div>
</div>