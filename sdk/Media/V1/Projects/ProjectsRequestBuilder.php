<?php

namespace Rixl\Sdk\Media\V1\Projects;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Media\V1\Projects\Item\WithProject_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /media/v1/projects
*/
class ProjectsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.media.v1.projects.item collection
     * @param string $project_id Unique identifier of the item
     * @return WithProject_ItemRequestBuilder
    */
    public function byProject_id(string $project_id): WithProject_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['project_id'] = $project_id;
        return new WithProject_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProjectsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/media/v1/projects');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
