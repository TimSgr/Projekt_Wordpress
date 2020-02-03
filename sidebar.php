<?php if(is_page() && !is_page(22) ) {?> 
    <aside>
        <h4>Haben Sie Fragen?</h4>
        <p>Nehmen Sie gerne Kontakt mit uns auf.</p>
    </aside>
<?php } ?>

<?php if(is_single()) {?> 
    <aside>
        <?php wp_list_categories();?>
    </aside>
<?php } ?>

<?php if(is_front_page()) {?> 
    <aside class="under">
        <h4>Herzlich Willkommen auf der Seite</h4>
    </aside>
<?php } ?>