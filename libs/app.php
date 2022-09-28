<?php 
    function get_db() {
        $content = file_get_contents('example.json');
        $json_data = json_decode($content);
        return $json_data;
    }
    

?>