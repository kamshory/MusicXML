<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * TupletNormal
 * -
 * TupletNormal is class of element &lt;tuplet-normal&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;tuplet&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="tuplet-normal")
 * @ParentElement(name="tuplet")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/tuplet-normal/
 * @Update(date-time="2023-10-26 11:27:25")
 * @Data
 */
class TupletNormal extends MusicXMLWriter
{

    /**
     * Tuplet number
     * @Element(name="tuplet-number")
     * @var TupletNumber
     */
    public $tupletNumber;

    /**
     * Tuplet type
     * @Element(name="tuplet-type")
     * @var TupletType
     */
    public $tupletType;

    /**
     * Tuplet dot
     * @Element(name="tuplet-dot")
     * @var TupletDot
     */
    public $tupletDot;
}