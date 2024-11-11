<?php
// include 'connection.php';
include 'classes/db1.php';
//include 'index11.php';
?> 

<link rel="stylesheet" href="style1.css">
    <!--font awersome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--googel fonts-->
    <!--slider link--> 
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<style>
  .menu-list, .menu-list *{
    width: max-content;
  }
  header{
    position: sticky;
  }
</style>
<!--Header selection starts -->
<header class="header p-4 shadow-md">
  <div class="container mx-auto flex justify-between items-center gap-2">
    <a href="#" class="logo text-2xl font-bold text-black">
      <span>DCS</span>Event
    </a>

    <nav class="navbar flex gap-2 space-x-4">
      <a href="#home" class="nav-item text-black">home</a>

      <div class="drop relative nav-item text-black">
        <!-- Trigger element -->
        <button class="rounded hover:bg-gray-100">
          Events 
          &triangledown;            
          <?php
            $all_events_types = getEventTypes();
          ?>

        </button>

        <!-- Dropdown menu -->
        <div class="dropdown-menu absolute shadow-md rounded hidden bg-white">
          <ul class="menu-list">
          <?php
          for($i = 0; $i < count($all_events_types); $i++){
            ?>
            <li class="relative group">
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                <?php echo $all_events_types[$i][1];  ?>
                  <?php
                    $all_events = getEvent_FromId($all_events_types[$i][0]);
                    // var_dump($all_events);
                  ?>

                  
                &triangleright;
              </a>
              <div class="submenu absolute left-full top-0 shadow-md mt-2 rounded hidden group-hover:block bg-white">
                <ul>
                  
                <?php
                    for($j = 0; $j < count($all_events); $j++){
                  ?>

                  <li>
                    <a href="register.php?event_id=<?php echo $all_events[$j][0]; ?>" class="block px-4 py-2 hover:bg-gray-100">
                      <?php echo $all_events[$j][1]; ?>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </li>
            
          <?php
          }
          // var_dump($all_events);
          ?>
            <!-- <li class="relative group">
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">Menu item 1 
              &triangleright;</a>
              <div class="submenu absolute left-full top-0 shadow-md mt-2 rounded hidden group-hover:block bg-white">
                <ul>
                  <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Submenu item 1</a></li>
                  <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Submenu item 2</a></li>
                </ul>
              </div>
            </li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Menu item 2</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Menu item 3</a></li> -->
          </ul>
        </div>
      </div>

      <!-- <a href="blog.html" class="nav-item">blog</a> -->
      <a href="#about" class="nav-item">about</a>
      <a href="#gallery" class="nav-item">gallery</a>
      <a href="#review" class="nav-item">review</a>
      <a href="#contact" class="nav-item">contact</a>
      <a href="#login" class="nav-item">login</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars text-black"></div>
  </div>
</header><!--Header selection ends-->
