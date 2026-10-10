<?php

namespace Rixl\Sdk\Models\Billing\V1;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Subscription implements Parsable 
{
    /**
     * @var bool|null $cancel_at_period_end The cancel_at_period_end property
    */
    private ?bool $cancel_at_period_end = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var DateTime|null $current_period_end A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
    */
    private ?DateTime $current_period_end = null;
    
    /**
     * @var bool|null $expiring_soon The expiring_soon property
    */
    private ?bool $expiring_soon = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $plan_id The plan_id property
    */
    private ?string $plan_id = null;
    
    /**
     * @var string|null $plan_name The plan_name property
    */
    private ?string $plan_name = null;
    
    /**
     * @var PlanType|null $plan_type The plan_type property
    */
    private ?PlanType $plan_type = null;
    
    /**
     * @var string|null $price The price property
    */
    private ?string $price = null;
    
    /**
     * @var SubscriptionStatus|null $status The status property
    */
    private ?SubscriptionStatus $status = null;
    
    /**
     * @var bool|null $trials_ending_soon The trials_ending_soon property
    */
    private ?bool $trials_ending_soon = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Subscription
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Subscription {
        return new Subscription();
    }

    /**
     * Gets the cancel_at_period_end property value. The cancel_at_period_end property
     * @return bool|null
    */
    public function getCancelAtPeriodEnd(): ?bool {
        return $this->cancel_at_period_end;
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the current_period_end property value. A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
     * @return DateTime|null
    */
    public function getCurrentPeriodEnd(): ?DateTime {
        return $this->current_period_end;
    }

    /**
     * Gets the expiring_soon property value. The expiring_soon property
     * @return bool|null
    */
    public function getExpiringSoon(): ?bool {
        return $this->expiring_soon;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancel_at_period_end' => fn(ParseNode $n) => $o->setCancelAtPeriodEnd($n->getBooleanValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'current_period_end' => fn(ParseNode $n) => $o->setCurrentPeriodEnd($n->getDateTimeValue()),
            'expiring_soon' => fn(ParseNode $n) => $o->setExpiringSoon($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'plan_id' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'plan_name' => fn(ParseNode $n) => $o->setPlanName($n->getStringValue()),
            'plan_type' => fn(ParseNode $n) => $o->setPlanType($n->getEnumValue(PlanType::class)),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SubscriptionStatus::class)),
            'trials_ending_soon' => fn(ParseNode $n) => $o->setTrialsEndingSoon($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the plan_id property value. The plan_id property
     * @return string|null
    */
    public function getPlanId(): ?string {
        return $this->plan_id;
    }

    /**
     * Gets the plan_name property value. The plan_name property
     * @return string|null
    */
    public function getPlanName(): ?string {
        return $this->plan_name;
    }

    /**
     * Gets the plan_type property value. The plan_type property
     * @return PlanType|null
    */
    public function getPlanType(): ?PlanType {
        return $this->plan_type;
    }

    /**
     * Gets the price property value. The price property
     * @return string|null
    */
    public function getPrice(): ?string {
        return $this->price;
    }

    /**
     * Gets the status property value. The status property
     * @return SubscriptionStatus|null
    */
    public function getStatus(): ?SubscriptionStatus {
        return $this->status;
    }

    /**
     * Gets the trials_ending_soon property value. The trials_ending_soon property
     * @return bool|null
    */
    public function getTrialsEndingSoon(): ?bool {
        return $this->trials_ending_soon;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cancel_at_period_end', $this->getCancelAtPeriodEnd());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeDateTimeValue('current_period_end', $this->getCurrentPeriodEnd());
        $writer->writeBooleanValue('expiring_soon', $this->getExpiringSoon());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('plan_id', $this->getPlanId());
        $writer->writeStringValue('plan_name', $this->getPlanName());
        $writer->writeEnumValue('plan_type', $this->getPlanType());
        $writer->writeStringValue('price', $this->getPrice());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeBooleanValue('trials_ending_soon', $this->getTrialsEndingSoon());
    }

    /**
     * Sets the cancel_at_period_end property value. The cancel_at_period_end property
     * @param bool|null $value Value to set for the cancel_at_period_end property.
    */
    public function setCancelAtPeriodEnd(?bool $value): void {
        $this->cancel_at_period_end = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the current_period_end property value. A Timestamp represents a point in time independent of any time zone or local calendar, encoded as a count of seconds and fractions of seconds at nanosecond resolution. The count is relative to an epoch at UTC midnight on January 1, 1970, in the proleptic Gregorian calendar which extends the Gregorian calendar backwards to year one. All minutes are 60 seconds long. Leap seconds are "smeared" so that no leap second table is needed for interpretation, using a [24-hour linear smear](https://developers.google.com/time/smear). The range is from 0001-01-01T00:00:00Z to 9999-12-31T23:59:59.999999999Z. By restricting to that range, we ensure that we can convert to and from [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) date strings. # Examples Example 1: Compute Timestamp from POSIX `time()`.     Timestamp timestamp;     timestamp.set_seconds(time(NULL));     timestamp.set_nanos(0); Example 2: Compute Timestamp from POSIX `gettimeofday()`.     struct timeval tv;     gettimeofday(&tv, NULL);     Timestamp timestamp;     timestamp.set_seconds(tv.tv_sec);     timestamp.set_nanos(tv.tv_usec * 1000); Example 3: Compute Timestamp from Win32 `GetSystemTimeAsFileTime()`.     FILETIME ft;     GetSystemTimeAsFileTime(&ft);     UINT64 ticks = (((UINT64)ft.dwHighDateTime) << 32) | ft.dwLowDateTime;     // A Windows tick is 100 nanoseconds. Windows epoch 1601-01-01T00:00:00Z     // is 11644473600 seconds before Unix epoch 1970-01-01T00:00:00Z.     Timestamp timestamp;     timestamp.set_seconds((INT64) ((ticks / 10000000) - 11644473600LL));     timestamp.set_nanos((INT32) ((ticks % 10000000) * 100)); Example 4: Compute Timestamp from Java `System.currentTimeMillis()`.     long millis = System.currentTimeMillis();     Timestamp timestamp = Timestamp.newBuilder().setSeconds(millis / 1000)         .setNanos((int) ((millis % 1000) * 1000000)).build(); Example 5: Compute Timestamp from Java `Instant.now()`.     Instant now = Instant.now();     Timestamp timestamp =         Timestamp.newBuilder().setSeconds(now.getEpochSecond())             .setNanos(now.getNano()).build(); Example 6: Compute Timestamp from current time in Python.     timestamp = Timestamp()     timestamp.GetCurrentTime() # JSON Mapping In JSON format, the Timestamp type is encoded as a string in the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format. That is, the format is "{year}-{month}-{day}T{hour}:{min}:{sec}[.{frac_sec}]Z" where {year} is always expressed using four digits while {month}, {day}, {hour}, {min}, and {sec} are zero-padded to two digits each. The fractional seconds, which can go up to 9 digits (i.e. up to 1 nanosecond resolution), are optional. The "Z" suffix indicates the timezone ("UTC"); the timezone is required. A proto3 JSON serializer should always use UTC (as indicated by "Z") when printing the Timestamp type and a proto3 JSON parser should be able to accept both UTC and other timezones (as indicated by an offset). For example, "2017-01-15T01:30:15.01Z" encodes 15.01 seconds past 01:30 UTC on January 15, 2017. In JavaScript, one can convert a Date object to this format using the standard [toISOString()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date/toISOString) method. In Python, a standard `datetime.datetime` object can be converted to this format using [`strftime`](https://docs.python.org/2/library/time.html#time.strftime) with the time format spec '%Y-%m-%dT%H:%M:%S.%fZ'. Likewise, in Java, one can use the Joda Time's [`ISODateTimeFormat.dateTime()`]( http://joda-time.sourceforge.net/apidocs/org/joda/time/format/ISODateTimeFormat.html#dateTime() ) to obtain a formatter capable of generating timestamps in this format.
     * @param DateTime|null $value Value to set for the current_period_end property.
    */
    public function setCurrentPeriodEnd(?DateTime $value): void {
        $this->current_period_end = $value;
    }

    /**
     * Sets the expiring_soon property value. The expiring_soon property
     * @param bool|null $value Value to set for the expiring_soon property.
    */
    public function setExpiringSoon(?bool $value): void {
        $this->expiring_soon = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the plan_id property value. The plan_id property
     * @param string|null $value Value to set for the plan_id property.
    */
    public function setPlanId(?string $value): void {
        $this->plan_id = $value;
    }

    /**
     * Sets the plan_name property value. The plan_name property
     * @param string|null $value Value to set for the plan_name property.
    */
    public function setPlanName(?string $value): void {
        $this->plan_name = $value;
    }

    /**
     * Sets the plan_type property value. The plan_type property
     * @param PlanType|null $value Value to set for the plan_type property.
    */
    public function setPlanType(?PlanType $value): void {
        $this->plan_type = $value;
    }

    /**
     * Sets the price property value. The price property
     * @param string|null $value Value to set for the price property.
    */
    public function setPrice(?string $value): void {
        $this->price = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param SubscriptionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SubscriptionStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the trials_ending_soon property value. The trials_ending_soon property
     * @param bool|null $value Value to set for the trials_ending_soon property.
    */
    public function setTrialsEndingSoon(?bool $value): void {
        $this->trials_ending_soon = $value;
    }

}
