<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards\Item\Export;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Rixl\Sdk\Models\Analytics\V1\ExportFormat;

class ExportPostRequestBody implements Parsable 
{
    /**
     * @var string|null $dashboard_id The dashboard_id property
    */
    private ?string $dashboard_id = null;
    
    /**
     * @var ExportFormat|null $format The format property
    */
    private ?ExportFormat $format = null;
    
    /**
     * @var string|null $time_end The time_end property
    */
    private ?string $time_end = null;
    
    /**
     * @var string|null $time_start The time_start property
    */
    private ?string $time_start = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExportPostRequestBody {
        return new ExportPostRequestBody();
    }

    /**
     * Gets the dashboard_id property value. The dashboard_id property
     * @return string|null
    */
    public function getDashboardId(): ?string {
        return $this->dashboard_id;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dashboard_id' => fn(ParseNode $n) => $o->setDashboardId($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getEnumValue(ExportFormat::class)),
            'time_end' => fn(ParseNode $n) => $o->setTimeEnd($n->getStringValue()),
            'time_start' => fn(ParseNode $n) => $o->setTimeStart($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. The format property
     * @return ExportFormat|null
    */
    public function getFormat(): ?ExportFormat {
        return $this->format;
    }

    /**
     * Gets the time_end property value. The time_end property
     * @return string|null
    */
    public function getTimeEnd(): ?string {
        return $this->time_end;
    }

    /**
     * Gets the time_start property value. The time_start property
     * @return string|null
    */
    public function getTimeStart(): ?string {
        return $this->time_start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dashboard_id', $this->getDashboardId());
        $writer->writeEnumValue('format', $this->getFormat());
        $writer->writeStringValue('time_end', $this->getTimeEnd());
        $writer->writeStringValue('time_start', $this->getTimeStart());
    }

    /**
     * Sets the dashboard_id property value. The dashboard_id property
     * @param string|null $value Value to set for the dashboard_id property.
    */
    public function setDashboardId(?string $value): void {
        $this->dashboard_id = $value;
    }

    /**
     * Sets the format property value. The format property
     * @param ExportFormat|null $value Value to set for the format property.
    */
    public function setFormat(?ExportFormat $value): void {
        $this->format = $value;
    }

    /**
     * Sets the time_end property value. The time_end property
     * @param string|null $value Value to set for the time_end property.
    */
    public function setTimeEnd(?string $value): void {
        $this->time_end = $value;
    }

    /**
     * Sets the time_start property value. The time_start property
     * @param string|null $value Value to set for the time_start property.
    */
    public function setTimeStart(?string $value): void {
        $this->time_start = $value;
    }

}
