<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Pitch
 * -
 * Pitch is class of element &lt;pitch&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="pitch")
 * @ParentElement(name="note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/pitch/
 * @Update(date-time="2023-10-26 11:25:27")
 * @Data
 */
class Pitch extends MusicXMLWriter
{

    /**
     * Step
     *
     * @Element
     * @var Step
     */
    public $step;

    /**
     * Alter
     *
     * @Element
     * @var Alter
     */
    public $alter;

    /**
     * Octave
     *
     * @Element
     * @var Octave
     */
    public $octave;
}