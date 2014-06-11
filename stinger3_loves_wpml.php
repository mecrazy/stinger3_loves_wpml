<?php

/*
Plugin Name: STINGER3 loves WPML
Plugin URI: http://mecrazy.net/2014/06/09/make-stinger3-compatible-with-wpml/
Description: This plugin make STINGER3(WordPress theme) compatible with WPML(Multilingual plugin).
Version: 1.0.1
Author: mecrazy
Author URI: http://mecrazy.net/
License: GPL2
*/

add_action('wp_footer','wpml_with_stinger_3_css');
add_action('wp_footer','wpml_with_stinger_3_js');

function wpml_with_stinger_3_css(){
?>
<style type="text/css">
.submenu-languages{background-color:#f3f3f3;border-style:solid;border-color:#dedede;border-width:0px 1px 1px 1px;position:absolute;margin-left:-11px;margin-top:21px;padding-bottom:5px;display:none;}
.submenu-languages > li{white-space:nowrap !important;float:none !important;display:inline-block !important;}
.iclflag{vertical-align:middle;position:relative !important;top:-1px !important;}
#lang_sel{z-index:1000;}
#lang_sel a{display:block;}
#lang_sel ul,#lang_sel li,#lang_sel a{margin:0px;padding:0px;width:300px;text-align:left;white-space:nowrap;}
#lang_sel ul,#lang_sel li{margin:0px !important;padding:0px !important;}
#lang_sel a{margin:0px !important;padding:0px 7px !important;}
#lang_sel li,#lang_sel a,#lang_sel span{height:30px !important;line-height:30px !important;font-size:14px;}
#lang_sel > ul > li > ul{top:31px;}
</style>
<?php
}

function wpml_with_stinger_3_js(){
?>
<script type="text/javascript">
jQuery(function($){
var langMenuObj=$('.submenu-languages').eq(0);
var wpmlMobile=(typeof(window.orientation)!='undefined');
$('.menu-item-language-current').eq(0).on('mouseenter',function(){
if(!wpmlMobile){langMenuObj.stop(true,true).fadeIn('fast');}
}).on('mouseleave',function(){
if(!wpmlMobile){langMenuObj.stop(true,true).fadeOut('slow');}
}).on('click',function(){
langMenuObj.stop(true,true).toggle();
});
$('.icl_lang_sel_current ').parent().click(function(){ return false; });
});
</script>
<?php
}



