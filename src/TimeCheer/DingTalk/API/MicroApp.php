<?php

namespace TimeCheer\DingTalk\API;

/**
 * 微应用
 *
 * @author CodeMonkeyLuffy <CodeMonkeyLuffy@Gmail.com>
 */
class MicroApp {
    const API_CREATE = '/microapp/create';
    
    /**
     * 创建微应用
     * @param \TimeCheer\DingTalk\Entity\MicroApp $app
     * @return int|boolean
     */
    public function create(\TimeCheer\DingTalk\Entity\MicroApp $app) {
        $result = $this->doPost(self::API_CREATE, (array) $app);
        
        return empty($result['id']) ? false : $result['id'];
    }
}
