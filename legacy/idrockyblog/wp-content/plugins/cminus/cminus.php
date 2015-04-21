<?php 

/* 

Plugin Name: Cmin.us Instant ShortURL 

Plugin URI: http://cmin.us 

Description: Creates a ShortURL, & puts a small Icon on your site to submit to Social Media Sites with ShortURL and Title. Auto-insert, Widget or Template Tag.

Author: Kris Jonasson, GraphicDreams

Author URI:  http://krisjaydesigns.com

Version: 1.6

*/   

add_action("the_content", "c_minus_display");  

add_action("admin_menu", "c_minus_admin_menu");

function curPageURL() {

       $pageURL = 'http';

        if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}

       $pageURL .= "://";

        if ($_SERVER["SERVER_PORT"] != "80") {

       $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];

            } else {

                    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

         }

          echo $pageURL;

       } 

function c_minus_display($content)  

{  

    $options["page"] = get_option("c_minus_page");  

    $options["post"] = get_option("c_minus_post");  

  

    if ( (is_single() && $options["post"]) || (is_page() && $options["page"]) )  

    {  

        $c_minus =  

        "<!-- cmin.us instant shortURL wordpress plugin. download from www.cmin.us and get instant shortURLs and bookmarking submition. made by kris jonasson. www.krisjaydesigns.com -->

	<div id=\"cminus\"><a rel=\"nofollow\" class=\"click\" href=\"http://cmin.us/bookmark?url=".get_permalink()."\" onclick=\"return show_hide_box(this, 270, 220, '0px solid')\"><img src=\"".get_bloginfo('url')."/wp-content/plugins/cminus/submitcminus.png\" style=\"z-index:100;\"/></a></div>

";     

        return $content . $c_minus;  

    } else {  

        return $content;  

    }  

}  

function c_minus_settings()  

{    

    if ($_POST["action"] == "update")  

    {  

        $_POST["show_pages"] == "on" ? update_option("c_minus_page", "checked") : update_option("c_minus_page", "");  

        $_POST["show_posts"] == "on" ? update_option("c_minus_post", "checked") : update_option("c_minus_post", "");  

        $message = "";  

    }    

    $options["page"] = get_option("c_minus_page");  

    $options["post"] = get_option("c_minus_post");   

    echo "

    <div class=\"optionswrap\"> 

        ".$message." 

                 <h2>Cmin.us ShortURL Settings</h2>

- &copy; Created by <a href=\"http://krisjaydesigns.com\" target=\"_blank\">Kris Jay</a> &amp; <a href=\"http://gdsweb.ca\" target=\"_blank\">Graphic Dreams</a> 

             <h3>When to Display Cmin.us Icon</h3> 

        <form method=\"post\" action=\"\"> 

        <input type=\"hidden\" name=\"action\" value=\"update\" />  

        <br/>

        <input name=\"show_pages\" type=\"checkbox\" id=\"show_pages\" ".$options["page"]." style=\"margin:20px 20px 20px 40px;\"/>On Pages<br /> 

        <input name=\"show_posts\" type=\"checkbox\" id=\"show_posts\" ".$options["post"]." style=\"margin:20px 20px 20px 40px;\"/>On Posts<br /> 

        <br /> 

        <input type=\"submit\" class=\"button-primary\" value=\"Save Changes\" style=\"margin:10px 0px 0px 50px;\"/> 

        </form> 

        <br/><br/><h4>Use the Following Template Tag to place the Icon Anywhere!</h4>

         <blockquote style=\"padding:22px;border:1px dashed #7b7b7b;width:200px;\">&lt;&#63;php c_minus_widget(); &#63;&gt;</blockquote>

        <br/><br/><h5>Go To Your Widgets Page To Add To Your Sidebar!</h5>

          <blockquote><a href=\"/wp-admin/widgets.php\">CLICK HERE TO ADD TO YOUR SIDEBAR</a></blockquote>

              

    </div>";  

}   

function c_minus_admin_menu()  

{  

    add_options_page("Cmin.us ShortURL", "Cmin.us ShortURL", 8, cminuspage, "c_minus_settings");  

}

function widget_c_minus() {

        ?>

        <?php echo $before_widget; ?>

        <!-- cmin.us instant shortURL wordpress plugin. download from www.cmin.us and get instant shortURLs and bookmarking submition. made by kris jonasson. www.krisjaydesigns.com -->

          <div id="cminus_widget1"><a rel="nofollow" class="click" href="http://cmin.us/bookmark?url=<?php echo curPageURL(); ?>" onclick="return show_hide_box(this, 270, 220, '0px solid')"><img src="<?php bloginfo('url'); ?>/wp-content/plugins/cminus/submitcminus.png" style="z-index:100;"/></a></div>

        <?php echo $after_widget; ?>

        <?

}

register_sidebar_widget('Cmin.us ShortURL', 'widget_c_minus');

function c_minus_widget() {

        ?>

        <?php echo $before_widget; ?>

        <!-- cmin.us instant shortURL wordpress plugin. download from www.cmin.us and get instant shortURLs and bookmarking submition. made by kris jonasson. www.krisjaydesigns.com -->

          <div id="cminus_widget2"><a rel="nofollow" class="click" href="http://cmin.us/bookmark?url=<?php echo curPageURL(); ?>" onclick="return show_hide_box(this, 270, 220, '0px solid')"><img src="<?php bloginfo('url'); ?>/wp-content/plugins/cminus/submitcminus.png" style="z-index:100;"/></a></div>

        <?php echo $after_widget; ?>

        <?

}

add_action("wp_footer", "c_minus_style"); 

function c_minus_style()  

{ ?>   

   <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/plugins/cminus/cminusstyle.css" type="text/css" media="screen, projection"/><br />

     <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/cminus/click.js"></script>

 <? } ?>