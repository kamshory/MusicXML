<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * OtherListen
 * -
 * OtherListen is class of element &lt;other-listen&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;listen&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="other-listen")
 * @ParentElement(name="listen")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/other-listen/
 * @Update(date-time="2023-10-26 11:24:59")
 * @Data
 */
class OtherListen extends MusicXMLWriter
{
	/**
	 * Type
	 * -
	 * Indicates the type of listening to which the element content applies.
	 *
	 * @Attribute(name="type")
	 * @Value(type="token" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $type;

	/**
	 * Player
	 * -
	 * Restricts the element to apply to a single player.
	 *
	 * @Attribute(name="player")
	 * @Value(type="IDREF" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $player;

	/**
	 * Time only
	 * -
	 * Restrict the element to apply to a set of times through a repeated section.
	 *
	 * @Attribute(name="time-only")
	 * @Value(type="time-only" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $timeOnly;

}