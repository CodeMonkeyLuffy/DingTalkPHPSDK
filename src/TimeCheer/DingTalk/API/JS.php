<?php

namespace TimeCheer\DingTalk\API;

/**
 * JS接口API
 *
 * @author CodeMonkeyLuffy <CodeMonkeyLuffy@Gmail.com>
 */
class JS extends Base {
    
    const API_GET_TICKET = '/get_jsapi_ticket';
    
    /**
     * 获取jsapi_ticket
     * @return boolean|array array("ticket" => "", "expires_in" => 7200)
     */
    public function getTicket() {
        $data = $this->doGet(self::API_GET_TICKET, array('type' => 'jsapi'));
        
        if ($data === false || empty($data['ticket'])) {
            return false;
        }
        
        return $data;
    }
}
