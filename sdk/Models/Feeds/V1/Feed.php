<?php

namespace Rixl\Sdk\Models\Feeds\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Feed implements Parsable 
{
    /**
     * @var bool|null $allowImages The allowImages property
    */
    private ?bool $allowImages = null;
    
    /**
     * @var bool|null $allowVideos The allowVideos property
    */
    private ?bool $allowVideos = null;
    
    /**
     * @var DateTime|null $createdAt A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $hasComments The hasComments property
    */
    private ?bool $hasComments = null;
    
    /**
     * @var bool|null $hasLikes The hasLikes property
    */
    private ?bool $hasLikes = null;
    
    /**
     * @var bool|null $hasShares The hasShares property
    */
    private ?bool $hasShares = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $projectId The projectId property
    */
    private ?string $projectId = null;
    
    /**
     * @var DateTime|null $updatedAt A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Feed
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Feed {
        return new Feed();
    }

    /**
     * Gets the allowImages property value. The allowImages property
     * @return bool|null
    */
    public function getAllowImages(): ?bool {
        return $this->allowImages;
    }

    /**
     * Gets the allowVideos property value. The allowVideos property
     * @return bool|null
    */
    public function getAllowVideos(): ?bool {
        return $this->allowVideos;
    }

    /**
     * Gets the createdAt property value. A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowImages' => fn(ParseNode $n) => $o->setAllowImages($n->getBooleanValue()),
            'allowVideos' => fn(ParseNode $n) => $o->setAllowVideos($n->getBooleanValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'hasComments' => fn(ParseNode $n) => $o->setHasComments($n->getBooleanValue()),
            'hasLikes' => fn(ParseNode $n) => $o->setHasLikes($n->getBooleanValue()),
            'hasShares' => fn(ParseNode $n) => $o->setHasShares($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'projectId' => fn(ParseNode $n) => $o->setProjectId($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the hasComments property value. The hasComments property
     * @return bool|null
    */
    public function getHasComments(): ?bool {
        return $this->hasComments;
    }

    /**
     * Gets the hasLikes property value. The hasLikes property
     * @return bool|null
    */
    public function getHasLikes(): ?bool {
        return $this->hasLikes;
    }

    /**
     * Gets the hasShares property value. The hasShares property
     * @return bool|null
    */
    public function getHasShares(): ?bool {
        return $this->hasShares;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the projectId property value. The projectId property
     * @return string|null
    */
    public function getProjectId(): ?string {
        return $this->projectId;
    }

    /**
     * Gets the updatedAt property value. A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updatedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowImages', $this->getAllowImages());
        $writer->writeBooleanValue('allowVideos', $this->getAllowVideos());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('hasComments', $this->getHasComments());
        $writer->writeBooleanValue('hasLikes', $this->getHasLikes());
        $writer->writeBooleanValue('hasShares', $this->getHasShares());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('projectId', $this->getProjectId());
        $writer->writeDateTimeValue('updatedAt', $this->getUpdatedAt());
    }

    /**
     * Sets the allowImages property value. The allowImages property
     * @param bool|null $value Value to set for the allowImages property.
    */
    public function setAllowImages(?bool $value): void {
        $this->allowImages = $value;
    }

    /**
     * Sets the allowVideos property value. The allowVideos property
     * @param bool|null $value Value to set for the allowVideos property.
    */
    public function setAllowVideos(?bool $value): void {
        $this->allowVideos = $value;
    }

    /**
     * Sets the createdAt property value. A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the hasComments property value. The hasComments property
     * @param bool|null $value Value to set for the hasComments property.
    */
    public function setHasComments(?bool $value): void {
        $this->hasComments = $value;
    }

    /**
     * Sets the hasLikes property value. The hasLikes property
     * @param bool|null $value Value to set for the hasLikes property.
    */
    public function setHasLikes(?bool $value): void {
        $this->hasLikes = $value;
    }

    /**
     * Sets the hasShares property value. The hasShares property
     * @param bool|null $value Value to set for the hasShares property.
    */
    public function setHasShares(?bool $value): void {
        $this->hasShares = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the projectId property value. The projectId property
     * @param string|null $value Value to set for the projectId property.
    */
    public function setProjectId(?string $value): void {
        $this->projectId = $value;
    }

    /**
     * Sets the updatedAt property value. A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

}
