<?php

namespace TimeCheer\DingTalk\Entity;

/**
 * 接口微应用数据实体
 *
 * @author CodeMonkeyLuffy <CodeMonkeyLuffy@Gmail.com>
 */
class MicroApp {/** created by JSONObject */

    /**
     * @var string $appIcon 如 '@HIdsabikkhjsdsas'
     */
    public $appIcon;

    /**
     * @var string $appName 如 '测试微应用'
     */
    public $appName;

    /**
     * @var string $appDesc 如 '测试使用的微应用'
     */
    public $appDesc;

    /**
     * @var string $homepageUrl 如 'http://oa.dingtalk.com/?h5'
     */
    public $homepageUrl;

    /**
     * @var string $pcHomepageUrl 如 'http://oa.dingtalk.com/?pc'
     */
    public $pcHomepageUrl;

    /**
     * @var string $ompLink 如 ''
     */
    public $ompLink;

}
