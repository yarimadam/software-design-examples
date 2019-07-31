<?php

use App\CloudFileManager\CloudFileManager;
use App\CloudFileManager\FileStorageProvider\Client\AmazonFileStorageClient;
use App\CloudFileManager\FileStorageProvider\Client\AzureFileStorageClient;

require_once 'vendor/autoload.php';

// Amazon
$amazon = new AmazonFileStorageClient();
$amazonCloudFileManager = new CloudFileManager($amazon);
$amazonCloudFileManager->upload('/tmp/abc.jpg', '/hosting/abc.jpg');

// Azure
$azure = new AzureFileStorageClient();
$azureCloudFileManager = new CloudFileManager($azure);
$azureCloudFileManager->upload('/tmp/abc.jpg', '/hosting/abc.jpg');
