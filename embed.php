<?php

@$title = $_GET['title'];
@$description = $_GET['description'];
@$image = $_GET['image'];
@$color = $_GET['color'];


@print '<meta property="og:title" content='.$title.'>';
@print '<meta property="og:description" content='.$description.'>';
@print '<meta property="og:image" content='.$image.'>';
@print '<meta name="theme-color" content=#'.$color.'>';