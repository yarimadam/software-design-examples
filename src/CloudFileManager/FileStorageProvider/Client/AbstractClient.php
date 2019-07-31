<?php

namespace App\CloudFileManager\FileStorageProvider\Client;

use App\CloudFileManager\FileStorageProvider\FileStorageProviderClientInterface;

abstract class AbstractClient implements FileStorageProviderClientInterface
{
    protected $name;

    public function upload(string $localPath, string $remotePath): void
    {
        echo '<h3>Uploading...</h3><br>';
        echo sprintf('<strong>Provider:</strong> %s<br>', $this->name);
        echo sprintf('<strong>Local Path:</strong> %s<br>', $localPath);
        echo sprintf('<strong>Remote Path:</strong> %s<br>', $remotePath);
    }

    public function delete(string $remotePath): void
    {
        echo '<h1>Deleting...</h1><br>';
        echo sprintf('<strong>Provider:</strong> %s<br>', $this->name);
        echo sprintf('<strong>Remote Path:</strong> %s<br>', $remotePath);
    }
}