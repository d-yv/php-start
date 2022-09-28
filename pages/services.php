<?php
    $json_data = get_db_table("VagonGiveaway");
    // debug ($json_data);
    // chdir('..');
    // $form = getForm('example');
    // $form->show();

    foreach($json_data as $item):
        echo $item->guid.' ('.$item->date.')'.'<br>';
        foreach($item->cars as $cars):
            echo $cars->number.'<br>';
        endforeach;
    endforeach

?>