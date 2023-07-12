<?php
    function render($path) {
        ob_start();
        include $path;
        $content = ob_get_contents();
        ob_end_clean();

        include_once __DIR__."/../view/layout/main.view.php";
    }
?>