<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" style="flex-grow:1;" href="#">Victoria Private University</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= ROOT ?>home">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>classes">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT ?>test">Test</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= ROOT ?>profile">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="<?= ROOT ?>signup">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>