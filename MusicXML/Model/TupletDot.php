<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * TupletDot
 * -
 * TupletDot is class of element &lt;tuplet-dot&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;tuplet-actual&gt;, &lt;tuplet-normal&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="tuplet-dot")
 * @ParentElement(name="tuplet-actual,tuplet-normal")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/tuplet-dot/
 * @Update(date-time="2023-10-26 11:27:24")
 * @Data
 */
class TupletDot extends MusicXMLWriter
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
	 * Font family
	 * -
	 * A comma-separated list of font names.
	 *
	 * @Attribute(name="font-family")
	 * @Value(type="font-family" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontFamily;

	/**
	 * Font size
	 * -
	 * One of the CSS sizes or a numeric point size.
	 *
	 * @Attribute(name="font-size")
	 * @Value(type="font-size" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontSize;

	/**
	 * Font style
	 * -
	 * Normal or italic style.
	 *
	 * @Attribute(name="font-style")
	 * @Value(type="font-style" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontStyle;

	/**
	 * Font weight
	 * -
	 * Normal or bold weight.
	 *
	 * @Attribute(name="font-weight")
	 * @Value(type="font-weight" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $fontWeight;

}