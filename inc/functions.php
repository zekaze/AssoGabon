<?php
function afficher_date($date = null){
    date_default_timezone_set('Africa/Libreville');
    setlocale(LC_TIME, 'fr_FR.utf','fra');
    $return = null;
    $return .= strftime("%A %d %B %Y", strtotime($date));
    $return .= " à ".date("G", strtotime($date))."h".date("i", strtotime($date));

    return $return;
}

function afficher_date_event($date = null)
{
    date_default_timezone_set('Africa/Libreville');
    setlocale(LC_TIME, 'fr_FR.utf', 'fra');
    $return = null;
    $return .= "Date événement : " . strftime("%d %B %Y", strtotime($date));
    $return .= " à " . date("G", strtotime($date)) . "h" . date("i", strtotime($date));
}