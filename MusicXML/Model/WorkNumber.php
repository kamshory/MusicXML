<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * WorkNumber
 * -
 * WorkNumber is class of element &lt;work-number&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;work&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="work-number")
 * @ParentElement(name="work")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/work-number/
 * @Update(date-time="2023-10-26 11:27:46")
 * @Data
 */
class WorkNumber extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}