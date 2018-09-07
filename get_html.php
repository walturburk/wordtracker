<?php

function getAbsoluteURL($source_url, $relative_url)
{
    return $source_url['scheme']."://".$source_url['host'].$relative_url;
}

$url = 'https://w-shadow.com/blog/2009/10/20/how-to-extract-html-tags-and-their-attributes-with-php/';

$parsed_url = parse_url($url);

$domain = $parsed_url['host'];

$html = file_get_contents($url);

$dom = new DOMDocument;

@$dom->loadHTML($html);

$links = $dom->getElementsByTagName('a');

foreach ($links as $link) {

    $href = $link->getAttribute('href')."<br>";

    $parse = parse_url($href);

    if (!isset($parse['host'])) {
        $parse = parse_url(getAbsoluteURL($parsed_url, $href));
    }

    if ($parse['host'] == $domain) {

        

    } else {
        


    }
    
}

?>