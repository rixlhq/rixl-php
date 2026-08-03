# Contributing

Everything under `sdk/` is generated. Do not edit it by hand — the next
regeneration will overwrite your changes. Fix the OpenAPI spec instead, then
regenerate.

## Regenerating the SDK

The client is produced by [Kiota](https://learn.microsoft.com/openapi/kiota/)
1.34.1 from the upstream Rixl OpenAPI spec. With the `kiota` CLI on your PATH:

```bash
./gen.sh
```

That runs:

```bash
kiota generate \
    -l php \
    -c RixlClient \
    -n 'Rixl\Sdk' \
    -d https://raw.githubusercontent.com/rixlhq/openapi/refs/heads/main/openapi.yaml \
    -o "./sdk" \
    --clean-output \
    --exclude-backward-compatible
```

`--clean-output` wipes `sdk/` first, so regeneration is the only way changes to
the spec reach this repo. Commit the result on its own, without mixing in
hand-written changes.

Known gap in the PHP generator: fields the spec types as 64-bit integers
(`total` on list responses, `expires_in` on minted tokens) are dropped from the
generated models rather than emitted as untyped nodes, which the Java and .NET
generators do emit. If you need those values in PHP, read them off the raw
response.

## Installing dependencies

```bash
composer install
```

The package has no build step — `sdk/` is autoloaded under the `Rixl\Sdk\`
PSR-4 prefix.

## Releasing

Releases are cut by release-please from conventional commits. `composer.json`
carries no `version` field on purpose; Packagist takes the version from the git
tag.
