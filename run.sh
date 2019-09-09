#!/usr/bin/env bash

docker-compose down
docker-compose -f docker-compose.yml up -d php db
