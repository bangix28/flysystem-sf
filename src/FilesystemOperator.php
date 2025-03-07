<?php

declare(strict_types=1);

namespace League\Flysystem;

interface FilesystemOperator extends FilesystemReader, FilesystemWriter
{

    public function getAdapter();

    public function setAdaptaterRootDirectory(string $path);

}
