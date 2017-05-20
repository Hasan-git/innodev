    <!-----------------------------------------------------------------+
       "#sidebar_left" Helper Classes:
    -------------------------------------------------------------------+
       * Positioning Classes:
        '.affix' - Sets Sidebar Left to the fixed position

       * Available Skin Classes:
         .sidebar-dark (default no class needed)
         .sidebar-light
         .sidebar-light.light
    -------------------------------------------------------------------+
       Example: <aside id="sidebar_left" class="affix sidebar-light">
       Results: Fixed Left Sidebar with light/white background
    ------------------------------------------------------------------->

   <!-- Start: Sidebar Left -->
    <aside id="sidebar_left" class="nano nano-primary affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Left Menu -->
        <ul class="nav sidebar-menu">

          <li class="sidebar-label pt20">Main Menu</li>

          <li >
            <a href="index.php">
              <span class="glyphicon glyphicon-home"></span>
              <span class="sidebar-title">Dashboard</span>
            </a>
          </li>

		  <!-- sidebar bullets -->
          <li class="sidebar-label pt20">Projects</li>
		      <li >
            <a href="projects.php">
              <span class="fa fa-plus-square-o"></span>
              <span class="sidebar-title">Projects</span>
            </a>
          </li>


          <li class="sidebar-label pt20">EVENTS</li>
          <li >
            <a href="news.php">
              <span class="fa fa-bullhorn"></span>
              <span class="sidebar-title">News</span>
            </a>
          </li>

		      <li >
            <a href="activities.php">
              <span class="fa fa-flag"></span>
              <span class="sidebar-title">Activities</span>
            </a>
          </li>

          <li >
            <a href="events.php">
              <span class="fa fa-magic"></span>
              <span class="sidebar-title">Events</span>
            </a>
          </li>

        </ul>
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>
    <!-- End: Sidebar Left -->


    <script type="text/javascript">
    $(document).ready(function(){

        setNavigation()

        function setNavigation() {

          var Url = window.location.pathname.split(/[\s/]+/);
          var pageName = Url[Url.length-1]

              $("aside a").each(function () {
                  var href = $(this).attr('href');
                  if (pageName.substring(0, href.length) === href) {
                      $(this).closest('li').addClass('active');
                  }
              });
          }
    })
    </script>