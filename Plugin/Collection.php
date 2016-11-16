<?php
namespace OsmanSorkar\Sortbyrandom\Plugin;

class Collection {

public function aroundSetOrder($subject, $proceed,$attribute){
if($attribute=="random"){
	$subject->getSelect()->order('rand()');
}
return $proceed;
}

}