<?php

namespace MusicXML\MusicXML;

use DOMDocument;
use MusicXML\MusicXML\Map\ModelMap;
use MusicXML\MusicXML\Map\NodeType;

class MusicXML extends MusicXMLBase
{
    public function loadXml($path)
    {
        $domdoc = new DOMDocument();
        $domdoc->loadXML(file_get_contents($path));
        $nodes = $domdoc->childNodes;
        $object = null;
        foreach($nodes as $node)
        {
            if($node->nodeType == NodeType::ELEMENT && isset(ModelMap::CLASS_MAP[$node->tagName])) //NOSONAR
            {
                $className = ModelMap::CLASS_MAP[$node->tagName]; //NOSONAR
                $object = new $className($node);
                break;
            }
        }
        echo $object;  
        
    }

    
    

    
}
