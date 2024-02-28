<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * BarStyle
 * -
 * BarStyle is class of element &lt;bar-style&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;barline&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="bar-style")
 * @ParentElement(name="barline")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/bar-style/
 * @Update(date-time="2023-10-26 11:21:20")
 * @Data
 */
class BarStyle extends MusicXMLWriter
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