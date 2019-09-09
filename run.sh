#!/usr/bin/env bash

docker-compose down
docker system prune -f
docker-compose -f docker-compose.yml up -d --build db php
