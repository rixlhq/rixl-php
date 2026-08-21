<?php

namespace Rixl\Sdk\Analytics\V1\Dashboards\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Dashboard_ItemRequestBuilderDeleteRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Dashboard_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public ?Dashboard_ItemRequestBuilderDeleteQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Dashboard_ItemRequestBuilderDeleteRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Dashboard_ItemRequestBuilderDeleteQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Dashboard_ItemRequestBuilderDeleteQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Dashboard_ItemRequestBuilderDeleteQueryParameters.
     * @param int|null $expected_revision 
     * @return Dashboard_ItemRequestBuilderDeleteQueryParameters
    */
    public static function createQueryParameters(?int $expected_revision = null): Dashboard_ItemRequestBuilderDeleteQueryParameters {
        return new Dashboard_ItemRequestBuilderDeleteQueryParameters($expected_revision);
    }

}
