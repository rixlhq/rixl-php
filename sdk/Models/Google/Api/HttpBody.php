<?php

namespace Rixl\Sdk\Models\Google\Api;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;
use Rixl\Sdk\Models\Google\Protobuf\Any;

/**
 * Message that represents an arbitrary HTTP body. It should only be used for payload formats that can't be represented as JSON, such as raw binary or an HTML page. This message can be used both in streaming and non-streaming API methods in the request as well as the response. It can be used as a top-level request field, which is convenient if one wants to extract parameters from either the URL or HTTP template into the request fields and also want access to the raw HTTP body. Example:     message GetResourceRequest {       // A unique request id.       string request_id = 1;       // The raw HTTP body is bound to this field.       google.api.HttpBody http_body = 2;     }     service ResourceService {       rpc GetResource(GetResourceRequest)         returns (google.api.HttpBody);       rpc UpdateResource(google.api.HttpBody)         returns (google.protobuf.Empty);     } Example with streaming methods:     service CaldavService {       rpc GetCalendar(stream google.api.HttpBody)         returns (stream google.api.HttpBody);       rpc UpdateCalendar(stream google.api.HttpBody)         returns (stream google.api.HttpBody);     } Use of this type only changes how the request and response bodies are handled, all other features will continue to work unchanged.
*/
class HttpBody implements Parsable 
{
    /**
     * @var string|null $content_type The HTTP Content-Type header value specifying the content type of the body.
    */
    private ?string $content_type = null;
    
    /**
     * @var StreamInterface|null $data The HTTP request/response body as raw binary.
    */
    private ?StreamInterface $data = null;
    
    /**
     * @var array<Any>|null $extensions Application specific response metadata. Must be set in the first response for streaming APIs.
    */
    private ?array $extensions = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HttpBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HttpBody {
        return new HttpBody();
    }

    /**
     * Gets the content_type property value. The HTTP Content-Type header value specifying the content type of the body.
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->content_type;
    }

    /**
     * Gets the data property value. The HTTP request/response body as raw binary.
     * @return StreamInterface|null
    */
    public function getData(): ?StreamInterface {
        return $this->data;
    }

    /**
     * Gets the extensions property value. Application specific response metadata. Must be set in the first response for streaming APIs.
     * @return array<Any>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content_type' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'data' => fn(ParseNode $n) => $o->setData($n->getBinaryContent()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Any::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('content_type', $this->getContentType());
        $writer->writeBinaryContent('data', $this->getData());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
    }

    /**
     * Sets the content_type property value. The HTTP Content-Type header value specifying the content type of the body.
     * @param string|null $value Value to set for the content_type property.
    */
    public function setContentType(?string $value): void {
        $this->content_type = $value;
    }

    /**
     * Sets the data property value. The HTTP request/response body as raw binary.
     * @param StreamInterface|null $value Value to set for the data property.
    */
    public function setData(?StreamInterface $value): void {
        $this->data = $value;
    }

    /**
     * Sets the extensions property value. Application specific response metadata. Must be set in the first response for streaming APIs.
     * @param array<Any>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->extensions = $value;
    }

}
