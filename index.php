<?php
/*
Plugin Name: Custom Plugin
Plugin URI:
Description: Plugin creating a custom page in your wordpress dashboard
Author: Lukas Patzer
Author URI:
Version: 0.1
*/

add_action("admin_menu", "addMenu");
function addMenu()
{
  add_menu_page("To do list", "To do list", 4, "to-do-list", "todoMenu" );

}

function todoMenu()
{
echo <<< 'EOD'
  <h2> Coming Soon</h2>
EOD;
}
