<?php
include_once __DIR__.'/GoogleImageSearch.php';

$imageSearch = new GoogleImageSearch();
if($results = $imageSearch->search('http://upload.wikimedia.org/wikipedia/commons/2/22/Turkish_Van_Cat.jpg', 2)) {
    if($results['search_results']) {
        echo "Best guess: <strong><a href=\"{$results['best_guess'][1]}\">{$results['best_guess'][0]}</strong><br />\n";
        echo "<ol><br />\n";
        foreach($results['search_results'] as $k => $r) {
            echo "<li><a href=\"{$r[1]}\">{$r[0]}</a></li>\n";
        }
        echo "</ol><br />\n";
    } else {
        echo 'Nothing found';
    }

}