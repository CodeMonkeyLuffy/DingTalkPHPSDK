<?php

/**
 * 将json数据字符串转换为php class类
 *
 * @author CodeMonkeyLuffy <CodeMonkeyLuffy@Gmail.com>
 */
class JSONObject {
    
    public function toClass($className, array $json_array) {
        $str = "<?php \n";
        
        $str .= "\n";
        $str .= "class {$className} {/** created by JSONObject */\n\n";
        
        if (count($json_array) > 0) {
            foreach ($json_array as $key => $value) {
                $type = gettype($value);
                
                if ($type == 'boolean') {
                    $_value = $value ? 'true' : 'false';
                } elseif ($type == 'string') {
                    $_value = "'{$value}'";
                } elseif (!in_array($type, array('object', 'array'))) {
                    $_value = $value;
                } else {
                    $_value = '';
                }
                
                $str .= "    /**\n";
                $str .= "     * @var {$type} \${$key} 如 {$_value}\n";
                $str .= "     */\n";
                
                $str .= "    public \${$key};\n\n";
            }
        }
        
        $str .= '}';
        
        return $str;
    }
}
