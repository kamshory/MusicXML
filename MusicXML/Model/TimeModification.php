<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * TimeModification
 * -
 * TimeModification is class of element &lt;time-modification&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="time-modification")
 * @ParentElement(name="note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/time-modification/
 * @Update(date-time="2023-10-26 11:27:10")
 * @Data
 */
class TimeModification extends MusicXMLWriter
{

    /**
     * Actual notes
     *
     * @Element(name="actual-notes")
     * @var ActualNotes
     */
    public $actualNotes;

    /**
     * Normal notes
     *
     * @Element(name="normal-notes")
     * @var NormalNotes
     */
    public $normalNotes;

    /**
     * Normal type
     *
     * @Element(name="normal-type")
     * @var NormalType
     */
    public $normalType;

    /**
     * Normal dot
     *
     * @Element(name="normal-dot")
     * @var NormalDot[]
     */
    public $normalDot;

}