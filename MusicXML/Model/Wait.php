<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Wait
 * -
 * Wait is class of element &lt;wait&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;listen&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="wait")
 * @ParentElement(name="listen")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/wait/
 * @Update(date-time="2023-10-26 11:27:40")
 * @Data
 */
class Wait extends MusicXMLWriter
{
	/**
	 * Player
	 * -
	 * Restricts the &lt;wait&gt; to apply to a single player.
	 *
	 * @Attribute(name="player")
	 * @Value(type="IDREF" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $player;

	/**
	 * Time only
	 * -
	 * Restricts the &lt;wait&gt; to apply to a set of times through a repeated section.
	 *
	 * @Attribute(name="time-only")
	 * @Value(type="time-only" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $timeOnly;

}