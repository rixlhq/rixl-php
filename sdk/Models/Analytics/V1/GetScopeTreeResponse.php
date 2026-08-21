<?php

namespace Rixl\Sdk\Models\Analytics\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetScopeTreeResponse implements Parsable 
{
    /**
     * @var string|null $level The level property
    */
    private ?string $level = null;
    
    /**
     * @var array<ScopeNode>|null $nodes The nodes property
    */
    private ?array $nodes = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetScopeTreeResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetScopeTreeResponse {
        return new GetScopeTreeResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'level' => fn(ParseNode $n) => $o->setLevel($n->getStringValue()),
            'nodes' => fn(ParseNode $n) => $o->setNodes($n->getCollectionOfObjectValues([ScopeNode::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the level property value. The level property
     * @return string|null
    */
    public function getLevel(): ?string {
        return $this->level;
    }

    /**
     * Gets the nodes property value. The nodes property
     * @return array<ScopeNode>|null
    */
    public function getNodes(): ?array {
        return $this->nodes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('level', $this->getLevel());
        $writer->writeCollectionOfObjectValues('nodes', $this->getNodes());
    }

    /**
     * Sets the level property value. The level property
     * @param string|null $value Value to set for the level property.
    */
    public function setLevel(?string $value): void {
        $this->level = $value;
    }

    /**
     * Sets the nodes property value. The nodes property
     * @param array<ScopeNode>|null $value Value to set for the nodes property.
    */
    public function setNodes(?array $value): void {
        $this->nodes = $value;
    }

}
