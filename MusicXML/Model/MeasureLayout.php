<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * MeasureLayout
 * -
 * MeasureLayout is class of element &lt;measure-layout&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;print&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="measure-layout")
 * @ParentElement(name="print")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/measure-layout/
 * @Update(date-time="2023-10-26 11:23:58")
 * @Data
 */
class MeasureLayout extends MusicXMLWriter
{

    /**
     * Measure distance
     *
     * @Element(name="measure-distance")
     * @var MeasureDistance
     */
    public $measureDistance;
}