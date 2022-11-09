<?php echo '

<script type="text/JavaScript">

var openCloseMenu = document.querySelector(".menu-btn");
    var nav = document.querySelector(".header-nav");
    var close = true;
    
    function openClose() {
        if(close) {
            nav.classList.add("nav-active");
            close = false;
        } else {
            nav.classList.remove("nav-active");
            close = true;
        }
    }

</script> ';

?>