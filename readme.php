<?php
    // Include the template manager
    include_once('library/TBS/tbs_class.php');
    $TBS = new clsTinyButStrong;

    $TBS->LoadTemplate('template/header.html');
    $TBS->LoadTemplate('template/readme.html', '+');
    $TBS->LoadTemplate('template/footer.html', '+');
    $template_path = 'template/';
    $title = 'RTFM';
    $breadcrumb = '<li class="active">How to use</li>';
    $TBS->Show();

?>
