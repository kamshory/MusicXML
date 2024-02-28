<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * PartClef
 * -
 * PartClef is class of element &lt;part-clef&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;for-part&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="part-clef")
 * @ParentElement(name="for-part")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/part-clef/
 * @Update(date-time="2023-10-26 11:25:12")
 * @Data
 */
class PartClef extends MusicXMLWriter
{

    /**
     * Sign
     *
     * @Element
     * @var Sign(name="sign")
     */
    public $sign;

    /**
     * Line
     *
     * @Element
     * @var Line
     */
    public $line;

    /**
     * Clef octave change
     *
     * @Element(name="clef-octave-change")
     * @var ClefOctaveChange
     */
    public $clefOctaveChange;
}