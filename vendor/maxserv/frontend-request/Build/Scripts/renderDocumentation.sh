#!/bin/bash

# This file is meant to be run from the root of the repository.

docker run --rm --user=$(id -u):$(id -g) \
  -v "$(pwd):/PROJECT" \
  -v "$(pwd)/Documentation-GENERATED-temp:/RESULT" \
  ghcr.io/t3docs/render-documentation:latest \
  makehtml