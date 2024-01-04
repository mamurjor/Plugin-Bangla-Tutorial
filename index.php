<?php

/*

* Plugin Name: Blood Donation
* Plugin URI: 
* Description: Simple Bood Donation System
* Version: 1.0.0
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Hadi Jaman
* Author URI: https://www.facebook.com/hadijaman 



*/


if(!function_exists('mblooddonationlist')){
    function mblooddonationlist($atts = array(), $content=null,$tag=''){

       $attlist= array_change_key_case((array) $atts,CASE_LOWER);
        
       $getallatt= shortcode_atts(
                array(
                    'class' => "hadijaman",
                    'id'  =>"badboy",

                ),$attlist,$tag

        );
        $selfcontent='<div id='.esc_html($getallatt['id']).' class='.esc_html($getallatt['class']).'>';
        $selfcontent.=apply_filters('the_content',$content);
        $selfcontent.="</div>";

       return $selfcontent;
    }
}

if(!shortcode_exists('mbinfolist')){
    add_shortcode('mbinfolist','mblooddonationlist');
} 


if(!function_exists('formmethod')){
    function formmethod($atts = array(), $content=null,$tag=''){


       ob_start();
       ?>

<form action="" method="post">  
    <label for="username">User Name</label>
    <input type="text" name="usernmae" id="">

    <label for="username">Group Name</label>
    <input type="text" name="groupname" id="">

</form>
       <?php
$selfcontent = ob_get_clean();
       return $selfcontent;
    }
}

if(!shortcode_exists('form')){
    add_shortcode('form','formmethod');
} 


?>