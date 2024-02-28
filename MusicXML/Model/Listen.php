<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Listen
 * -
 * Listen is class of element &lt;listen&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="listen")
 * @ParentElement(name="note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/listen/
 * @Update(date-time="2023-10-26 11:23:53")
 * @Data
 */
class Listen extends MusicXMLWriter
{

    /**
     * Assess
     *
     * @Element(name="assess")
     * @var Assess[]
     */
    public $assess;

    /**
     * Wait
     *
     * @Element(name="wait")
     * @var Wait[]
     */
    public $wait;

    /**
     * Other listen
     *
     * @Element(name="other-listen")
     * @var OtherListen[]
     */
    public $otherListen;

}