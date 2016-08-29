<?php

namespace TimeCheer\DingTalk\Entity;

/**
 * 接口部门数据实体
 *
 * @author CodeMonkeyLuffy <CodeMonkeyLuffy@Gmail.com>
 */
class Department {/** 仅用于演示接口返回的数据结构 */

    /**
     * @var int $id 如'2'
     */
    public $id;

    /**
     * @var string $name 如'钉钉事业部'
     */
    public $name;

    /**
     * @var int $order 如'10'
     */
    public $order;

    /**
     * @var int $parentid 如'1'
     */
    public $parentid;

    /**
     * @var string $createDeptGroup 如'1'
     */
    public $createDeptGroup;

    /**
     * @var string $autoAddUser 如'1'
     */
    public $autoAddUser;

    /**
     * @var string $deptHiding 如'1'
     */
    public $deptHiding;

    /**
     * @var string $deptPerimits 如'3|4'
     */
    public $deptPerimits;

    /**
     * @var string $orgDeptOwner 如'manager1122'
     */
    public $orgDeptOwner;

    /**
     * @var string $deptManagerUseridList 如'manager1122|manager3211'
     */
    public $deptManagerUseridList;

}