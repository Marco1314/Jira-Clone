<?php
    function render($path, $include) {
        ob_start();
        include $path;
        $content = ob_get_contents();
        ob_end_clean();

        include_once $include;
    }
?>