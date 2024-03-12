<!-- resources/views/navbar.blade.php -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo on the left -->
        <div class="navbar-brand">
            <a href="#">Job Board Portal</a>
        </div>
        
        <!-- Menu in the center -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item mr-5">
            <a style="text-transform: uppercase; font-weight: 800;" class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item mr-5">
            <a style="text-transform: uppercase; font-weight: 800;" class="nav-link" href="#">Jobs</a>
        </li>
        <li class="nav-item mr-5">
            <a style="text-transform: uppercase; font-weight: 800;" class="nav-link" href="#">Companies</a>
        </li>
        <li class="nav-item mr-auto"> <!-- Add mr-auto class here -->
            <a style="text-transform: uppercase; font-weight: 800;" class="nav-link" href="#">Categories</a>
        </li>

        <li class="nav-item">
            <a style="text-transform: uppercase; font-weight: 800;" class="nav-link" href="#">Contact</a>
        </li>
    </ul>
</div>

        <!-- Contact button on the right -->
        <div class="navbar-nav ml-auto">
            <a class="btn btn-primary" href="#">Post A Job</a>
        </div>
    </div>
</nav>
