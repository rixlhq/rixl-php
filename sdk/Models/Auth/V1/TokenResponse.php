<?php

namespace Rixl\Sdk\Models\Auth\V1;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TokenResponse implements Parsable 
{
    /**
     * @var string|null $access_token The access_token property
    */
    private ?string $access_token = null;
    
    /**
     * @var array<Organization>|null $domain_join_suggestions The domain_join_suggestions property
    */
    private ?array $domain_join_suggestions = null;
    
    /**
     * @var string|null $expires_in The expires_in property
    */
    private ?string $expires_in = null;
    
    /**
     * @var string|null $last_active_org_id The last_active_org_id property
    */
    private ?string $last_active_org_id = null;
    
    /**
     * @var string|null $org_id The org_id property
    */
    private ?string $org_id = null;
    
    /**
     * @var string|null $refresh_token The refresh_token property
    */
    private ?string $refresh_token = null;
    
    /**
     * @var string|null $requires_action The requires_action property
    */
    private ?string $requires_action = null;
    
    /**
     * @var string|null $role The role property
    */
    private ?string $role = null;
    
    /**
     * @var string|null $token_type The token_type property
    */
    private ?string $token_type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TokenResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TokenResponse {
        return new TokenResponse();
    }

    /**
     * Gets the access_token property value. The access_token property
     * @return string|null
    */
    public function getAccessToken(): ?string {
        return $this->access_token;
    }

    /**
     * Gets the domain_join_suggestions property value. The domain_join_suggestions property
     * @return array<Organization>|null
    */
    public function getDomainJoinSuggestions(): ?array {
        return $this->domain_join_suggestions;
    }

    /**
     * Gets the expires_in property value. The expires_in property
     * @return string|null
    */
    public function getExpiresIn(): ?string {
        return $this->expires_in;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'access_token' => fn(ParseNode $n) => $o->setAccessToken($n->getStringValue()),
            'domain_join_suggestions' => fn(ParseNode $n) => $o->setDomainJoinSuggestions($n->getCollectionOfObjectValues([Organization::class, 'createFromDiscriminatorValue'])),
            'expires_in' => fn(ParseNode $n) => $o->setExpiresIn($n->getStringValue()),
            'last_active_org_id' => fn(ParseNode $n) => $o->setLastActiveOrgId($n->getStringValue()),
            'org_id' => fn(ParseNode $n) => $o->setOrgId($n->getStringValue()),
            'refresh_token' => fn(ParseNode $n) => $o->setRefreshToken($n->getStringValue()),
            'requires_action' => fn(ParseNode $n) => $o->setRequiresAction($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getStringValue()),
            'token_type' => fn(ParseNode $n) => $o->setTokenType($n->getStringValue()),
        ];
    }

    /**
     * Gets the last_active_org_id property value. The last_active_org_id property
     * @return string|null
    */
    public function getLastActiveOrgId(): ?string {
        return $this->last_active_org_id;
    }

    /**
     * Gets the org_id property value. The org_id property
     * @return string|null
    */
    public function getOrgId(): ?string {
        return $this->org_id;
    }

    /**
     * Gets the refresh_token property value. The refresh_token property
     * @return string|null
    */
    public function getRefreshToken(): ?string {
        return $this->refresh_token;
    }

    /**
     * Gets the requires_action property value. The requires_action property
     * @return string|null
    */
    public function getRequiresAction(): ?string {
        return $this->requires_action;
    }

    /**
     * Gets the role property value. The role property
     * @return string|null
    */
    public function getRole(): ?string {
        return $this->role;
    }

    /**
     * Gets the token_type property value. The token_type property
     * @return string|null
    */
    public function getTokenType(): ?string {
        return $this->token_type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('access_token', $this->getAccessToken());
        $writer->writeCollectionOfObjectValues('domain_join_suggestions', $this->getDomainJoinSuggestions());
        $writer->writeStringValue('expires_in', $this->getExpiresIn());
        $writer->writeStringValue('last_active_org_id', $this->getLastActiveOrgId());
        $writer->writeStringValue('org_id', $this->getOrgId());
        $writer->writeStringValue('refresh_token', $this->getRefreshToken());
        $writer->writeStringValue('requires_action', $this->getRequiresAction());
        $writer->writeStringValue('role', $this->getRole());
        $writer->writeStringValue('token_type', $this->getTokenType());
    }

    /**
     * Sets the access_token property value. The access_token property
     * @param string|null $value Value to set for the access_token property.
    */
    public function setAccessToken(?string $value): void {
        $this->access_token = $value;
    }

    /**
     * Sets the domain_join_suggestions property value. The domain_join_suggestions property
     * @param array<Organization>|null $value Value to set for the domain_join_suggestions property.
    */
    public function setDomainJoinSuggestions(?array $value): void {
        $this->domain_join_suggestions = $value;
    }

    /**
     * Sets the expires_in property value. The expires_in property
     * @param string|null $value Value to set for the expires_in property.
    */
    public function setExpiresIn(?string $value): void {
        $this->expires_in = $value;
    }

    /**
     * Sets the last_active_org_id property value. The last_active_org_id property
     * @param string|null $value Value to set for the last_active_org_id property.
    */
    public function setLastActiveOrgId(?string $value): void {
        $this->last_active_org_id = $value;
    }

    /**
     * Sets the org_id property value. The org_id property
     * @param string|null $value Value to set for the org_id property.
    */
    public function setOrgId(?string $value): void {
        $this->org_id = $value;
    }

    /**
     * Sets the refresh_token property value. The refresh_token property
     * @param string|null $value Value to set for the refresh_token property.
    */
    public function setRefreshToken(?string $value): void {
        $this->refresh_token = $value;
    }

    /**
     * Sets the requires_action property value. The requires_action property
     * @param string|null $value Value to set for the requires_action property.
    */
    public function setRequiresAction(?string $value): void {
        $this->requires_action = $value;
    }

    /**
     * Sets the role property value. The role property
     * @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value): void {
        $this->role = $value;
    }

    /**
     * Sets the token_type property value. The token_type property
     * @param string|null $value Value to set for the token_type property.
    */
    public function setTokenType(?string $value): void {
        $this->token_type = $value;
    }

}
