<?php
$some_link = 'some website';
$tagName = 'div';
$attrName = 'class';
$attrValue = 'className';

$dom = new DOMDocument;
$dom->preserveWhiteSpace = false;
@$dom->loadHTMLFile($some_link);

$html = getTags( $dom, $tagName, $attrName, $attrValue );
echo $html;

function getTags( $dom, $tagName, $attrName, $attrValue ){
    $html = '';
    $domxpath = new DOMXPath($dom);
    $newDom = new DOMDocument;
    $newDom->formatOutput = true;

    $filtered = $domxpath->query("//$tagName" . '[@' . $attrName . "='$attrValue']");
    // $filtered =  $domxpath->query('//div[@class="className"]');
    // '//' when you don't know 'absolute' path

    // since above returns DomNodeList Object
    // I use following routine to convert it to string(html); copied it from someone's post in this site. Thank you.
    $i = 0;
    while( $myItem = $filtered->item($i++) ){
        $node = $newDom->importNode( $myItem, true );    // import node
        $newDom->appendChild($node);                    // append node
    }
    $html = $newDom->saveHTML();
    return $html;
}

?>