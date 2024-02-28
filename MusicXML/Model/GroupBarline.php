<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * GroupBarline
 * -
 * GroupBarline is class of element &lt;group-barline&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;part-group&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="group-barline")
 * @ParentElement(name="part-group")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/group-barline/
 * @Update(date-time="2023-10-26 11:23:06")
 * @Data
 */
class GroupBarline extends MusicXMLWriter
{
	/**
	 * Color
	 * -
	 * Indicates the color of an element.
	 *
	 * @Attribute(name="color")
	 * @Value(type="color" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $color;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}