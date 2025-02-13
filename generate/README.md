# Generate The Library From YAML

We've cached a copy of the swagger.yaml to avoid annoying their API so you can do something like this.

```sh
docker run --rm -v "$(pwd):/local" openapitools/openapi-generator-cli generate \
    --input-spec /local/swagger-2.0.0.json \
    --config /local/generate/config.yaml \
    --generator-name php-nextgen \
    --git-user-id synergitech \
    --git-repo-id sage-php \
    --global-property apiTests=false,modelTests=false \
    --output /local
```

## Just see the swagger

```sh
docker run --rm -v "$(pwd):/local" -p 8080:8080 -e SWAGGER_JSON=/local/swagger-2.0.0.json swaggerapi/swagger-ui
```

or

```sh
docker run --rm -p 8080:8080 -e SWAGGER_JSON_URL=https://raw.githubusercontent.com/SynergiTech/cinolla-php/refs/heads/main/swagger-2.0.0.json swaggerapi/swagger-ui
```