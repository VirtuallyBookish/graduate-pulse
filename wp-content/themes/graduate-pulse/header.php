<!DOCTYPE html>

<html lang="en">
<head>
    <title>Graduate Pulse</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1>
            <a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
        </h1>
        <h2><?php echo get_bloginfo( 'description' ); ?></h2>
    </header>
