    <header style="direction:rtl;font-family:Droid Arabic Kufi" class="header navbar-area">
      <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="">
                            <img src="{{asset('assets/images/logo/logo-cde-r.png')}}">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{url('/ar')}}">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#features" class="page-scroll"
                                        aria-label="Toggle navigation">من نحن</a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0)" aria-label="Toggle navigation">الخصوصية</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="javascript:void(0)" aria-label="Toggle navigation">الفريق</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="javascript:void(0)" aria-label="Toggle navigation">تواصل  معنا</a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0)" aria-label="Toggle navigation">  </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('/en')}}" aria-label="Toggle navigation"><i class="lni lni-cog">&nbsp;English</i> </a>
                                </li>
                            </ul>
                        </div> <!-- navbar collapse -->
                        <?php
                        $current_page = basename($_SERVER['PHP_SELF']);
                        if ($current_page === 'inscription.php') {
                        ?>

                        <?php
                        } else {
                        ?>
                        <div class="button add-list-button">
                            <a href="{{url('/ar/insc')}}" class="btn" style="background-color: #16e7c4;color:white;border-color: transparent;">التسجيل في المنصة</a>
                        </div>
                        <?php
                        }
                        ?>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </header>