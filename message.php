<?php
    if(isset($_SESSION['message'])) :
?>

    <div class="alert alert-warning " role="alert">
        <?= $_SESSION['message']; ?>
    </div>

<?php 
    unset($_SESSION['message']);
    endif;
?>