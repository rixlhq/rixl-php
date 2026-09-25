<?php

namespace Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Attachments;

use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Rixl\Sdk\Auth\V1\Memberships\Item\Policies\Attachments\Item\WithAttachment_ItemRequestBuilder;

/**
 * Builds and executes requests for operations under /auth/v1/memberships/{org_-id}/policies/attachments
*/
class AttachmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Rixl/Sdk.auth.v1.memberships.item.policies.attachments.item collection
     * @param string $attachment_id Unique identifier of the item
     * @return WithAttachment_ItemRequestBuilder
    */
    public function byAttachment_id(string $attachment_id): WithAttachment_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attachment_id'] = $attachment_id;
        return new WithAttachment_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AttachmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auth/v1/memberships/{org_%2Did}/policies/attachments');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
