<?php
namespace Roots\Sage;

/**
 * Api Methods for Site
 */ 
class WebApi{
    /**
     * register_routes function.
     * 
     * @access public
     * @param mixed $routes
     * @return void
     */
    public function register_routes( $routes ) {    
        $routes['/tweets'] = array(
            array( array( $this, 'get_tweets'), \WP_JSON_Server::READABLE ),
        );
        return $routes;
    }    
    
    /**
     * get_tweets function.
     * 
     * @access public
     * @return json
     */
    public function get_tweets() {
        $tweets = getTweets(5, 'johnsonblanton');	
    	
	    return wp_send_json( $tweets );
    }         
}