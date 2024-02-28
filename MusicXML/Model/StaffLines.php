<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * StaffLines
 * -
 * StaffLines is class of element &lt;staff-lines&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;staff-details&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="staff-lines")
 * @ParentElement(name="staff-details")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/staff-lines/
 * @Update(date-time="2023-10-26 11:26:33")
 * @Data
 */
class StaffLines extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}