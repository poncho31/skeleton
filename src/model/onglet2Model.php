<?php
// require_once __DIR__ . '/vendor/autoload.php';
use appName\Database\Database;

$db = new Database();
if (!isset($echo)){
    $stmt = $db->getQuery("SELECT nom, date, realisateur FROM film GROUP BY nom");
    $echo = '<table class="table">
            <thead>
                <tr>
                    <td>Date</td>
                    <td>Film</td>
                    <td>Réalisateur</td>
                </tr>
            </thead>';
    foreach ($stmt as $value) {
        $echo .= '<tbody>
                    <tr>
                        <td>'.date('Y',strtotime($value->date)).'</td>
                        <td>'.$value->nom.'</td>
                        <td>'.$value->realisateur.'</td>
                    </tr>
                 </tbody>';
    }
    $echo .= '</table>';
}