    <header>
        <nav class="navbar navbar-expand-lg transparent navbar-transparent navbar-dark">
            <div class="container px-3">
               <a class="navbar-brand" href="./"><img src="assets/images/ntb-logo.svg" width="100px" alt /></a>
               <button class="navbar-toggler offcanvas-nav-btn" type="button">
                  <i class="bi bi-list"></i>
               </button>
               <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                  <div class="offcanvas-header">
                     <a href="index.html" class="text-inverse"><img src="assets/images/ntb-logo.svg" alt /></a>
                     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body pt-0 align-items-center">
                     <ul class="navbar-nav mx-auto align-items-lg-center">
                        <li class="nav-item">
                           <a class="nav-link <?php if($page=='Home'){echo 'active';}?>" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link <?php if($page=='About'){echo 'active';}?>" href="about">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link <?php if($page=='FAQ'){echo 'active';}?>" href="faq">FAQ's</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Gallery</a>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="season-2">Season 2.0</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link <?php if($page=='Contact'){echo 'active';}?>" href="contact">Contact</a>
                        </li>
                     </ul>
                     <div class="mt-3 mt-lg-0 d-flex align-items-center">
                        <a href="vote" class="btn btn-outline-danger me-2">Vote</a>
                        <a href="register" class="btn btn-danger">Register Now</a>
                     </div>
                  </div>
               </div>
            </div>
        </nav>
    </header>