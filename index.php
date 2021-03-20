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
  add_menu_page("Example Options", "Example Options", 4, "example-options", "exampleMenu" );
  add_submenu_page("example-options", "Option 1", "Option 1", 4, "example-option-1", "option1");
}

function exampleMenu()
{
echo <<< 'EOD'
  <h2> Coming Soon</h2>
EOD;
}

function option1()
{
  echo <<< 'EOD'
  <form action="/html/tags/html_form_tag_action.cfm" method="post">
  <div>
  <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
  To do list!
  </textarea>
  </div>
  <input type="submit" value="Submit">
  </form>
  EOD;
}
