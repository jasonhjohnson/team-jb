<?php
namespace Roots\Sage;

//require_once 'Google/autoload.php';

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
        
        $routes['/events'] = array(
            array( array( $this, 'get_events'), \WP_JSON_Server::READABLE ),
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
    
    /**
     * get_events function.
     * 
     * @access public
     * @return json
     */
    public function get_events() {      
        session_start();	
    	
        $calendar_id = 'itog6cm85a07ha4aof0hvstbhs@group.calendar.google.com';
        $client_id = '804633551294-r5cp252v61jjn0ftkgupkuse65v01j51.apps.googleusercontent.com';
    	$email_address = '804633551294-r5cp252v61jjn0ftkgupkuse65v01j51@developer.gserviceaccount.com';	 
    	$key_file_location = dirname(__FILE__) . '/google-calendar-service-key.p12';	 	         
                
    	$client = new \Google_Client();	 	
    	$client->setApplicationName("Client_Library_Examples");      
    	$key = file_get_contents($key_file_location);	        
    
        // separate additional scopes with a comma	 
        $scopes = 'https://www.googleapis.com/auth/calendar.readonly'; 	
        $cred = new \Google_Auth_AssertionCredentials(	 
                	$email_address,	 	 
                	array($scopes),	 	
                	$key);	 	
            
        $client->setAssertionCredentials($cred);
        
        if($client->getAuth()->isAccessTokenExpired()) {	 	
        	$client->getAuth()->refreshTokenWithAssertion($cred);	 	
        }	      
        	
        $service = new \Google_Service_Calendar($client);       
        
        $params = array(
         'singleEvents' => true,
         'orderBy' => 'startTime'             
        );
            
        $events = $service->events->listEvents($calendar_id, $params);   
        
        $result = [];
        
        while(true) {           
        	foreach ($events->getItems() as $event) {
                $isMultiday = false;
                
                if ($event) {
                    $slim['title'] = $event->getSummary();
                    if ($event->start->date) {
                        $slim['start'] = $event->start->date;
                        $slim['end'] = $event->end->date;  
                        $isMultiday = true;
                    }
                    else {
                        $slim['start'] = $event->start->dateTime;
                        $slim['end'] = $event->end->dateTime;  
                    }
                    
                    //$slim['start'] = $event->start->dateTime;
                    //    $slim['end'] = $event->end->dateTime;  
                                   
                    $slim['description'] = $event->description;
                    $slim['location'] = $event->location;
                    $slim['link'] = $event->htmlLink;   
                    
                    // Add additional days for this event if multi-day
                    if ($isMultiday) {
                        $start = $slim['start'];
                        $end = $slim['end'];
                        $datediff = strtotime($end) - strtotime($start);
                        $days = floor($datediff/(60*60*24));
                        
                        for ($i = 1; $i <= $days; $i++) {                             
                            $new_date = date('Y-m-d', strtotime($start . " +" . $i . " days"));          
                            $slim['start'] = $new_date;
                            $slim['end'] = $new_date;  
                            $slim['description'] = $event->description;
                            $slim['location'] = $event->location;
                            $slim['link'] = $event->htmlLink;  
                            $result[] = $slim; 
                        }
                    }
                    else {
                       $result[] = $slim; 
                    }                                         
                }           
            }
              
            $pageToken = $events->getNextPageToken();
            
            if ($pageToken) {
                $params = array('pageToken' => $pageToken, 'singleEvents' => true);
                $events = $service->events->listEvents($calendar_id, $params);
            } 
            else {
                break;
            }
    	}
        
	    return wp_send_json( $result );
    }       
}