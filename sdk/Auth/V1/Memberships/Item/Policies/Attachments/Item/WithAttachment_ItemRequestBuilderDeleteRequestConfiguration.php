<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Attachments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithAttachment_ItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithAttachment_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithAttachment_ItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithAttachment_ItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithAttachment_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithAttachment_ItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithAttachment_ItemRequestBuilderDeleteQueryParameters.
     * @param string|null $userUserId 
     * @return WithAttachment_ItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $userUserId = null): WithAttachment_ItemRequestBuilderDeleteQueryParameters {
        return new WithAttachment_ItemRequestBuilderDeleteQueryParameters($userUserId);
    }

}
