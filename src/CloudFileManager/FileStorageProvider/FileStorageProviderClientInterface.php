<?php

namespace App\CloudFileManager\FileStorageProvider;

interface FileStorageProviderClientInterface
{
    public function upload(string $localPath, string $remotePath): void;

    public function delete(string $remotePath): void;
}