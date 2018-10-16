<?php
if (isset($_GET['section'])) {
    switch ($_GET['section']) {
        case 'home':
            include 'src/view/homepageView.php';
            break;

        case 'onglet2':
        include 'src/model/onglet2Model.php';
            include 'src/view/sections/onglet2View.php';
            break;

        case 'onglet3':
            include 'src/view/sections/onglet3View.php';
            break;

        default:
            include 'src/view/homepageView.php';
            break;
    }
}
else{
    include 'src/view/homepageView.php';
}