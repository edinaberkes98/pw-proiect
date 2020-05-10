<header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation" class="navbar navbar-main navbar-expand-lg navbar-theme-primary navbar-dark">
        <div class="container position-relative">
            <a class="text-white mr-lg-5" href="<?php echo $base_url ?>">
                <h1 class="h5 m-0">TW Proiect - Plots</h1>
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a class="text-white mr-lg-5" href="<?php echo $base_url ?>">
                                <h1 class="h5 m-0">TW Proiect - Plots</h1>
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo $base_url ?>" class="nav-link">
                            <span class="nav-link-inner-text">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $base_url . 'submit-plot.php' ?>" class="nav-link">
                            <span class="nav-link-inner-text">Generate plot</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $base_url . 'history.php' ?>" class="nav-link">
                            <span class="nav-link-inner-text">History</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</header>