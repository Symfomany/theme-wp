<?php
get_header(); ?>

  
    <!-- Intro Section -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-1 col-sm-8 intro-info wow fadeIn">
                    <div class="intro-info-content">
                        <h1><?php _e('We are Taiwa'); ?></h1>
                        <h3><?php _e('[:fr]Agence spécialisée dans les applications vocales et intelligence artificielle[:en]Agency specialized in voice applications and artificial intelligence'); ?></h3>
                       
                        <ul class="list-unstyled">
                        <!-- <li><a href=""><i class="fa fa-play"></i> Essayez-le</a></li> -->
                            <li><a target="_blank" title="<?php _e('Contact Taiwa, Specialized Agency for Voice Applications and Artificial Intelligence'); ?>"  href="#contact"><i class="fa fa-envelope"></i> <?php _e('[:fr]Contactez-nous[:en]Contact us'); ?></a></li>
                        </ul>
                    </div>
                </div><!-- Ends: .intro-info -->
                
                <div class="col-md-2 col-md-offset-1 col-sm-4 intro-image wow fadeIn">
                    <div class="intro-image-content">
                        <img alt="<?php _e('[:fr]Taiwa est une agence qui crée des applications pour Google Home et Google Home Mini[:en]Taiwa is an agency creating apps for Google Home and Google Mini'); ?>" src="<?php echo get_template_directory_uri() . '/assets/images/home.png' ?>" alt="" class="img-responsive">
                    </div>
                </div><!-- Ends: .intro-image -->
            </div>
        </div>
    </section><!-- Ends: .intro -->
    
    <!-- Services -->
    <section class="services" id="services">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2><?php _e('Services'); ?></h2>
               </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-box wow fadeIn" data-wow-delay="0.1s">
                        <div class="icon"><i class="fa fa-bolt"></i></div>
                        <h3><?php _e('Unique'); ?></h3>
                        <p><?php _e('[:fr]Personnaliser la relation avec vos utilisateurs en interagissant avec eux, créer un lien unique et quotidien entre vous et lui[:en]Personalize the relationship with your usersq by interacting with them, create a unique and daily link between them and you'); ?></p>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-box wow fadeIn" data-wow-delay="0.3s">
                        <div class="icon"><i class="fa fa-mobile"></i></div>
                        <h3><?php _e('[:fr]Intuitif[:en]Intuitive'); ?></h3>
                        <p><?php _e('[:fr]Des applications intuitives, faciles d’accès donnant de la satisfaction à vos utilisateurs par une conversation directe et personnalisée[:en]Intuitive, easy-to-access applications that give your users satisfaction through a direct, personalized conversation'); ?></p>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-box wow fadeIn" data-wow-delay="0.5s">
                        <div class="icon"><i class="fa fa-cube"></i></div>
                        <h3><?php _e('Original'); ?></h3>
                        <p><?php _e('[:fr]Attirer un nouveau public à s’intéresser à vous par une application vocale originale qui vous démarquera de vos concurrents[:en]Attract a new audience to take an interest in you with an original voice application that will set you apart from your competition'); ?></p>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="service-box wow fadeIn" data-wow-delay="0.7s">
                        <div class="icon"><i class="fa fa-eye"></i></div>
                        <h3><?php _e('[:fr]Réel[:en]Real'); ?></h3>
                        <p><?php _e('[:fr]La voix est le chemin le plus court vers la transmission de pensées, rapprochez-vous de vos utilisateurs par un dialogue continu et réel[:en]The voice is the shortest path to the transmission of thoughts, get closer to your users through a continuous and real dialogue') ?></p>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
            </div>
        </div>
    </section><!-- Ends: .services -->
    

    <!-- App Features -->
    <section class="app-features" id="features">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2><?php _e('[:fr]Fonctionnalités[:en]Features'); ?></h2>
               </div>
                <div class="col-md-4 col-sm-12">
                    <div class="features-left wow fadeInLeft">
                        <div class="feature-single">
                            <div class="feature-info">
                                <h3><?php _e('[:fr]Géolocalisation[:en]Geolocation'); ?></h3>
                                <p><?php _e('[:fr]Restez au plus proche de vos utilisateurs[:en]Stay close to your users'); ?></p>
                            </div>
                            <div class="feature-icon">
                                <span><i class="fa fa-map-marker"></i></span>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        <div class="feature-single">
                            <div class="feature-info">
                                <h3><?php _e('[:fr]Commerce[:en]Shopping'); ?></h3>
                                <p><?php _e('[:fr]Commandez simplement avec votre voix[:en]Simply order with your voice'); ?></p>
                            </div>
                            <div class="feature-icon">
                                <span><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        <div class="feature-single">
                            <div class="feature-info">
                                <h3><?php _e('[:fr]Actualités[:en]Topicality'); ?></h3>
                                <p><?php _e('[:fr]Partagez vos actualités et informations[:en]Share your news and information'); ?></p>
                            </div>
                            <div class="feature-icon">
                                <span><i class="fa fa-newspaper-o"></i></span>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        
                    </div>
                </div><!-- Ends: .col-sm-4 -->
                <div class="col-md-4 col-sm-12">
                    <div class="feature-image wow fadeInUp">
                        <img alt="<?php _e('Taiwa is an agency creating apps for Google Home and Google Mini'); ?>" src="<?php echo get_template_directory_uri() . '/assets/images/mini.png' ?>" alt="" class="img-responsive">
                    </div>
                </div><!-- Ends: .col-sm-4 -->
                <div class="col-md-4 col-sm-12">
                    <div class="features-right wow fadeInRight">
              
                        <div class="feature-single">
                            <div class="feature-icon">
                                <span><i class="fa fa-bell"></i></span>
                            </div>
                            <div class="feature-info">
                                <h3><?php _e('Notifications'); ?></h3>
                                <p><?php _e('[:fr]Plannifiez des tâches et restez informé[:en]Schedule tasks and stay informed'); ?></p>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        <div class="feature-single">
                            <div class="feature-icon">
                                <span><i class="fa fa-gamepad"></i></span>
                            </div>
                            <div class="feature-info">
                                <h3><?php _e('[:fr]Jeux[:en]Games'); ?></h3>
                                <p><?php _e('[:fr]Créez du plaisir pour vos utilisateurs[:en]Create fun for your users'); ?></p>
                            </div>
                        </div><!-- Ends: .feature-single -->
                        <div class="feature-single">
                            <div class="feature-icon">
                                <span><i class="fa  fa-music"></i></span>
                            </div>
                            <div class="feature-info">
                                <h3><?php _e('[:fr]Musiques[:en]Musics'); ?></h3>
                                <p><?php _e('[:fr]Diffusez vos playlists personnalisées[:en]Broadcast your custom playlists'); ?></p>
                            </div>
                        </div><!-- Ends: .feature-single -->
                   
                    </div>
                </div><!-- Ends: .col-sm-4 -->
            </div>
        </div>
    </section><!-- Ends: .app-features -->

    
    <!-- Testimonial -->
    <!-- <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header">
                    <h2>Tweets</h2>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="testimonial-slider owl-carousel wow fadeInUp">

                    <?php // foreach(getTweets() as $items){  ?>
                        <div class="slide-single">
                            <div class="client-text">
                                <p><?php // echo $items['text']; ?></p>
                            </div>
                        </div>
                    <?php // } ?>
                        <!-- Ends: .slide-single -->
                   
                    </div>
                    <!-- Ends: .testimonial-slider -->
                </div>
            </div>
        </div>
    </section> -->
    <!-- Ends: .testimonial -->


   
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2>Contact</h2>
               </div>
                <div class="col-md-8 col-sm-7">
                    <div class="contact-wrapper wow fadeInLeft" data-wow-delay="0.1s">
                        <form id="ajax-contact" method="post">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" minlength="2" placeholder="<?php _e('[:fr]Nom[:en]Name'); ?>" name="name"id="name"  required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" placeholder="<?php _e('E-Mail'); ?>" name="email" id="email" required>
                                </div>
                                <div class="col-sm-12">
                                    <textarea placeholder="<?php _e('Message'); ?>" name="message" id="message" required></textarea>
                                    <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                <div class="g-recaptcha" data-sitekey="6Le2T0EUAAAAAMGiY5aB_ksgRKoeuBcPck8rwMhR"></div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit"><i class="fa fa-envelope"></i> <?php _e('[:fr]Envoyer votre message[:en]Send your message'); ?></button>
                                </div>
                            </div>
                        </form>
                        <div id="form-messages"></div>

  
                    </div>
                </div><!-- Ends: .col-sm-8 -->
                <div class="col-md-4 col-sm-5">
                    <div class="contact-details wow fadeInRight" data-wow-delay="0.3s">
                        <h3><?php _e('[:fr]Restons en contact[:en]Get In Touch'); ?></h3>
                        <p><?php _e('[:fr]Contactez-nous et échangeons ensemble sur votre projet[:en]Contact us and discuss your project together'); ?></p>
                        <ul class="list-unstyled contact-info-list">
                            <li><i class="fa fa-phone"></i> <b><?php _e('[:fr]Tel[:en]Phone'); ?></b> <a target="_blank" href="tel:06.65.26.79.40‬">06.65.26.79.40‬</a></li>
                            <li><i class="fa fa-envelope"></i> <b><?php _e('E-mail'); ?></b> <a target="_blank" href="mailto:taiwa.agency@gmail.com">taiwa.agency@gmail.com</a></li>
                            <li><i class="fa fa-globe"></i> <b><?php _e('Site'); ?></b> <a target="_blank" href="http://www.taiwa.fr" title="Taiwa Agence spécialisée dans Google Assistant">http://www.taiwa.fr</a></li>
                        </ul>
                        <ul class="list-unstyled contact-social">
                            <li><a target="_blank"  title="[:fr]Contactez Taiwa - Agence spécialisée dans les applications vocales et intelligence artificielle[:en]Taiwa Agency - Specialized in Voice Applications and Artificial Intelligence" href="https://www.facebook.com/TaiwaAgency/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank"  title="[:fr]Contactez Taiwa - Agence spécialisée dans les applications vocales et intelligence artificielle[:en]Taiwa Agency - Specialized in Voice Applications and Artificial Intelligence"  href="https://twitter.com/TaiwaAgency"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" title="[:fr]Contactez Taiwa - Agence spécialisée dans les applications vocales et intelligence artificielle[:en]Taiwa Agency - Specialized in Voice Applications and Artificial Intelligence"  href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a target="_blank" title="[:fr]Contactez Taiwa - Agence spécialisée dans les applications vocales et intelligence artificielle[:en]Taiwa Agency - Specialized in Voice Applications and Artificial Intelligence"  href="https://www.instagram.com/taiwa.agency/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- Ends: .col-sm-4 -->
            </div>
        </div>
    </section><!-- Ends: .contact -->


<?php get_footer();
