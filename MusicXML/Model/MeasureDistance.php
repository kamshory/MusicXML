<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * MeasureDistance
 * -
 * MeasureDistance is class of element &lt;measure-distance&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;measure-layout&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="measure-distance")
 * @ParentElement(name="measure-layout")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/measure-distance/
 * @Update(date-time="2023-10-26 11:23:57")
 * @Data
 */
class MeasureDistance extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var float
	 */
	public $textContent;
}