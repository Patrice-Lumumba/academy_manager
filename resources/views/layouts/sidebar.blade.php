<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{Auth()->user()->lastname}}</div>
    </a>

    <hr class="sidebar-divider my-0">


    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tableau de bord</span></a>
    </li>


    <hr class="sidebar-divider">


    <div class="sidebar-heading">
        Hotel
    </div>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
            <i class="fas fa-sitemap"></i>
            <span>Chambres</span>
        </a>
        <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options de la chambre :</h6>
                <a class="collapse-item" href="{{route('rooms.index')}}">Chambres</a>
                <a class="collapse-item" href="">Ajouter une chambre</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse2" aria-expanded="true" aria-controls="categoryCollapse">
            <i class="fas fa-users"></i>
            <span>Gestion des clients</span>
        </a>
        <div id="categoryCollapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion des clients :</h6>
                <a class="collapse-item" href="{{route('clients.index')}}">Clients</a>
                <a class="collapse-item"  href="{{route('clients.create')}}">Ajouter un client</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true" aria-controls="shippingCollapse">
            <i class="fas fa-truck"></i>
            <span>Reservations</span>
        </a>
        <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">=Options de la commande :</h6>
                <a class="collapse-item" href="{{route('order.index')}}">Reservations</a>
                <a class="collapse-item" href="{{route('order.create')}}">Ajouter une reservation</a>
            </div>
        </div>
    </li>



    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Postes
    </div>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCategoryCollapse" aria-expanded="true" aria-controls="postCategoryCollapse">
            <i class="fas fa-sitemap fa-folder"></i>
            <span>Messages</span>
        </a>
        <div id="postCategoryCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Options de la messagerie :</h6>
                <a class="collapse-item" href="">Messages</a>
                <a class="collapse-item" href="">Ajouter un message</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-comments fa-chart-area"></i>
            <span>Comments</span>
        </a>
    </li>


    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
       Parametres généraux
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
        <i class="fas fa-users"></i>
            <span>Utilisateurs</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('settings')}}">
            <i class="fas fa-cog"></i>
            <span>Paramètres</span></a>
    </li>

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
