<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * StaffLayout
 * -
 * StaffLayout is class of element &lt;staff-layout&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;defaults&gt;, &lt;print&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="staff-layout")
 * @ParentElement(name="defaults,print")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/staff-layout/
 * @Update(date-time="2023-10-26 11:26:32")
 * @Data
 */
class StaffLayout extends MusicXMLWriter
{
	/**
	 * Number
	 * -
	 * Refers to staff numbers within the part, from top to bottom on the system. A value of 1 is used if not present.
	 *
	 * @Attribute(name="number")
	 * @Value(type="staff-number" required="false", min="1", max="infinite")
	 * @var integer
	 */
	public $number;

	/**
     * Staff distance
     *
     * @Element(name="staff-distance")
     * @var StaffDistance
     */
    public $staffDistance;

}