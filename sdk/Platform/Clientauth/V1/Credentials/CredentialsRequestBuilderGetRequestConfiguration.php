<?php

namespace Rixl\Sdk\Platform\Clientauth\V1\Credentials;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CredentialsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CredentialsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CredentialsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CredentialsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CredentialsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CredentialsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CredentialsRequestBuilderGetQueryParameters.
     * @param string|null $org_id 
     * @param int|null $paginationLimit Maximum number of items to return.
     * @param int|null $paginationOffset Number of items to skip before collecting the result set.
     * @return CredentialsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $org_id = null, ?int $paginationLimit = null, ?int $paginationOffset = null): CredentialsRequestBuilderGetQueryParameters {
        return new CredentialsRequestBuilderGetQueryParameters($org_id, $paginationLimit, $paginationOffset);
    }

}
