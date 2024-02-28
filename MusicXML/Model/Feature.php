<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Feature
 * -
 * Feature is class of element &lt;feature&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;grouping&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="feature")
 * @ParentElement(name="grouping")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/feature/
 * @Update(date-time="2023-10-26 11:22:37")
 * @Data
 */
class Feature extends MusicXMLWriter
{
	/**
	 * Type
	 * -
	 * Represents the type of the feature. This type is flexible to allow for different analyses.
	 *
	 * @Attribute(name="type")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $type;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}