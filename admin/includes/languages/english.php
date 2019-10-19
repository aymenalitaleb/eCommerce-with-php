<?php
function lang($phrase) {
    static $lang = array (

        // Homepage

        'MESSAGE' => 'Welcome',
        'ADMIN' => 'Administrator'

    );

    return $lang[$phrase];
}