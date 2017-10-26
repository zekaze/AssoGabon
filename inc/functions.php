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

function kz_set_active($param = null){
    $active = null;
    if(isset($_GET['s'])){
        switch ($_GET['s']){
            case 'histoire':
                $active = 'histoire';
                break;
            case 'membres':
                $active = 'membres';
                break;
            case 'documents':
                $active = 'documents';
                break;
            case 'projets':
                $active = 'projets';
                break;
            default:
                $active = 'general';
        }
    }
    else{
        $active = 'general';
    }

    if($active == $param){
        return 'class="active"';
    }
}

function kz_afficher_contenu($user_type = null){
    $page_content = null;

    if ($user_type == 'expert'):
        switch ($_GET['s']) {
            case 'documents':
                $page_content = 'inc/content_documents.php';
                break;
            default:
                $page_content = 'inc/content_expert.php';
        }
    else:
        if (isset($_GET['s'])) {
            switch ($_GET['s']) {
                case 'histoire':
                    $page_content = 'inc/content_hisoire.php';
                    break;
                case 'membres':
                    $page_content = 'inc/content_membres.php';
                    break;
                case 'documents':
                    $page_content = 'inc/content_documents.php';
                    break;
                case 'projets':
                    $page_content = 'inc/content_projets.php';
                    break;
                default:
                    $page_content = 'inc/content_general.php';
            }
        } else {
            $page_content = 'inc/content_general.php';
        }
    endif;
    return $page_content;
}
function kz_color_class(){
    $class = null;
    $class = isset($_GET['u']) && $_GET['u'] == 'expert' ? "text-blue" : "text-green";

    return $class;
}