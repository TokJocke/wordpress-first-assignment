</main>


<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- Sidebar "kort-om-oss som är redigerbar i adminpanelen -->
                <?php dynamic_sidebar("kort-om-oss");?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <!-- Sidebar "kontaktuppgifter som är redigerbar i adminpanelen -->
                <?php dynamic_sidebar("kontaktuppgifter");?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <!-- Get title from ACF field -->
                <h4><?= get_field("titel", "option");?></h4> 
                <?php 
                //Using acf fields for social media menu cuz the menu layout would not work with widgets
                // Check rows exists.
                    if( have_rows('sociala_medier_lista', 'option') ){
                        echo "<ul class='social'>";
                        // Loop through rows.
                        while( have_rows('sociala_medier_lista', 'option') ) {
                            the_row();  
                            // Load sub field value.
                            $icon = get_sub_field('icon', 'option');
                            $link = get_sub_field('link', 'option');
                            $name = get_sub_field('name', 'option');
                            // Do something...
                            echo "<li>";
                            echo '<i class="'.$icon.'"></i>';
                            echo '<a href="'.$link.'">'.$name.'</a>';
                            echo "</li>";
                            
                        // End loop.
                        }
                        echo "</ul>";
                        // Do something...
                    } 
                ?>



  
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Grupp X, 2016</p>
            </div>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>