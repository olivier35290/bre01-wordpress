<?php   
$menuItems = getNavigationMenu();  
global $post;  
$post_title = $post->post_title;  
$thumbnail = get_the_post_thumbnail_url($post);  
?>  
  
<!DOCTYPE html>  
<html lang="fr">  
    <head>  
        <meta charset="utf-8" />  
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
        <title><?php echo get_bloginfo( 'name' );?></title>  
    </head>  
    <body id="post">  
    <header>  
        <figure>  
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Gaellan-Logo.svg" alt="Logo : une version schématique d'un cerveau et ses connexions"/>  
        </figure>  
        <nav>
            <ul class="list">
                <li><img class="img-nav" src="<?php echo get_template_directory_uri(); ?>/monordi.png" alt="logo"></li>
                
                <?php foreach($menuItems as $item) { ?>  
                    <li>  
                        <a href="<?= $item->url ?>">  
                            <?= $item->title ?>  
                        </a>  
                    </li>  
                <?php  
                }  
                ?>
                <?php  
    
                    $menuItems = getNavigationMenu();  
                    $data = getHomepageData();  
                      
                ?>
                <section id="about">  
                    <h2><?= $data["a-propos"]["titre"] ?></h2>  
                    <p>  
                        <?= $data["a-propos"]["contenu"] ?>  
                    </p>  
                </section>

            </ul>
        </nav>
    </header>  
    <main>  
        <figure>  
            <img src="<?= $thumbnail ?>" />  
        </figure>  
        <h2><?= $post_title; ?></h2>  
        <?php  
        // The Loop  
        if (have_posts()) :  
            while (have_posts()) :  
                the_post();  
                the_content();  
            endwhile;  
        else :  
            echo 'Nothing found';  
        endif;  
        ?>  
    </main>  
    <?php wp_footer(); ?>  
    </body>  
</html>