<?PHP
/*
Plugin Name: Torhead Tooltops
Plugin URI: http://www.torhead.com/tooltips
Description: Enables Torhead Tooltips on your site. Based on the Powered by Wowhead plugin by nilved.
Version: 0.1
Author: Gazimoff
Author URI: http://www.manaobscura.com
*/
function torheadtips(){echo "<script src=\"http://tor.zamimg.com/tooltips.js\"></script>\n";}add_action('wp_head','torheadtips');
function r2dbtips(){echo "<script type=\"text/javascript\" src=\"http://s3.r2-db.com/powered.js\"></script>\n";}add_action('wp_head','r2dbtips');
?>
