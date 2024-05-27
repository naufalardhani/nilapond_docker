<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="assets/img/logo.png" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
                
                <li class='sidebar-title'>Main Menu</li>
                
            
                
                <li class="sidebar-item {{ Route::currentRouteName() === 'admin_index' ? 'active' : '' }}">
                    <a href="{{ route('admin_index') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>          
                </li>

                <li class="sidebar-item {{ Route::currentRouteName() === 'add_product' ? 'active' : '' }}">
                    <a href="{{ route('add_product') }}" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Add Products</span>
                    </a>          
                </li>

                <li class="sidebar-item {{ Route::currentRouteName() === 'list_product' ? 'active' : '' }}">
                    <a href="{{ route('list_product') }}" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>List Products</span>
                    </a>          
                </li>

                <li class="sidebar-item has-sub {{ 
                Route::currentRouteName() === 'add_income' || 
                Route::currentRouteName() === 'list_income' || 
                Route::currentRouteName() === 'add_outcome' || 
                Route::currentRouteName() === 'list_outcome' 
                ? 'active' : '' 
                }}">
                    <a href="{{ route('admin_index') }}" class='sidebar-link'>
                    <i data-feather="dollar-sign" width="20"></i> 
                        <span>Finance</span>
                    </a>          
                    <ul class="submenu ">
                        
                        <li>
                            <a href="{{route('add_income')}}">Add Income</a>
                        </li>
                        <li>
                            <a href="{{route('list_income')}}">List Income</a>
                        </li>
                        
                        <li>
                            <a href="{{route('add_outcome')}}">Add Outcome</a>
                        </li>
                        
                        <li>
                            <a href="{{route('list_outcome')}}">List Outcome</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item {{ Route::currentRouteName() === 'list_contact' ? 'active' : '' }}">
                    <a href="{{ route('list_contact') }}" class='sidebar-link'>
                        <i data-feather="archive" width="20"></i> 
                        <span>Contact</span>
                    </a>          
                </li>

                <li class='sidebar-title'>Other</li>

                <li class="sidebar-item ">
                    <a href="{{ route('auth_logout') }}" class='sidebar-link'>
                        <i data-feather="tool" width="20"></i> 
                        <span>Web Settings</span>
                    </a>          
                </li>

                <li class="sidebar-item ">
                    <a href="{{ route('auth_logout') }}" class='sidebar-link'>
                        <i data-feather="log-out" width="20"></i> 
                        <span>Logout</span>
                    </a>          
                </li>
                

                
            
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>