<?php

namespace TimeCheer\DingTalk\API;

/**
 * 事件回调接口
 *
 * @author CodeMonkeyLuffy <CodeMonkeyLuffy@Gmail.com>
 */
class Callback {
    const API_LIST = '/call_back/get_call_back';
    
    const API_UPDATE = '/call_back/update_call_back';
    const API_DELETE = '/call_back/delete_call_back';
    const API_FAILED_RESULT_GET = '/call_back/get_call_back_failed_result';

}
