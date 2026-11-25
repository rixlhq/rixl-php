<?php

namespace Rixl\Sdk\Auth\V1\Organizations;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OrganizationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OrganizationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OrganizationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OrganizationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OrganizationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrganizationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OrganizationsRequestBuilderGetQueryParameters.
     * @param int|null $page_size 
     * @param string|null $page_token 
     * @param bool|null $show_deleted Includes deleted organizations visible to their owners once lifecycle adds deletion.
     * @return OrganizationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?int $page_size = null, ?string $page_token = null, ?bool $show_deleted = null): OrganizationsRequestBuilderGetQueryParameters {
        return new OrganizationsRequestBuilderGetQueryParameters($page_size, $page_token, $show_deleted);
    }

}
