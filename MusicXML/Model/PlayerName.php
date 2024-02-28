<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * PlayerName
 * -
 * PlayerName is class of element &lt;player-name&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;player&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="player-name")
 * @ParentElement(name="player")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/player-name/
 * @Update(date-time="2023-10-26 11:25:30")
 * @Data
 */
class PlayerName extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}