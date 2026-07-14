<?php

namespace Rixl\Sdk\Auth\V1\Users\Current\Totp\Delete;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeleteRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeleteRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeleteRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeleteRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeleteRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeleteRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeleteRequestBuilderDeleteQueryParameters.
     * @param string|null $userId 
     * @return DeleteRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $userId = null): DeleteRequestBuilderDeleteQueryParameters {
        return new DeleteRequestBuilderDeleteQueryParameters($userId);
    }

}
