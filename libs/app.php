<?php 
    require_once('libs/json-form-generator/form.class.php');

    function get_db() {
        $content = file_get_contents('example.json');
        $json_data = json_decode($content);
        return $json_data;
    }
    function get_db_table($tablename){
        $all_db = get_db();
        return $all_db -> $tablename;
    }
    
    function getForm($formname) {
        $form = new Form(['file'=>"json/$formname"]);
        return $form;
    }
    function debug($var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
?>