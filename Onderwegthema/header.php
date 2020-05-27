<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>


<header>

<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container uk-navbar">

    <?php wp_nav_menu(

        array(

            'theme_location' => 'top-menu',

        )

    );?>
    </nav>

</div>

</header>
