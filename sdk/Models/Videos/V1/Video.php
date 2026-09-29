<?php

namespace Rixl\Sdk\Models\Videos\V1;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Common\V1\File;
use Rixl\Sdk\Models\Common\V1\Visibility;
use Rixl\Sdk\Models\Images\V1\Image;

class Video implements Parsable 
{
    /**
     * @var int|null $bitrate The bitrate property
    */
    private ?int $bitrate = null;
    
    /**
     * @var string|null $codec The codec property
    */
    private ?string $codec = null;
    
    /**
     * @var DateInterval|null $duration A Duration represents a signed, fixed-length span of time represented as a count of seconds and fractions of seconds at nanosecond resolution. It is independent of any calendar and concepts like "day" or "month". It is related to Timestamp in that the difference between two Timestamp values is a Duration and it can be added or subtracted from a Timestamp. Range is approximately +-10,000 years. # Examples Example 1: Compute Duration from two Timestamps in pseudo code.     Timestamp start = ...;     Timestamp end = ...;     Duration duration = ...;     duration.seconds = end.seconds - start.seconds;     duration.nanos = end.nanos - start.nanos;     if (duration.seconds < 0 && duration.nanos > 0) {       duration.seconds += 1;       duration.nanos -= 1000000000;     } else if (duration.seconds > 0 && duration.nanos < 0) {       duration.seconds -= 1;       duration.nanos += 1000000000;     } Example 2: Compute Timestamp from Timestamp + Duration in pseudo code.     Timestamp start = ...;     Duration duration = ...;     Timestamp end = ...;     end.seconds = start.seconds + duration.seconds;     end.nanos = start.nanos + duration.nanos;     if (end.nanos < 0) {       end.seconds -= 1;       end.nanos += 1000000000;     } else if (end.nanos >= 1000000000) {       end.seconds += 1;       end.nanos -= 1000000000;     } Example 3: Compute Duration from datetime.timedelta in Python.     td = datetime.timedelta(days=3, minutes=10)     duration = Duration()     duration.FromTimedelta(td) # JSON Mapping In JSON format, the Duration type is encoded as a string rather than an object, where the string ends in the suffix "s" (indicating seconds) and is preceded by the number of seconds, with nanoseconds expressed as fractional seconds. For example, 3 seconds with 0 nanoseconds should be encoded in JSON format as "3s", while 3 seconds and 1 nanosecond should be expressed in JSON format as "3.000000001s", and 3 seconds and 1 microsecond should be expressed in JSON format as "3.000001s".
    */
    private ?DateInterval $duration = null;
    
    /**
     * @var File|null $file The file property
    */
    private ?File $file = null;
    
    /**
     * @var string|null $framerate The framerate property
    */
    private ?string $framerate = null;
    
    /**
     * @var bool|null $hdr The hdr property
    */
    private ?bool $hdr = null;
    
    /**
     * @var int|null $height The height property
    */
    private ?int $height = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var Image|null $poster The poster property
    */
    private ?Image $poster = null;
    
    /**
     * @var Visibility|null $visibility The visibility property
    */
    private ?Visibility $visibility = null;
    
    /**
     * @var int|null $width The width property
    */
    private ?int $width = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Video
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Video {
        return new Video();
    }

    /**
     * Gets the bitrate property value. The bitrate property
     * @return int|null
    */
    public function getBitrate(): ?int {
        return $this->bitrate;
    }

    /**
     * Gets the codec property value. The codec property
     * @return string|null
    */
    public function getCodec(): ?string {
        return $this->codec;
    }

    /**
     * Gets the duration property value. A Duration represents a signed, fixed-length span of time represented as a count of seconds and fractions of seconds at nanosecond resolution. It is independent of any calendar and concepts like "day" or "month". It is related to Timestamp in that the difference between two Timestamp values is a Duration and it can be added or subtracted from a Timestamp. Range is approximately +-10,000 years. # Examples Example 1: Compute Duration from two Timestamps in pseudo code.     Timestamp start = ...;     Timestamp end = ...;     Duration duration = ...;     duration.seconds = end.seconds - start.seconds;     duration.nanos = end.nanos - start.nanos;     if (duration.seconds < 0 && duration.nanos > 0) {       duration.seconds += 1;       duration.nanos -= 1000000000;     } else if (duration.seconds > 0 && duration.nanos < 0) {       duration.seconds -= 1;       duration.nanos += 1000000000;     } Example 2: Compute Timestamp from Timestamp + Duration in pseudo code.     Timestamp start = ...;     Duration duration = ...;     Timestamp end = ...;     end.seconds = start.seconds + duration.seconds;     end.nanos = start.nanos + duration.nanos;     if (end.nanos < 0) {       end.seconds -= 1;       end.nanos += 1000000000;     } else if (end.nanos >= 1000000000) {       end.seconds += 1;       end.nanos -= 1000000000;     } Example 3: Compute Duration from datetime.timedelta in Python.     td = datetime.timedelta(days=3, minutes=10)     duration = Duration()     duration.FromTimedelta(td) # JSON Mapping In JSON format, the Duration type is encoded as a string rather than an object, where the string ends in the suffix "s" (indicating seconds) and is preceded by the number of seconds, with nanoseconds expressed as fractional seconds. For example, 3 seconds with 0 nanoseconds should be encoded in JSON format as "3s", while 3 seconds and 1 nanosecond should be expressed in JSON format as "3.000000001s", and 3 seconds and 1 microsecond should be expressed in JSON format as "3.000001s".
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        return $this->duration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bitrate' => fn(ParseNode $n) => $o->setBitrate($n->getIntegerValue()),
            'codec' => fn(ParseNode $n) => $o->setCodec($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getDateIntervalValue()),
            'file' => fn(ParseNode $n) => $o->setFile($n->getObjectValue([File::class, 'createFromDiscriminatorValue'])),
            'framerate' => fn(ParseNode $n) => $o->setFramerate($n->getStringValue()),
            'hdr' => fn(ParseNode $n) => $o->setHdr($n->getBooleanValue()),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'poster' => fn(ParseNode $n) => $o->setPoster($n->getObjectValue([Image::class, 'createFromDiscriminatorValue'])),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getEnumValue(Visibility::class)),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the file property value. The file property
     * @return File|null
    */
    public function getFile(): ?File {
        return $this->file;
    }

    /**
     * Gets the framerate property value. The framerate property
     * @return string|null
    */
    public function getFramerate(): ?string {
        return $this->framerate;
    }

    /**
     * Gets the hdr property value. The hdr property
     * @return bool|null
    */
    public function getHdr(): ?bool {
        return $this->hdr;
    }

    /**
     * Gets the height property value. The height property
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the poster property value. The poster property
     * @return Image|null
    */
    public function getPoster(): ?Image {
        return $this->poster;
    }

    /**
     * Gets the visibility property value. The visibility property
     * @return Visibility|null
    */
    public function getVisibility(): ?Visibility {
        return $this->visibility;
    }

    /**
     * Gets the width property value. The width property
     * @return int|null
    */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('bitrate', $this->getBitrate());
        $writer->writeStringValue('codec', $this->getCodec());
        $writer->writeDateIntervalValue('duration', $this->getDuration());
        $writer->writeObjectValue('file', $this->getFile());
        $writer->writeStringValue('framerate', $this->getFramerate());
        $writer->writeBooleanValue('hdr', $this->getHdr());
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('poster', $this->getPoster());
        $writer->writeEnumValue('visibility', $this->getVisibility());
        $writer->writeIntegerValue('width', $this->getWidth());
    }

    /**
     * Sets the bitrate property value. The bitrate property
     * @param int|null $value Value to set for the bitrate property.
    */
    public function setBitrate(?int $value): void {
        $this->bitrate = $value;
    }

    /**
     * Sets the codec property value. The codec property
     * @param string|null $value Value to set for the codec property.
    */
    public function setCodec(?string $value): void {
        $this->codec = $value;
    }

    /**
     * Sets the duration property value. A Duration represents a signed, fixed-length span of time represented as a count of seconds and fractions of seconds at nanosecond resolution. It is independent of any calendar and concepts like "day" or "month". It is related to Timestamp in that the difference between two Timestamp values is a Duration and it can be added or subtracted from a Timestamp. Range is approximately +-10,000 years. # Examples Example 1: Compute Duration from two Timestamps in pseudo code.     Timestamp start = ...;     Timestamp end = ...;     Duration duration = ...;     duration.seconds = end.seconds - start.seconds;     duration.nanos = end.nanos - start.nanos;     if (duration.seconds < 0 && duration.nanos > 0) {       duration.seconds += 1;       duration.nanos -= 1000000000;     } else if (duration.seconds > 0 && duration.nanos < 0) {       duration.seconds -= 1;       duration.nanos += 1000000000;     } Example 2: Compute Timestamp from Timestamp + Duration in pseudo code.     Timestamp start = ...;     Duration duration = ...;     Timestamp end = ...;     end.seconds = start.seconds + duration.seconds;     end.nanos = start.nanos + duration.nanos;     if (end.nanos < 0) {       end.seconds -= 1;       end.nanos += 1000000000;     } else if (end.nanos >= 1000000000) {       end.seconds += 1;       end.nanos -= 1000000000;     } Example 3: Compute Duration from datetime.timedelta in Python.     td = datetime.timedelta(days=3, minutes=10)     duration = Duration()     duration.FromTimedelta(td) # JSON Mapping In JSON format, the Duration type is encoded as a string rather than an object, where the string ends in the suffix "s" (indicating seconds) and is preceded by the number of seconds, with nanoseconds expressed as fractional seconds. For example, 3 seconds with 0 nanoseconds should be encoded in JSON format as "3s", while 3 seconds and 1 nanosecond should be expressed in JSON format as "3.000000001s", and 3 seconds and 1 microsecond should be expressed in JSON format as "3.000001s".
     * @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value): void {
        $this->duration = $value;
    }

    /**
     * Sets the file property value. The file property
     * @param File|null $value Value to set for the file property.
    */
    public function setFile(?File $value): void {
        $this->file = $value;
    }

    /**
     * Sets the framerate property value. The framerate property
     * @param string|null $value Value to set for the framerate property.
    */
    public function setFramerate(?string $value): void {
        $this->framerate = $value;
    }

    /**
     * Sets the hdr property value. The hdr property
     * @param bool|null $value Value to set for the hdr property.
    */
    public function setHdr(?bool $value): void {
        $this->hdr = $value;
    }

    /**
     * Sets the height property value. The height property
     * @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value): void {
        $this->height = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the poster property value. The poster property
     * @param Image|null $value Value to set for the poster property.
    */
    public function setPoster(?Image $value): void {
        $this->poster = $value;
    }

    /**
     * Sets the visibility property value. The visibility property
     * @param Visibility|null $value Value to set for the visibility property.
    */
    public function setVisibility(?Visibility $value): void {
        $this->visibility = $value;
    }

    /**
     * Sets the width property value. The width property
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->width = $value;
    }

}
