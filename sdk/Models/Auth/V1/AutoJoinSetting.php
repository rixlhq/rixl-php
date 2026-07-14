<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AutoJoinSetting implements Parsable 
{
    /**
     * @var bool|null $enabled The enabled property
    */
    private ?bool $enabled = null;
    
    /**
     * @var bool|null $present The present property
    */
    private ?bool $present = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutoJoinSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutoJoinSetting {
        return new AutoJoinSetting();
    }

    /**
     * Gets the enabled property value. The enabled property
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'present' => fn(ParseNode $n) => $o->setPresent($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the present property value. The present property
     * @return bool|null
    */
    public function getPresent(): ?bool {
        return $this->present;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeBooleanValue('present', $this->getPresent());
    }

    /**
     * Sets the enabled property value. The enabled property
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the present property value. The present property
     * @param bool|null $value Value to set for the present property.
    */
    public function setPresent(?bool $value): void {
        $this->present = $value;
    }

}
