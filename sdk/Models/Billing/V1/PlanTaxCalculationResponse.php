<?php

namespace Rixl\Sdk\Models\Billing\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlanTaxCalculationResponse implements Parsable 
{
    /**
     * @var BillingAddress|null $billingAddress The billingAddress property
    */
    private ?BillingAddress $billingAddress = null;
    
    /**
     * @var BillingCycle|null $billingCycle The billingCycle property
    */
    private ?BillingCycle $billingCycle = null;
    
    /**
     * @var DateTime|null $calculatedAt A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
    */
    private ?DateTime $calculatedAt = null;
    
    /**
     * @var string|null $calculationId The calculationId property
    */
    private ?string $calculationId = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $planId The planId property
    */
    private ?string $planId = null;
    
    /**
     * @var string|null $planName The planName property
    */
    private ?string $planName = null;
    
    /**
     * @var float|null $taxPercentage The taxPercentage property
    */
    private ?float $taxPercentage = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlanTaxCalculationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlanTaxCalculationResponse {
        return new PlanTaxCalculationResponse();
    }

    /**
     * Gets the billingAddress property value. The billingAddress property
     * @return BillingAddress|null
    */
    public function getBillingAddress(): ?BillingAddress {
        return $this->billingAddress;
    }

    /**
     * Gets the billingCycle property value. The billingCycle property
     * @return BillingCycle|null
    */
    public function getBillingCycle(): ?BillingCycle {
        return $this->billingCycle;
    }

    /**
     * Gets the calculatedAt property value. A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
     * @return DateTime|null
    */
    public function getCalculatedAt(): ?DateTime {
        return $this->calculatedAt;
    }

    /**
     * Gets the calculationId property value. The calculationId property
     * @return string|null
    */
    public function getCalculationId(): ?string {
        return $this->calculationId;
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingAddress' => fn(ParseNode $n) => $o->setBillingAddress($n->getObjectValue([BillingAddress::class, 'createFromDiscriminatorValue'])),
            'billingCycle' => fn(ParseNode $n) => $o->setBillingCycle($n->getEnumValue(BillingCycle::class)),
            'calculatedAt' => fn(ParseNode $n) => $o->setCalculatedAt($n->getDateTimeValue()),
            'calculationId' => fn(ParseNode $n) => $o->setCalculationId($n->getStringValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'planName' => fn(ParseNode $n) => $o->setPlanName($n->getStringValue()),
            'taxPercentage' => fn(ParseNode $n) => $o->setTaxPercentage($n->getFloatValue()),
        ];
    }

    /**
     * Gets the planId property value. The planId property
     * @return string|null
    */
    public function getPlanId(): ?string {
        return $this->planId;
    }

    /**
     * Gets the planName property value. The planName property
     * @return string|null
    */
    public function getPlanName(): ?string {
        return $this->planName;
    }

    /**
     * Gets the taxPercentage property value. The taxPercentage property
     * @return float|null
    */
    public function getTaxPercentage(): ?float {
        return $this->taxPercentage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('billingAddress', $this->getBillingAddress());
        $writer->writeEnumValue('billingCycle', $this->getBillingCycle());
        $writer->writeDateTimeValue('calculatedAt', $this->getCalculatedAt());
        $writer->writeStringValue('calculationId', $this->getCalculationId());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeStringValue('planName', $this->getPlanName());
        $writer->writeFloatValue('taxPercentage', $this->getTaxPercentage());
    }

    /**
     * Sets the billingAddress property value. The billingAddress property
     * @param BillingAddress|null $value Value to set for the billingAddress property.
    */
    public function setBillingAddress(?BillingAddress $value): void {
        $this->billingAddress = $value;
    }

    /**
     * Sets the billingCycle property value. The billingCycle property
     * @param BillingCycle|null $value Value to set for the billingCycle property.
    */
    public function setBillingCycle(?BillingCycle $value): void {
        $this->billingCycle = $value;
    }

    /**
     * Sets the calculatedAt property value. A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
     * @param DateTime|null $value Value to set for the calculatedAt property.
    */
    public function setCalculatedAt(?DateTime $value): void {
        $this->calculatedAt = $value;
    }

    /**
     * Sets the calculationId property value. The calculationId property
     * @param string|null $value Value to set for the calculationId property.
    */
    public function setCalculationId(?string $value): void {
        $this->calculationId = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the planId property value. The planId property
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->planId = $value;
    }

    /**
     * Sets the planName property value. The planName property
     * @param string|null $value Value to set for the planName property.
    */
    public function setPlanName(?string $value): void {
        $this->planName = $value;
    }

    /**
     * Sets the taxPercentage property value. The taxPercentage property
     * @param float|null $value Value to set for the taxPercentage property.
    */
    public function setTaxPercentage(?float $value): void {
        $this->taxPercentage = $value;
    }

}
