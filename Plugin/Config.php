<?php
namespace OsmanSorkar\Sortbyrandom\Plugin;

class Config {

public function afterGetAttributeUsedForSortByArray($subject, $result){
//print_r($result);
$result['random']=__('Random');
return $result; 
}

}