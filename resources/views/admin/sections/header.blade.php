<div class="rightbar">
<div class="topbar-mobile">
   <div class="row align-items-center">
      <div class="col-md-12">
         <div class="mobile-logobar">
            <a href="{{ route('admin.dashboard') }}" class="mobile-logo">
            <img src="{{ asset('admin\images\logo.svg') }}" class="img-fluid" alt="logo">
            </a>
         </div>
         <div class="mobile-togglebar">
            <ul class="list-inline mb-0">
               <li class="list-inline-item">
                  <div class="topbar-toggle-icon">
                     <a class="topbar-toggle-hamburger" href="javascript:void();">
                     <img src="{{ asset('admin\images\svg-icon\horizontal.svg') }}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                     <img src="{{ asset('admin\images\svg-icon\verticle.svg') }}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                     </a>
                  </div>
               </li>
               <li class="list-inline-item">
                  <div class="menubar">
                     <a class="menu-hamburger" href="javascript:void();">
                     <img src="{{ asset('admin\images\svg-icon\collapse.svg') }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                     <img src="{{ asset('admin\images\svg-icon\close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                     </a>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<div class="topbar">
   <div class="row align-items-center">
      <div class="col-md-12 align-self-center">
         <div class="togglebar">
            <ul class="list-inline mb-0">
               <li class="list-inline-item">
                  <div class="menubar">
                     <a class="menu-hamburger" href="javascript:void();">
                     <img src="{{ asset('admin\images\svg-icon\collapse.svg') }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                     <img src="{{ asset('admin\images\svg-icon\close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                     </a>
                  </div>
               </li>
               <li class="list-inline-item">
                  <div class="searchbar">
                     <form>
                        <div class="input-group" style="visibility: hidden;">
                           <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                           <div class="input-group-append">
                              <button class="btn" type="submit" id="button-addon2"><img src="{{ asset('admin\images\svg-icon\search.svg') }}" class="img-fluid" alt="search"></button>
                           </div>
                        </div>
                     </form>
                  </div>
               </li>
            </ul>
         </div>
         <div class="infobar">
            <ul class="list-inline mb-0">
               <li class="list-inline-item" style="visibility: hidden;">
                  <div class="settingbar">
                     <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                     <img src="{{ asset('admin\images\svg-icon\settings.svg') }}" class="img-fluid" alt="settings">
                     </a>
                  </div>
               </li>
               <li class="list-inline-item">
                  <div class="profilebar">
                     <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('admin\images\users\profile.svg') }}" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                           <div class="dropdown-item">
                              <div class="profilename">
                                 <h5>{{ Auth::user()->first_name }}</h5>
                              </div>
                           </div>
                           <div class="userbox">
                              <ul class="list-unstyled mb-0">
                                 <li class="media dropdown-item">
                                    <a href="{{ route('admin.site_settings.index') }}" class="profile-icon"><img src="{{ asset('admin\images\svg-icon\settings.svg') }}" class="img-fluid icon-svg" alt="settings">Site settings</a>
                                 </li>
                                 <li class="media dropdown-item">
                                    <a href="{{ route('admin.logout') }}" class="profile-icon" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <img src="{{ asset('admin\images\svg-icon\logout.svg') }}" class="img-fluid" alt="logout">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                       @csrf
                                    </form>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>