<header id="mainmenu" class="header-v1 header-border header-fix header-bg-white" data-0="padding:10px;padding-left:40px;padding-right:40px;" data-251="padding:10px; padding-left:40px;padding-right:40px;top:0;">
    <div id="info" class="topbar topbar-position topbar-dark hide-topbar" data-0="height:30px" data-251="height:0;">

        <div class="col-md-12">
            <p class="text-cap hidden-xs">Tel: +961 1 746236</p>
            <p class="text-cap"> info@innodevlb.org</p>
        </div>

    </div>
    <div class="left-header">
        <ul class="navi-level-1">
            <li><a href="index.php" class="logo"><img src="images/logo/logo.png" class="img-responsive" alt="Image"></a></li>
        </ul>
    </div><!-- End Left Header -->
    <nav>
        <ul class="navi-level-1 hover-style-6 main-navi">
            <li <?php if($pagename=='index'){ echo 'class="active"'; } ?> ><a href="index.php"><span>Home</span></a></li>
            <li <?php if($pagename=='about'){ echo 'class="active"'; } ?> ><a href="about.php"><span>About </span></a></li>
            <li <?php if($pagename=='projects'){ echo 'class="active"'; } ?> ><a href="projects.php"><span>Projects</span></a></li>
            <li <?php if($pagename=='news'){ echo 'class="active"'; } ?> ><a href="news.php"><span>News</span></a></li>
            <li <?php if($pagename=='hub'){ echo 'class="active"'; } ?> ><a href="hub.php"><span>HUB</span></a></li>
            <li <?php if($pagename=='action'){ echo 'class="active"'; } ?> ><a href="action.php"><span>Take Action</span></a></li>
            <li <?php if($pagename=='contact'){ echo 'class="active"'; } ?> ><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
    </nav><!-- End Nav -->

    <div class="right-header">
        <ul class="navi-level-1 sub-navi seperator-horizonal-line hover-style-4">
            <li class="header-tel"><a class="tel-header" href="">Tel: +961 1 746236</a></li>

            <!-- Testing Search Box -->
            <li >
                <a  href="#" data-toggle="modal" data-target="#myModal" id="btn-search" class="reset-btn btn-in-navi"><span aria-hidden="true" class="icon_search"></span></a>
            </li>
            <li>
                <a href="#/"  class="mm-toggle">
                    <span aria-hidden="true" class="icon_menu"></span>
                </a>
            </li>
        </ul>

    </div><!-- End Right Header -->
</header>
<!-- End  Header -->