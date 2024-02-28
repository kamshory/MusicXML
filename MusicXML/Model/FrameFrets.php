<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * FrameFrets
 * -
 * FrameFrets is class of element &lt;frame-frets&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;frame&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="frame-frets")
 * @ParentElement(name="frame")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/frame-frets/
 * @Update(date-time="2023-10-26 11:22:54")
 * @Data
 */
class FrameFrets extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var integer
	 */
	public $textContent;
}