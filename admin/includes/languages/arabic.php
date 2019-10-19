<?php
function lang($phrase) {
    static $lang = array (

        'MESSAGE' => 'أهلا وسهلا',
        'ADMIN' => 'المدير'

    );

    return $lang[$phrase];
}