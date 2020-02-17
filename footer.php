<footer>
    <div class="container d-flex flex-column">
        <div class="row">
                <div class="col-2">    
                    <img src="<?php bloginfo('template_url'); ?>/img/logo_white.svg" class="logo">
                    <p>P:(800)997-9774</p>
                    <p>INFO@STACKFUEL.COM</p>
                    <div class="form-group">
                        <select class="form-control reduzieren" id="auswahl">
                            <option>ENGLISH</option>
                            <option>DEUTSCH</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <p>Explore</p>
                    <p>HOME</p>
                    <p>PORTFOLIO</p>
                    <p>CONTACT</p>
                </div>
                <div class="col-2">
                    <p>CONNECT</p>
                    <p>Twitter</P>
                    <p>Facebook</p>
                    <p>Google+</p>
                    <p>LinkedIn</p>
                </div>
                <div class="col-6">
                    <p>NEWSLETTER SUBSCRIBE</p>
                    <p><input class="form-control" placeholder="Email">
                    <button type="button">Subscribe</button></p>
                </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>