<footer class="footer" id="footer">
<?php get_sidebar('footer'); ?>
<div class="footer-menu"><?php wp_nav_menu(array('theme_location'=>'footer')); ?></div>
<div class="footer__credits-row">  
        <div class="bl-copyright">
        <?php echo "&copy;" . ' ' . date("Y") . ' '; bloginfo('name');?>. All rights reserved.
        </div>
        <div class="bl-websitecredit">
        Web Design by <a href="http://bluelotusmedia.com">Blue Lotus Media</a>
        </div>
</div>

<div class="bl-spacer"></div>

</footer>
	<?php wp_footer(); ?>
    	</div> <!-- .container/#main_content -->
        
        
       
	</body>
</html>