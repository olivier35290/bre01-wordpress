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
    <body>
        <?php  
        	$menuItems = getNavigationMenu();  
        ?>

         <header>

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
        <section class="title">
            <h1 class="title_h1">YEPFOLIO</h1>
            <h2 class="title_h2">DEVELOPPEMENT WEB & MOBILE</h2>
        </section>
    </header>
        <main>
 
    	    <section class="intro">
    	    <h2 class="projetTitle">YEPFOLIO EN QUELQUES MOTS</h2>
    	    <p>ipsum dolor sit amet, consectetuer adipiscing elit,
    	    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
    	    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
    	    quis nostrud exerci tation ullamcorper suscipit lobortis nisl
    	    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
    	    dolor in hendrerit in vulputate velit esse molestie consequat,
    	    vel illum dolore eu feugiat nulla facilisis at vero eros et
    	    accumsan et iusto odio dignissim qui blandit praesent luptatum
    	    zzril delenit augue duis dolore te feugait nulla facilisi.
    	    Nam liber tempor cum soluta nobis eleifend option congue
    	    nihil imperdiet doming id quod mazim placerat facer possim
    	    assum. Typi non habent claritatem insitam; est usus legentis
    	    in futurum.</p>
    	    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
    	    sed diam nonummy nibh euismod tincidunt ut laoreet dolore
    	    magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
    	    quis nostrud.</p>
    	    </section>
    	    <section class="projets">
    	        <h3>MES DERNIERS PROJETS</h3>
    	        <div class="cards">
    	            <article class="card pharma">
                            <h4>Application santé</h4>
        	                <p class="subTitle">Pharmacie de Maurepas</p>
    	            </article>
    	             <article class="card book">
    	                <h4>Site E-commerce</h4>
    	                <p class="subTitle">Librairie l'écume des jours</p>
    	            </article>
    	             <article class="card bread">
    	                <h4>Site vitrine</h4>
    	                <p class="subTitle">Boulangerie Cartier</p>
    	            </article>
    	             <article class="card insti">
    	                <h4>Site Institutionnel</h4>
    	                <p class="subTitle">Mairie de Ploutruc</p>
    	            </article>
    	             <article class="card festi">
    	                <h4>Site promotionnel</h4>
    	                <p class="subTitle">Festival des choses</p>
    	            </article>
    	        </div>
    	    </section>
	   </main>
        <footer>
            
            <h2>ME CONTACTER</h2>
            <div class="formulaire">
                  <form action="#">
                    <label for="prenom">Prénom + nom</label>
                    <input type="text" id="prenom" name="prenom" required>
            
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
            
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
            
                    <button type="submit">Envoyer</button>
                  </form>
            </div>
        </footer>
            

		<?php wp_footer(); ?>
	</body>
</html>
