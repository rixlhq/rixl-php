<?php

namespace Rixl\Sdk\Platform\Clientauth\Credentials;

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
     * @param int|null $limit Pagination limit
     * @param int|null $offset Pagination offset
     * @return CredentialsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $limit = null, ?int $offset = null): CredentialsRequestBuilderGetQueryParameters {
        return new CredentialsRequestBuilderGetQueryParameters($limit, $offset);
    }

}
