<!-- Save this as resources/views/sidebar.blade.php -->
<style>
    /* Main sidebar styles */
    .sidebar {
        min-height: 100vh;
        background-color: #f8f9fa;
        border-right: 1px solid #dee2e6;
        padding: 20px 15px;
        transition: all 0.3s;
    }
    .sidebar-collapsed {
        width: 70px;
        padding: 20px 5px;
    }
    .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        font-weight: bold;
        border-bottom: 1px solid #dee2e6;
        margin-bottom: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .sidebar .list-group-item {
        border: none;
        padding: 0.75rem 1.25rem;
        background-color: transparent;
        display: flex;
        align-items: center;
    }
    .sidebar .list-group-item-action:hover {
        background-color: #e9ecef;
        border-radius: 4px;
    }
    .sidebar .list-group-item-action.active {
        background-color: #0d6efd;
        color: white;
    }
    .sidebar-icon {
        margin-right: 10px;
        font-size: 1.1rem;
        min-width: 20px;
        text-align: center;
    }
    
    /* Toggle button styles */
    .sidebar-toggle {
        cursor: pointer;
        background: none;
        border: none;
        color: #212529;
        padding: 0;
    }
    
    /* Submenu styles */
    .submenu {
        list-style: none;
        padding-left: 0;
        margin-left: 2.5rem;
    }
    .submenu-item {
        padding: 0.5rem 0;
    }
    .submenu-link {
        color: #6c757d;
        text-decoration: none;
        display: block;
        padding: 0.4rem 0.75rem;
        border-radius: 4px;
    }
    .submenu-link:hover {
        background-color: #e9ecef;
        color: #212529;
    }
    
    /* Dropdown indicator */
    .dropdown-indicator {
        margin-left: auto;
        transition: transform 0.3s;
    }
    .dropdown-indicator.open {
        transform: rotate(180deg);
    }
    
    /* Collapsed sidebar text hiding */
    .sidebar-collapsed .menu-text,
    .sidebar-collapsed .dropdown-indicator,
    .sidebar-collapsed .sidebar-heading-text {
        display: none;
    }
    .sidebar-collapsed .submenu {
        display: none;
    }
    .sidebar-collapsed .sidebar-heading {
        justify-content: center;
        padding: 0.875rem 0.5rem;
    }
    .sidebar-collapsed .list-group-item {
        justify-content: center;
        padding: 0.75rem 0.5rem;
    }
    .sidebar-collapsed .sidebar-icon {
        margin-right: 0;
        font-size: 1.3rem;
    }
</style>

<div id="sidebar" class="col-md-3 col-lg-2 sidebar">
    <div class="sidebar-heading">
        <span class="sidebar-heading-text">Menu</span>
        <button class="sidebar-toggle" id="sidebarToggle">
            <i class="bi bi-chevron-left"></i>
        </button>
    </div>
    <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action active">
            <i class="bi bi-speedometer2 sidebar-icon"></i>
            <span class="menu-text">Dashboard</span>
        </a>
        
        <!-- Products with submenu -->
        <a href="#" class="list-group-item list-group-item-action submenu-toggle" data-target="productSubmenu">
            <i class="bi bi-box sidebar-icon"></i>
            <span class="menu-text">Products</span>
            <i class="bi bi-chevron-down dropdown-indicator"></i>
        </a>
        <div class="submenu" id="productSubmenu" style="display: none;">
            <div class="submenu-item">
                <a href="#" class="submenu-link">All Products</a>
            </div>
            <div class="submenu-item">
                <a href="#" class="submenu-link">Add New</a>
            </div>
            <div class="submenu-item">
                <a href="#" class="submenu-link">Categories</a>
            </div>
        </div>
        
        <!-- Orders with submenu -->
        <a href="#" class="list-group-item list-group-item-action submenu-toggle" data-target="orderSubmenu">
            <i class="bi bi-cart sidebar-icon"></i>
            <span class="menu-text">Orders</span>
            <i class="bi bi-chevron-down dropdown-indicator"></i>
        </a>
        <div class="submenu" id="orderSubmenu" style="display: none;">
            <div class="submenu-item">
                <a href="#" class="submenu-link">All Orders</a>
            </div>
            <div class="submenu-item">
                <a href="#" class="submenu-link">Pending</a>
            </div>
            <div class="submenu-item">
                <a href="#" class="submenu-link">Completed</a>
            </div>
        </div>
        
        <a href="#" class="list-group-item list-group-item-action">
            <i class="bi bi-people sidebar-icon"></i>
            <span class="menu-text">Customers</span>
        </a>
        
        <a href="#" class="list-group-item list-group-item-action">
            <i class="bi bi-graph-up sidebar-icon"></i>
            <span class="menu-text">Reports</span>
        </a>
        
        <!-- Settings with submenu -->
        <a href="#" class="list-group-item list-group-item-action submenu-toggle" data-target="settingsSubmenu">
            <i class="bi bi-gear sidebar-icon"></i>
            <span class="menu-text">Settings</span>
            <i class="bi bi-chevron-down dropdown-indicator"></i>
        </a>
        <div class="submenu" id="settingsSubmenu" style="display: none;">
            <div class="submenu-item">
                <a href="#" class="submenu-link">General</a>
            </div>
            <div class="submenu-item">
                <a href="#" class="submenu-link">User Accounts</a>
            </div>
            <div class="submenu-item">
                <a href="#" class="submenu-link">Permissions</a>
            </div>
        </div>
    </div>
</div>

<!-- Add this JavaScript at the bottom of your blade file or in a separate JS file -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle sidebar collapse
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        
        if (sidebarToggle && sidebar) {
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('sidebar-collapsed');
                
                // Change toggle icon direction
                const icon = sidebarToggle.querySelector('i');
                if (sidebar.classList.contains('sidebar-collapsed')) {
                    icon.classList.remove('bi-chevron-left');
                    icon.classList.add('bi-chevron-right');
                } else {
                    icon.classList.remove('bi-chevron-right');
                    icon.classList.add('bi-chevron-left');
                }
            });
        }
        
        // Custom submenu toggle implementation (not relying on Bootstrap collapse)
        const submenuToggles = document.querySelectorAll('.submenu-toggle');
        submenuToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('data-target');
                const submenu = document.getElementById(targetId);
                const dropdownIndicator = this.querySelector('.dropdown-indicator');
                
                if (submenu) {
                    // Toggle submenu visibility
                    if (submenu.style.display === 'none' || submenu.style.display === '') {
                        submenu.style.display = 'block';
                        if (dropdownIndicator) {
                            dropdownIndicator.classList.add('open');
                        }
                    } else {
                        submenu.style.display = 'none';
                        if (dropdownIndicator) {
                            dropdownIndicator.classList.remove('open');
                        }
                    }
                }
            });
        });
    });
</script><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/htmlcodes/sidebar.blade.php ENDPATH**/ ?>