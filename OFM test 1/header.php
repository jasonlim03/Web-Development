<header class="header">

   <div class="flex">

      <a href="userpage.php" class="logo">Fish Port</a>

      <nav class="navbar">
         <a href="userpage.php">Home</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($connection, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>