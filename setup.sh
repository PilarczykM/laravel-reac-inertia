#!/bin/bash

echo "Installing Compose dependencies..."
composer install

echo "Installing npm dependencies..."
npm install

echo "Setup complete!"