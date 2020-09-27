<?php
    $cafeID = $_GET['ci'];
    $url = "https://apis.naver.com/cafe-web/cafe2/ArticleList.json?search.clubid={$cafeID}&search.queryType=lastArticle&search.page=1";
    require('./api/src/snoopy/Snoopy.class.php');
    $snoopy = new Snoopy;
    $snoopy->agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36";
    $snoopy->fetch($url);
    $json = $snoopy->results;
    header('Content-Type: application/json');
    $obj = json_decode($json,true);
    echo $obj[message][result][cafeName];
?>