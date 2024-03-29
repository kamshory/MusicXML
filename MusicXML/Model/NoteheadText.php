<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * NoteheadText
 * -
 * NoteheadText is class of element &lt;notehead-text&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="notehead-text")
 * @ParentElement(name="note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/notehead-text/
 * @Update(date-time="2023-10-26 11:24:41")
 * @Data
 */
class NoteheadText extends MusicXMLWriter
{

	/**
     * Display text
     *
     * @Element(name="display-text")
     * @var DisplayText
     */
    public $displayText;

    /**
     * Accidental text
     *
     * @Element(name="accidental-text")
     * @var AccidentalText
     */
    public $accidentalText;

}