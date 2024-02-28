<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * CreditType
 * -
 * CreditType is class of element &lt;credit-type&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;credit&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="credit-type")
 * @ParentElement(name="credit")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/credit-type/
 * @Update(date-time="2023-10-26 11:21:53")
 * @Data
 */
class CreditType extends MusicXMLWriter
{

    /**
     * Text content
     *
     * @TextContent
     * @var string
     */
    public $textContent;
}