<header>
    <div class="container">
        <div class="row">
            <div class="header-data">
                <div class="abc">
                    <div class="logo">
                        <a class="navbar-brand" href="#"><img src="{{url('image/logo.png')}}" alt="logo" height="40"
                                width="40"></a>
                    </div>
                    <div class="search-bar">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>

                <!-- start navbar -->
                <div class="d-flex">
                    <nav class="navbar navbar-expand-sm">
                        <div class="container-fluid">
                            <button class="navbar-toggler color-white" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="./">Home</a>
                                    </li>

                                    <div class="dropdown drop-btn">
                                        <button type="button" class="btn" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Companies
                                        </button>
                                        <div class="dropdown-menu drop-btn-link" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="Companies">Companies</a>
                                            <a class="dropdown-item" href="Company">Company Profile</a>
                                        </div>
                                    </div>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Profiles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Foods</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Messages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Notification</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="user-data dropdown">
                        <div class="user-info">
                            <img src="{{url('image/billgates.jpg')}}" alt="logo" height="40" width="40">
                            <a href="#" tittle="">B Pun</a>
                            <i class="fas fa-sort-down"></i>
                            <div class="dropdown user-login">
                                <h3>Online Status</h3>
                                <ul class="on-off">
                                    <li>
                                        <div class="bullet-btn">
                                            <input type="radio" name="on-off" id="on-off2">
                                            <label for="on-off2">
                                                <span></span>
                                            </label>
                                            <small>Online</small>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bullet-btn">
                                            <input type="radio" name="on-off" id="on-off2">
                                            <label for="on-off2">
                                                <span></span>
                                            </label>
                                            <small>Offline</small>
                                        </div>
                                    </li>
                                </ul>
                                <h3>Custom Status</h3>
                                <div class="search-btn">
                                    <form>
                                        <input type="search" aria-label="Search">
                                        <button type="submit">OK</button>
                                    </form>
                                </div>
                                <!--search-btn end-->
                                <h3>Setting</h3>
                                <ul class="term-links">
                                    <li><a href="#" title="">Account Setting</a></li>
                                    <li><a href="#" title="">Privacy</a></li>
                                    <li><a href="#" title="">Faqs</a></li>
                                    <li><a href="#" title="">Terms & Conditions</a></li>
                                </ul>
                                <h3 class="logout-btn"><a href="#" title="">Logout</a></h3>
                            </div>
                            <!--user-data end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>