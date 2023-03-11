<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

        <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
                <h1 class="logo"><a href="<?php echo base_url_front();?>">BizPage</a></h1>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero"><?php echo $content->header->home;  ?></a></li>
                        <li><a class="nav-link scrollto" href="#about"><?php echo $content->header->about; ?></a></li>
                        <li><a class="nav-link scrollto" href="#services"><?php echo $content->header->services?></a></li>
                        <li><a class="nav-link scrollto " href="#portfolio"><?php echo $content->header->tours?></a></li>
                        <li><a class="nav-link scrollto " href="#contact"><?php echo $content->header->contact?></a></li>
                        <li><a class="nav-link scrollto " href="#faq"><?php echo $content->header->faq?></a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </div>

    </div>
</header>
