<?php

use Pusher\Pusher;

if(!function_exists("notify")){
    function notify($channel,$event,$data){
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher(
            '778ba3922c41ec19e6df',
            '207873fca9b89d7a4de6',
            '1538350',
            $options
        );
        
        $pusher->trigger($channel, $event, $data);
    }
}
