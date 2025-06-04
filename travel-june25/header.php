<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Sticky Header</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/grid.css" />
  </head>
  <style>
   
  </style>
  <body>
     <header>
      <div class="header-container">
        <div class="row justify-content-between align-items-center top-bar">
          <div class="logo">
            <h3>Hamsafer</h3>
          </div>

          <!-- Desktop Menu -->
          <nav>
            <ul>
              <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>

              <li>
                <a href="#">Tours <i class="fas fa-angle-down"></i></a>
                <ul>
                  <li><a href="#">CharDham-Tour</a></li>
                  <li><a href="#">Domestic Tours</a></li>
                  <li><a href="#">International Tours</a></li>
                </ul>
              </li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <div class="button-sec">
            <a href="#" class="btn">Book Now</a>
            </div>


          </nav>
          <!-- Toggle -->
          <div class="toggle" id="toggleBtn"><i class="fas fa-bars"></i></div>
        </div>
      </div>

      <!-- Mobile Sidebar Nav -->
      <div class="mobile-nav" id="mobileNav">
        <div class="close-btn" id="closeBtn"><i class="fas fa-times"></i></div>
        <ul>
          <li><a href="#">Home</a></li>
          <li>
            <div class="dropdown-toggle">
              <a href="services.html">Services</a>
              <i class="fas fa-chevron-down dropdown-icon"></i>
            </div>
            <ul class="submenu">
              <li><a href="#">Wedding Photography</a></li>
              <li>
                <div class="dropdown-toggle">
                  <a href="#">Pre-Wedding</a>
                  <i class="fas fa-chevron-down dropdown-icon"></i>
                </div>
                <ul class="submenu">
                  <li><a href="#">Indoor</a></li>
                  <li><a href="#">Outdoor</a></li>
                </ul>
              </li>
              <li><a href="#">Candid</a></li>
            </ul>
          </li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
          <div class="button-sec">
            <a href="#" class="btn">Book Now</a>
            </div>

      </div>
    </header>

    