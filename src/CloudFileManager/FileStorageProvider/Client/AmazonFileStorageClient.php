<?php

namespace App\CloudFileManager\FileStorageProvider\Client;

use App\CloudFileManager\FileStorageProvider\FileStorageProviderClientInterface;

class AmazonFileStorageClient extends AbstractClient implements FileStorageProviderClientInterface
{
    protected $name = 'Amazon File Storage';
}