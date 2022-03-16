<?php

function get_data($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
if (isset($_GET['IPL-live-score'])) {

    $link = "https://www.cricbuzz.com/api/cricket-match/commentary/40353";

    $data = get_data($link);
    $c_j = json_decode($data, true);
    echo "<pre>";
    //print_r($c_j['commentaryList'][1]['batTeamName']);
    print_r($c_j);
    echo "</pre>";
}

if (isset($_GET['report'])) {
    $link = "https://www.cricbuzz.com/api/html/matches-menu";

    $data = get_data($link);
    echo "<pre>";
    //print_r($c_j['commentaryList'][1]['batTeamName']);
    print_r($data);
    echo "</pre>";
}
