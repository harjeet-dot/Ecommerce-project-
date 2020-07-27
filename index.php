<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>

<?php

    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

  

    /*  include banner ads  */
        include ('Template/_banner-ads.php');
    /*  include banner ads  */

    
    /*  include blog area  */
         include ('Template/_blogs.php');
    /*  include blog area  */

?>


<?php
// include footer.php file
include ('footer.php');
?>