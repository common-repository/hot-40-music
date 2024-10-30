<?php
/*  Copyright 2012  HOT 40 MUSIC  (email : sales@hot40music.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php
   /*
   Plugin Name: Hot 40 Music
   Plugin URI: http://hot40music.com
   Description: A free online web streaming plugin with non-stop Euro hits from the Hot40Music.com - Hits Channel for your visitors! Hot40Music.com - Greece's & Cyprus' leading internet web radio. 
   Version: 1.0.0
   Author: Robbie Rundle
   Author URI: http://hot40media.com
   License: GPL2 or later
   */
   
   error_reporting(E_ALL);
add_action("widgets_init", array('hot40music_com', 'register'));
class hot40music_com {
  function control(){
    echo 'Options coming soon! For now enjoy the Hits!';
  }
  function widget($args){
    echo $args['before_widget'];
    echo $args['before_title'] . 'Hot 40 Music' . $args['after_title'];
    echo '<iframe src=" http://hot40music.com/blogs/hot40hits/" width="300" height="90" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" /></iframe>';
    echo $args['after_widget'];
  }
  function register(){
    register_sidebar_widget('Hot40Music.com Player', array('hot40music_com', 'widget'));
    register_widget_control('Hot40Music.com Player', array('hot40music_com', 'control'));
  }
}
?>