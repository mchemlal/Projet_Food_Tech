<div class="header-small">
   
   <div>
      <span><a href="index.php?page=home"><img src="./_assets/image/Logo_gris.png" width="90" height="auto" alt="logo feeling food"></a></span>
   </div>

   <div class="search">
       <button type="submit" name="headerSearchSubmit" value="searched"><i class="fas fa-search"></i></button>
       <input type="text" placeholder="search for anything..." name ="headerSearch"/>
   </div>

 
       <ul class="mainNav">
           <li><a href="index.php?page=restaurant">Food</a></li>
           <li><a href="index.php?page=restaurant">Drinks</a></li>
           <li><a href="index.php?page=restaurant">Categories</a></li>
           <li><a href="index.php?page=restaurant">Restaurants</a></li>
           <li><a href="index.php?page=restaurant">Specials</a></li>
        </ul>

   <div>
   <?php if(!isset($_SESSION['username'])) : ?>
      <ul class="block-bouton">
         <li class="but"><a class="btnHeader btnhA" href="index.php?page=signup">Sign Up</a></li>
         <li class="but"><a class="btnHeader btnhB" href="index.php?page=login">Log In</a></li>
      </ul>
      <?php else : ?>
         <ul class="block-bouton">
            <li class="but"><a class="btnHeader btnhA" href="index.php?page=profile">Profile</a></li>
            <li class="but"><a class="btnHeader btnhB" href="index.php?page=logout">Log Out</a></li>
            <li><a  href="index.php?page=shoppingcart"><i class="fas fa-cart-arrow-down fa-2x logoCart"></i></a></li>
      </ul>
      <?php endif; ?>
   </div>
</div>