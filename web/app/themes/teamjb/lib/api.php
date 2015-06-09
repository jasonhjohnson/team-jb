<?php
namespace Roots\Sage;

/**
 * Api Methods for Site
 */ 

/**
 * wds_api_comments_init function.
 * 
 * @access public
 * @return void
 */
/*function wds_api_comments_init() {
    $wds_api_comments = new Api();
    add_filter( 'json_endpoints', array( $wds_api_comments, 'register_routes' ) );
}

add_action( 'wp_json_server_before_serve', 'wds_api_comments_init' );*/
	
/**
 * WDS_API_COMMENTS class.
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
        $tweets = getTweets('johnsonblanton');		
    	
	    return wp_send_json( $tweets );
    }         
}