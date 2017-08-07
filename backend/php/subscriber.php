<?php

/**
 * Description of subscriber
 *
 * @author wanglei
 */
set_time_limit(0);
while(true){
    usleep(100);
    $content = file_get_contents("./source.txt");
    if($content){
        echo $content."\r\n\r\n";
        die;
    }
}