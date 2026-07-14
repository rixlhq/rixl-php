<?php

namespace Rixl\Sdk\Models\Project\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListProjectsResponse implements Parsable 
{
    /**
     * @var array<Project>|null $projects The projects property
    */
    private ?array $projects = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListProjectsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListProjectsResponse {
        return new ListProjectsResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'projects' => fn(ParseNode $n) => $o->setProjects($n->getCollectionOfObjectValues([Project::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the projects property value. The projects property
     * @return array<Project>|null
    */
    public function getProjects(): ?array {
        return $this->projects;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('projects', $this->getProjects());
    }

    /**
     * Sets the projects property value. The projects property
     * @param array<Project>|null $value Value to set for the projects property.
    */
    public function setProjects(?array $value): void {
        $this->projects = $value;
    }

}
