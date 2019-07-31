<?php

namespace App\CloudFileManager\FileStorageProvider\Client;

use App\CloudFileManager\FileStorageProvider\FileStorageProviderClientInterface;

class AzureFileStorageClient extends AbstractClient implements FileStorageProviderClientInterface
{
    protected $name = 'Azure File Storage';
}