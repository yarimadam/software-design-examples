<?php

namespace App\CloudFileManager;

use App\CloudFileManager\FileStorageProvider\FileStorageProviderClientInterface;

class CloudFileManager
{
    private $fileStorageProviderClient;

    public function __construct(FileStorageProviderClientInterface $fileStorageProviderClient)
    {
        $this->fileStorageProviderClient = $fileStorageProviderClient;
    }

    public function upload(string $localPath, string $remotePath)
    {
        $this->fileStorageProviderClient->upload($localPath, $remotePath);
    }

    public function delete(string $remotePath)
    {
        $this->fileStorageProviderClient->delete($remotePath);
    }
}