<?php
include_once __DIR__.'/GoogleImageSearch.php';

$imageSearch = new GoogleImageSearch();
echo "Search by image URL: <br />\n";
if($results = $imageSearch->search('http://upload.wikimedia.org/wikipedia/commons/2/22/Turkish_Van_Cat.jpg', 2)) {
    if($results['search_results']) {
        echo "Best guess: <strong><a href=\"{$results['best_guess'][1]}\">{$results['best_guess'][0]}</strong><br />\n";
        echo "<ol><br />\n";
        foreach($results['search_results'] as $k => $r) {
            echo "<li><a href=\"{$r[1]}\">{$r[0]}</a> ; <a href=\"{$r[2]}\">Original image</a></li>\n";
        }
        echo "</ol><br />\n";
    } else {
        echo 'Nothing found';
    }

}
echo "Search by uploading local image: <br />\n";
if($results = $imageSearch->search('test.jpg', 2)) {
    if($results['search_results']) {
        echo "Best guess: <strong><a href=\"{$results['best_guess'][1]}\">{$results['best_guess'][0]}</strong><br />\n";
        echo "<ol><br />\n";
        foreach($results['search_results'] as $k => $r) {
            echo "<li><a href=\"{$r[1]}\">{$r[0]}</a> ; <a href=\"{$r[2]}\">Original image</a></li>\n";
        }
        echo "</ol><br />\n";
    } else {
        echo 'Nothing found';
    }

}