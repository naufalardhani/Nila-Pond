<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="assets/img/logo.png" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
                
                <li class='sidebar-title'>Main Menu</li>
                
            
                
                <li class="sidebar-item active ">
                    <a href="{{ route('admin_index') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>          
                </li>

                <li class="sidebar-item ">
                    <a href="{{ route('add_product') }}" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Add Products</span>
                    </a>          
                </li>

                <li class="sidebar-item ">
                    <a href="{{ route('list_product') }}" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>List Products</span>
                    </a>          
                </li>

                <li class="sidebar-item ">
                    <a href="{{ route('admin_index') }}" class='sidebar-link'>
                        <i data-feather="dollar-sign" width="20"></i> 
                        <span>Finance</span>
                    </a>          
                </li>

                <li class="sidebar-item ">
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