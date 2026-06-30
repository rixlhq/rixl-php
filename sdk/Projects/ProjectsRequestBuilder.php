<?php

namespace Rixl\Sdk\Projects;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Projects\Item\WithProjectItemRequestBuilder;

/**
 * Builds and executes requests for operations under /projects
*/
class ProjectsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.projects.item collection
     * @param string $projectId Project ID
     * @return WithProjectItemRequestBuilder
    */
    public function byProjectId(string $projectId): WithProjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['projectId'] = $projectId;
        return new WithProjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProjectsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/projects');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
