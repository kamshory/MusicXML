<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * ExceptVoice
 * -
 * ExceptVoice is class of element &lt;except-voice&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;beat-repeat&gt;, &lt;slash&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="except-voice")
 * @ParentElement(name="beat-repeat,slash")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/except-voice/
 * @Update(date-time="2023-10-26 11:22:33")
 * @Data
 */
class ExceptVoice extends MusicXMLWriter
{

    /**
     * Text content
     *
     * @TextContent
     * @var string
     */
    public $textContent;
}