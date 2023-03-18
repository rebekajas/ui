<?php
/*
Plugin Name: Naujas Botas
Description: A simple chatbot plugin for WordPress
*/

// Add the necessary scripts
function wp_chatbot_scripts() {
    wp_enqueue_style( 'wp-chatbot-style', plugin_dir_url( __FILE__ ) . 'style.css' );
    wp_enqueue_script( 'wp-chatbot-script', plugin_dir_url( __FILE__ ) . 'script.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_chatbot_scripts' );

// Add the chatbot HTML markup
function wp_chatbot_html() {
    ?>
<div id="body"> 
  
  <div id="chat-circle" class="btn btn-raised">
          <div id="chat-overlay"></div>
              <i class="material-icons">speaker_phone</i>
      </div>
    
    <div class="chat-box">
      <div class="chat-box-header">
        ChatBot
        <span class="chat-box-toggle"><i class="material-icons">close</i></span>
      </div>
      <div class="chat-box-body">
        <div class="chat-box-overlay">   
        </div>
        <div class="chat-logs">
         
        </div><!--chat-log -->
      </div>
      <div class="chat-input">      
        <form>
          <input type="text" id="chat-input" placeholder="Send a message..."/>
        <button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">send</i></button>
        </form>      
      </div>
    </div>
    
    
    
    
  </div>
    <?php
}
add_action( 'wp_footer', 'wp_chatbot_html' );