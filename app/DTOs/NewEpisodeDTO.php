<?php

namespace App\DTOs;

class NewEpisodeDTO
{

    public function __construct(
        // public string $id,
        public string $title,
        public string $description,
        public string $filePath,
        public int $duration,
        public ?string $thumbnailPath,
        public string $hostName,
        // public array $guestNames,

    ) {}

    public function toArray(): array
    {
        return     [
            // 'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'file_path' => $this->filePath,
            'duration' => $this->duration,
            'thumbnail_path' => $this->thumbnailPath,
            'host_name' => $this->hostName,
            // 'guest_names' => $this->guestNames,
        ];
    }
}
