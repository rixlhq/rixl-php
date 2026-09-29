<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Domain;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DomainRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DomainRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?DomainRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DomainRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DomainRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DomainRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DomainRequestBuilderDeleteQueryParameters.
     * @param string|null $user_id 
     * @return DomainRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?string $user_id = null): DomainRequestBuilderDeleteQueryParameters {
        return new DomainRequestBuilderDeleteQueryParameters($user_id);
    }

}
