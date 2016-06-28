<?php
/**
 *  Cros.php
 *  PhalApi_Response_Cros JSON响应类
 *  
 *  Created by SteveAK on 06/28/16
 *  Copyright (c) 2016 SteveAK. All rights reserved.
 *  Contact email(aer_c@qq.com) or qq(7579476)
 */ 

class PhalApi_Response_Cros extends PhalApi_Response {

    protected $callback = '';

    /**
     * @param string $callback JS回调函数名
     */
    public function __construct() {
        $this->addHeaders('Access-Control-Allow-Origin', '*');
    }

    protected function formatResult($result) {
        return json_encode($result);
    }
}
