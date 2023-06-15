<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/school/index.php' ? '' : 'collapsed' ?>" href="index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/school/user.php' ? '' : 'collapsed' ?>" href="user.php">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li><!-- End Dashboard Nav -->


    </ul>

</aside><!-- End Sidebar-->

