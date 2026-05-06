#!/usr/bin/env bash
# Regenerate the PHP SDK from the upstream RIXL OpenAPI spec.
set -euo pipefail

kiota generate \
    -l php \
    -c RixlClient \
    -n 'Rixl\Sdk' \
    -d https://raw.githubusercontent.com/rixlhq/openapi/refs/heads/main/openapi.yaml \
    -o "$(dirname "$0")/sdk" \
    --clean-output \
    --exclude-backward-compatible
