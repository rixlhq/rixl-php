<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class ExportDashboardResponse implements Parsable 
{
    /**
     * @var StreamInterface|null $content The content property
    */
    private ?StreamInterface $content = null;
    
    /**
     * @var string|null $content_type The content_type property
    */
    private ?string $content_type = null;
    
    /**
     * @var string|null $filename The filename property
    */
    private ?string $filename = null;
    
    /**
     * @var int|null $row_count The row_count property
    */
    private ?int $row_count = null;
    
    /**
     * @var int|null $widget_count The widget_count property
    */
    private ?int $widget_count = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportDashboardResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExportDashboardResponse {
        return new ExportDashboardResponse();
    }

    /**
     * Gets the content property value. The content property
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * Gets the content_type property value. The content_type property
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->content_type;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'content_type' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'filename' => fn(ParseNode $n) => $o->setFilename($n->getStringValue()),
            'row_count' => fn(ParseNode $n) => $o->setRowCount($n->getIntegerValue()),
            'widget_count' => fn(ParseNode $n) => $o->setWidgetCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the filename property value. The filename property
     * @return string|null
    */
    public function getFilename(): ?string {
        return $this->filename;
    }

    /**
     * Gets the row_count property value. The row_count property
     * @return int|null
    */
    public function getRowCount(): ?int {
        return $this->row_count;
    }

    /**
     * Gets the widget_count property value. The widget_count property
     * @return int|null
    */
    public function getWidgetCount(): ?int {
        return $this->widget_count;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeStringValue('content_type', $this->getContentType());
        $writer->writeStringValue('filename', $this->getFilename());
        $writer->writeIntegerValue('row_count', $this->getRowCount());
        $writer->writeIntegerValue('widget_count', $this->getWidgetCount());
    }

    /**
     * Sets the content property value. The content property
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->content = $value;
    }

    /**
     * Sets the content_type property value. The content_type property
     * @param string|null $value Value to set for the content_type property.
    */
    public function setContentType(?string $value): void {
        $this->content_type = $value;
    }

    /**
     * Sets the filename property value. The filename property
     * @param string|null $value Value to set for the filename property.
    */
    public function setFilename(?string $value): void {
        $this->filename = $value;
    }

    /**
     * Sets the row_count property value. The row_count property
     * @param int|null $value Value to set for the row_count property.
    */
    public function setRowCount(?int $value): void {
        $this->row_count = $value;
    }

    /**
     * Sets the widget_count property value. The widget_count property
     * @param int|null $value Value to set for the widget_count property.
    */
    public function setWidgetCount(?int $value): void {
        $this->widget_count = $value;
    }

}
