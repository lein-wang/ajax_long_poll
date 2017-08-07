<?php

/**
 * Description of producer
 *
 * @author wanglei
 */

set_time_limit(0);
while(true){
    $num = mt_rand(1, 5000);
    @file_put_contents("./source.txt", $num);
    usleep(1000);
}