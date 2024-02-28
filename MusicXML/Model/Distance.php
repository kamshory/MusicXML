<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Distance
 * -
 * Distance is class of element &lt;distance&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;appearance&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="distance")
 * @ParentElement(name="appearance")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/distance/
 * @Update(date-time="2023-10-26 11:22:14")
 * @Data
 */
class Distance extends MusicXMLWriter
{
	/**
	 * Type
	 * -
	 * The type of distance being defined.
	 *
	 * @Attribute(name="type")
	 * @Value(type="distance-type" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $type;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var float
	 */
	public $textContent;
}