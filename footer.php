<footer>
    <div class="container d-flex flex-column">
        <div class="row">
                <div class="col-md-3">    
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_white.svg" class="logo">
                    <p class="oben3">P:(800)997-9774</p>
                    <p>INFO@STACKFUEL.COM</p>
                    <div class="form-group">
                        <select class="form-control reduzieren" id="auswahl">
                            <option>🌍 ENGLISH</option>
                            <option>🌍 DEUTSCH</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <p>Explore</p>
                    <p>HOME</p>
                    <p>PORTFOLIO</p>
                    <p>CONTACT</p>
                </div>
                <div class="col-md-2">
                    <p>CONNECT</p>
                    <p>Twitter</P>
                    <p>Facebook</p>
                    <p>Google+</p>
                    <p>LinkedIn</p>
                </div>
                <div class="col-md-4">
                    <p>&nbsp;&nbsp; NEWSLETTER SUBSCRIBE</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 abstand">
                                <p><input class="my_email" placeholder="Email">
                            </div>
                            <div class="col-md-5 abstand mb-3">
                                <button type="button" class="btn button-more1 ">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 copyright">
                © <?php echo date('Y');?> Stackfuel, Inc. <span class="privacy">Privacy Policy, Terms of Service
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
