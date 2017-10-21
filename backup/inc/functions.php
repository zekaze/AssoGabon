<?php
function afficher_date($date = null){
    date_default_timezone_set('Africa/Libreville');
    setlocale(LC_TIME, 'fr_FR.utf8','fra');
    $return = null;
    $return .= "Publié le : ".strftime("%A %d %B %Y", strtotime($date));
    $return .= " à ".date("G", strtotime($date))."h".date("i", strtotime($date));

    return $return;
}