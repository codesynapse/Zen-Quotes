<?php
/*
Plugin Name: Zen Quotes
Plugin URI: http://github.com/codesynapse
Description: Random Zen Quote Display
Version: 1.0
Author: Mahesh Kale
Author URI: http://sparxengine.net
License: GPL2
*/
function zen_quotes(){  
$quotes[] = 'He who does not climb, will not fall either.';
$quotes[] = 'Learning is a treasure no thief can touch.';
$quotes[] = 'Better to have a diamond with a few small flaws than a rock that is perfect.';
$quotes[] = 'We must not say every mistake is a foolish one.';
$quotes[] = 'Austerity is an ornament, humility is honorable.';
$quotes[] = 'He that would perfect his work must first sharpen his tools.';
$quotes[] = 'Respect yourself and others will respect you.';
$quotes[] = 'Life is really simple, but we insist on making it complicated.';
$quotes[] = 'How we spend our days is, of course, how we spend our lives.';
$quotes[] = 'He who does not climb, will not fall either.';
$random_number = rand(0,count($quotes)-1);
echo $quotes[$random_number];
 }  
add_action('wp_footer', 'zen_quotes'); 
 