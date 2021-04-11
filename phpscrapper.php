<?php
error_reporting(E_ALL);

$html =  "<hr>
<div class=\"split-col clearfix\">
  <div class=\"one-third\"><a href=\"https://www.sanbornwesterncamps.com/sanborn-gap-semester\" onclick=\"trackOutboundLink('https://www.sanbornwesterncamps.com/sanborn-gap-semester'); return true;\" target=\"_blank\"><img src=\"/images/logos/SanbornGapSemesterVerticalLogo.jpeg\"></a></div>
  <div class=\"two-thirds last-col\">
        <h3><a href=\"https://www.sanbornwesterncamps.com/sanborn-gap-semester\" onclick=\"trackOutboundLink('https://www.sanbornwesterncamps.com/sanborn-gap-semester'); return true;\" target=\"_blank\">Sanborn Gap Semester</a></h3>
    <p>The Colorado Outdoor Education Center is a non-profit organization that began as a summer camp in 1948. The Sanborn Gap Semester operates under the Colorado Outdoor Education Center, located in Florissant, Colorado.  The property that hosts this gap semester is 6,000 acres of meadows, forests, and rocky bluffs. The mission of Colorado Outdoor Education Center is to develop the potential of individuals by providing extraordinary educational experiences in the natural world.</p>
  </div>
  <h3>neeraj</h3>
</div>
<hr>



<div class=\"split-col clearfix\">
  <div class=\"one-third\"><a href=\"https://www.wildernessadventures.com/\" onclick=\"trackOutboundLink('https://www.wildernessadventures.com/'); return true;\" target=\"_blank\"><img src=\"/images/logos/WildernessAdventuresLogo.png\"></a></div>
  <div class=\"two-thirds last-col\">
        <h3><a href=\"https://www.wildernessadventures.com/\" onclick=\"trackOutboundLink('https://www.wildernessadventures.com/'); return true;\" target=\"_blank\">Wilderness Adventures</a></h3>
    <p> Since 1973, Wilderness Adventures has provided young adults with the opportunity to explore the most pristine wilderness settings on the planet. The Wilderness Adventures Leadership Institute' Gap Semester Programs challenge students by enabling them to improve their outdoor skills, expand their leadership capabilities, and gain life-long professional certifications. Wilderness Adventures is about discovering a part of ourselves, building character, and bringing new perspectives. </p>
  </div>
  <h3>thakur</h3>
</div>
<hr>";
//$some_link = 'some website';
$tagName = 'div';
$attrName = 'class';
$attrValue = 'split-col clearfix';

$dom = new DOMDocument;
$dom->preserveWhiteSpace = false;
@$dom->loadHTML($html);

//$filteredhtml = getTags( $dom, $tagName, $attrName, $attrValue );
//echo $filteredhtml;

$domxpath = new DOMXPath($dom);
$records = $domxpath->query("//$tagName" . '[@' . $attrName . "='$attrValue']");

echo "test NEW  mnm  RECORDS : ".$records->length;
echo "<pre>";
for ( $i = 0 ; $i < $records->length; $i ++ ) {
    
    /*$tagName = 'div';
    $attrName = 'class';
    $attrName = 'two-thirds last-col';
    
    
    $dominner = new DOMDocument;
    @$dominner->loadHTML($records.item(0));    
    $domxpathinner = new DOMXPath($dominner);
    $innerrecords = $domxpathinner->query("//$tagName" . '[@' . $attrName . "='$attrValue']");

    $h3value = $innerrecords(0)->getElementByTagName('h3');
    echo $h3value."***************h3****<br><br>";*/

    //echo $records->item($i)->getElementsByTagName('h3') . "---------------<br><br>";
    var_dump($records->item($i)->nodeValue);
    var_dump($records->item($i)->getElementByTagName("a"));

}

/*
function getTags( $dom, $tagName, $attrName, $attrValue ){
    $html = '';
    $domxpath = new DOMXPath($dom);
    $newDom = new DOMDocument;
    $newDom->formatOutput = true;

    $filtered = $domxpath->query("//$tagName" . '[@' . $attrName . "='$attrValue']");
    $i = 0;
    while( $myItem = $filtered->item($i++) ){
        $node = $newDom->importNode( $myItem, true );    // import node
        $newDom->appendChild($node);                    // append node
    }
    $html = $newDom->saveHTML();
    return $html;
}*/

?>