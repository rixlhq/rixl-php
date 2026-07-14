<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Item\Attachments;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttachmentsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AttachmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AttachmentsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AttachmentsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AttachmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AttachmentsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AttachmentsRequestBuilderGetQueryParameters.
     * @param string|null $userUserId 
     * @return AttachmentsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $userUserId = null): AttachmentsRequestBuilderGetQueryParameters {
        return new AttachmentsRequestBuilderGetQueryParameters($userUserId);
    }

}
