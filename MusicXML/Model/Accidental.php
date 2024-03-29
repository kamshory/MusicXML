<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Accidental
 * -
 * Accidental is class of element &lt;accidental&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="accidental")
 * @ParentElement(name="note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/accidental/
 * @Update(date-time="2023-10-26 11:21:03")
 * @Data
 */
class Accidental extends MusicXMLWriter
{
	/**
	 * Bracket
	 * -
	 * Specifies whether or not brackets are put around a symbol for an editorial indication. If not specified, it is left to application defaults.
	 *
	 * @Attribute(name="bracket")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $bracket;

	/**
	 * Cautionary
	 * -
	 * If yes, indicates that this is a cautionary accidental. The value is no if not present.
	 *
	 * @Attribute(name="cautionary")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $cautionary;

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
	 * Default x
	 * -
	 * Changes the computation of the default horizontal position. The origin is changed relative to the left-hand side of the note or the musical position within the bar. Positive x is right and negative x is left.
	 *
	 * @Attribute(name="default-x")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $defaultX;

	/**
	 * Default y
	 * -
	 * Changes the computation of the default vertical position. The origin is changed relative to the top line of the staff. Positive y is up and negative y is down.
	 *
	 * @Attribute(name="default-y")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $defaultY;

	/**
	 * Editorial
	 * -
	 * If yes, indicates that this is an editorial accidental. The value is no if not present.
	 *
	 * @Attribute(name="editorial")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $editorial;

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

	/**
	 * Parentheses
	 * -
	 * Specifies whether or not parentheses are put around a symbol for an editorial indication. If not specified, it is left to application defaults.
	 *
	 * @Attribute(name="parentheses")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $parentheses;

	/**
	 * Relative x
	 * -
	 * Changes the horizontal position relative to the default position, either as computed by the individual program, or as overridden by the default-x attribute.  Positive x is right and negative x is left. It should be interpreted in the context of the &lt;offset&gt; element or directive attribute if those are present.
	 *
	 * @Attribute(name="relative-x")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $relativeX;

	/**
	 * Relative y
	 * -
	 * Changes the vertical position relative to the default position, either as computed by the individual program, or as overridden by the default-y attribute. Positive y is up and negative y is down. It should be interpreted in the context of the placement attribute if that is present.
	 *
	 * @Attribute(name="relative-y")
	 * @Value(type="tenths" required="false", min="-infinite", max="infinite")
	 * @var float
	 */
	public $relativeY;

	/**
	 * Size
	 * -
	 * Specifies the symbol size to use for an editorial indication. If not specified, it is left to application defaults.
	 *
	 * @Attribute(name="size")
	 * @Value(type="symbol-size" required="false", allowed="cue,full,grace-cue,large")
	 * @var string
	 */
	public $size;

	/**
	 * Smufl
	 * -
	 * References a specific Standard Music Font Layout (SMuFL) accidental glyph. This is used both with the other accidental value and for disambiguating cases where a single MusicXML accidental value could be represented by multiple SMuFL glyphs.
	 *
	 * @Attribute(name="smufl")
	 * @Value(type="smufl-accidental-glyph-name" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $smufl;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;

}