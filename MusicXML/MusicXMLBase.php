<?php

namespace MusicXML\MusicXML;

use DateTime;
use DOMDocument;
use DOMImplementation;
use MusicXML\MusicXML\Model\Alter;
use MusicXML\MusicXML\Model\Articulations;
use MusicXML\MusicXML\Model\Beats;
use MusicXML\MusicXML\Model\BeatType;
use MusicXML\MusicXML\Model\Bend;
use MusicXML\MusicXML\Model\Encoder;
use MusicXML\MusicXML\Model\Encoding;
use MusicXML\MusicXML\Model\EncodingDate;
use MusicXML\MusicXML\Model\EncodingDescription;
use MusicXML\MusicXML\Model\Identification;
use MusicXML\MusicXML\Model\InstrumentName;
use MusicXML\MusicXML\Model\InstrumentSound;
use MusicXML\MusicXML\Model\Key;
use MusicXML\MusicXML\Model\MidiChannel;
use MusicXML\MusicXML\Model\MidiDevice;
use MusicXML\MusicXML\Model\MidiInstrument;
use MusicXML\MusicXML\Model\MidiProgram;
use MusicXML\MusicXML\Model\Notations;
use MusicXML\MusicXML\Model\Octave;
use MusicXML\MusicXML\Model\Pan;
use MusicXML\MusicXML\Model\PartAbbreviation;
use MusicXML\MusicXML\Model\PartName;
use MusicXML\MusicXML\Model\Pitch;
use MusicXML\MusicXML\Model\PreBend;
use MusicXML\MusicXML\Model\Release;
use MusicXML\MusicXML\Model\Rights;
use MusicXML\MusicXML\Model\ScoreInstrument;
use MusicXML\MusicXML\Model\ScorePart;
use MusicXML\MusicXML\Model\Software;
use MusicXML\MusicXML\Model\Staccato;
use MusicXML\MusicXML\Model\Step;
use MusicXML\MusicXML\Model\Supports;
use MusicXML\MusicXML\Model\Time;
use MusicXML\MusicXML\Model\Volume;
use MusicXML\MusicXML\Properties\TimeSignature;

abstract class MusicXMLBase
{
    const XML_VERSION = "1.0";
    const XML_ENCODING = "UTF-8";
    const DOCUMENT_ID = "score-partwise";
    const PUBLIC_ID = "-//Recordare//DTD MusicXML 4.0 Partwise//EN";
    const SYSTEM_ID = "http://www.musicxml.org/dtds/partwise.dtd";
    const SCORE_PARTWISE = "score-partwise";
    const SOFTWARE_NAME = "Planetbiru";
    const ENCODING_DESCRIPTION = "This software is not ready for production yet";

    /**
     * Fix duration
     *
     * @param integer $duration
     * @param integer $divisions
     * @param integer $timebase
     * @param TimeSignature $timeSignature
     * @return integer
     */
    public function fixDuration($duration, $divisions, $timebase)
    {
        return round($duration * $divisions / $timebase);
    }
    
    public function calculateDuration($duration0, $divisions, $timebase)
    {
        $duration = $divisions * $duration0 * $timebase / 4;
        if($duration > $divisions * 16)
        {
            $duration = $divisions * 16;
        }
        return $duration;
    }
    
    /**
     * Get notation
     *
     * @return Notations
     */
    public function getNotation()
    {
        $notations = new Notations();
        $articulation = new Articulations();
        $articulation->staccato = array(new Staccato());
        $notations->articulations = $articulation;
        return $notations;
    }

    
    /**
     * Initialize array
     *
     * @param array|null
     * @return array
     */
    public function initializeArray($initialValue)
    {
        if(!isset($initialValue))
        {
            return array();
        }
        return $initialValue;
    }
    
    /**
     * Get time
     *
     * @param TimeSignature $timeSignature
     * @return Time
     */
    public function getTime($timeSignature)
    {
        $time = new Time();
        $time->beats = array(new Beats($timeSignature->getBeats()));
        $time->beatType = array(new BeatType($timeSignature->getBeatType()));
        return $time;
    }
    
    /**
     * Get key
     *
     * @param integer $fifths
     * @param integer $mode
     * @return Key
     */
    public function getKey($fifths, $mode)
    {
        $key = new Key();
        $key->fifths = $fifths;
        $key->mode = $mode;
        return $key;
    }

    /**
     * Get MIDI device
     *
     * @param integer $midiId
     * @param integer $port
     * @return MidiDevice
     */
    protected function getMidiDevice($midiId, $port)
    {
        $midiDevice = new MidiDevice();
        $midiDevice->id = $midiId;
        $midiDevice->port = $port;
        return $midiDevice;
    }

    /**
     * Get score instrument
     *
     * @return ScoreInstrument
     */
    protected function getScoreInstrument($instrumentId, $instrumentName, $instrumentSound)
    {
        $scoreInstrument = new ScoreInstrument();
        $scoreInstrument->id = $instrumentId;
        $scoreInstrument->instrumentName = new InstrumentName($instrumentName);
        $scoreInstrument->instrumentSound = new InstrumentSound($instrumentSound);
        return $scoreInstrument;
    }

    /**
     * Get score instrument
     *
     * @return MidiInstrument
     */
    protected function getMidiInstrument($midiChannel, $instrumentId, $midiProgramId, $volume = 100, $pan = 0)
    {
        $midiInstrument = new MidiInstrument();
        $midiInstrument->id = $instrumentId;
        $midiInstrument->midiChannel = new MidiChannel($midiChannel);
        $midiInstrument->midiProgram = new MidiProgram($midiProgramId);
        if($volume > 100)
        {
            $volume = 100;
        }
        $midiInstrument->volume = new Volume($volume);
        $midiInstrument->pan = new Pan($pan);
        return $midiInstrument;
    }

    /**
     * Get score part
     *
     * @param string $partId
     * @param string $partName
     * @param string $partAbbreviation
     * @param ScoreInstrument $scoreInstrument
     * @param MidiInstrument $midiInstrument
     * @param MidiDevice $midiDevice
     * @return ScorePart
     */
    public function getScorePart($partId, $partName, $partAbbreviation, $scoreInstrument, $midiInstrument, $midiDevice)
    {
        $scorePart = new ScorePart();
        $scorePart->id = $partId;
        $scorePart->partName = new PartName($partName);
        $scorePart->partAbbreviation = new PartAbbreviation($partAbbreviation);
        $scorePart->scoreInstrument = array($scoreInstrument);
        $scorePart->midiInstrument = array($midiInstrument);
        $scorePart->midiDevice = array($midiDevice);
        return $scorePart;
    }
    
    /**
     * Create new DOMDocument for MusicXML version 4.0
     *
     * @return DOMDocument
     */
    public function getDOMDocument()
    {
        $domdoc = new DOMDocument();
        $domdoc->xmlVersion = self::XML_VERSION;
        $domdoc->encoding = self::XML_ENCODING;
        $implementation = new DOMImplementation();
        $domdoc->appendChild($implementation->createDocumentType(self::DOCUMENT_ID, self::PUBLIC_ID, self::SYSTEM_ID));
        $domdoc->preserveWhiteSpace = false;
        $domdoc->formatOutput = true;
        return $domdoc;
    }

    /**
     * Get picth from note
     *
     * @param integer $note
     * @return Pitch
     */
    protected function getPitch($note)
    {
        $pitchStr = MusicXMLInstrument::NOTE_LIST[$note];
        $pitch = new Pitch();
        $step = new Step();
        $step->textContent = preg_replace("/[^A-G]/", "", $pitchStr);
        $pitch->step = $step;
        
        $octaveStr = (preg_replace("/[^\-\d]/", "", $pitchStr));
        if(empty($octaveStr))
        {
            $octaveStr = "0";
        }
        $pitch->octave = new Octave(intval($octaveStr));
        if (strpos($pitchStr, 's') !== false) {
            $alter = new Alter();
            $alter->textContent = 1;
            $pitch->alter = $alter;
        }
        if($pitch->step == 'B' && $pitch->octave->textContent == -1)
        {
            echo "NOTE = $note; PITH = ".$pitch."\r\n";
        }
        return $pitch;
    }
    
    /**
     * Get identification
     *
     * @param string $copyright
     * @return Identification
     */
    public function getIdentification($copyright = "")
    {
        $identification = new Identification();

        $rights = new Rights();
        $rights->textContent = $copyright;
        $rights->type = 'music';
        
        $identification->rights = array($rights);

        $encoding = new Encoding();
        $encoding->encodingDate = array(new EncodingDate(new DateTime()));
        $encoding->software = array(new Software(self::SOFTWARE_NAME));
        $encoding->encoder = array(new Encoder('music'));
        $encoding->encodingDescription = array(new EncodingDescription(self::ENCODING_DESCRIPTION));

        $support = array();
        $support[] = new Supports(array('element' => 'accidental', 'type' => 'yes'));
        $support[] = new Supports(array('element' => 'beam', 'type' => 'yes'));
        $support[] = new Supports(array('element' => 'print', 'attribute' => 'new-page', 'type' => 'no'));
        $support[] = new Supports(array('element' => 'print', 'attribute' => 'new-system', 'type' => 'no'));
        $support[] = new Supports(array('element' => 'stem', 'type' => 'yes'));

        $encoding->supports = $support;
        $identification->encoding = $encoding;

        return $identification;
    }
    

    public function getIsntrumentSound($channelId, $programId, $instrumentName)
    {
        $array = explode(" ", strtolower($instrumentName));
        return $this->match1($array, $channelId, $programId, $instrumentName);
    }

    /**
     * Check instrument name
     *
     * @param array $explodedName
     * @param integer $channelId
     * @param integer $programId
     * @param string $instrumentName
     * @return string|null
     */
    protected function match1($explodedName, $channelId, $programId, $instrumentName)
    {
        $found = array();
        foreach($explodedName as $search)
        {
            foreach(MusicXMLInstrument::INSTRUMENT_LIST as $index=>$chk)
            {
                $chkArr = explode('.', $chk[0]);
                if(in_array($search, $chkArr))
                {
                    echo "NAME = $instrumentName; SERACH = '$search', CHANNEL ID = $channelId, PROGRAM ID = $programId; $index; $chk \r\n";
                    if(!isset($found[$chk]))
                    {
                        $found[$chk] = 1;
                    }
                    else
                    {
                        $found[$chk] ++;
                    }
                }
            }
        }
        if(!empty($found))
        {
            arsort($found);
            $keys = array_keys($found);
            return $keys[0];
        }
        return null;
    }
    
    /**
     * Get bend
     *
     * @param integer $value
     * @return Bend
     */
    protected function getBend($value, $preBend = false, $release = false)
    {
        $bend = new Bend();
        $bend->bendAlter = round(($value-8192)*2/16383, 4);
        if($preBend)
        {
            $bend->preBend = new PreBend();
        }
        if($release)
        {
            $bend->release = new Release();
        }
        return $bend;
    }
    
}
