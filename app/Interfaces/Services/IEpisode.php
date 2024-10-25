<?php

namespace App\Interfaces\Services;

use App\DTOs\NewEpisodeDTO;
use App\Http\Resources\EpisodeCollection;
use App\Http\Resources\EpisodeResource;
use App\Models\Episode;
use Illuminate\Http\JsonResponse;

interface IEpisode
{
    public function getAllEpisodes(): EpisodeCollection;
    public function storeEpisode(NewEpisodeDTO $newEpisodeDTO): EpisodeResource;
    public function getSelectEpisode(Episode $episode): EpisodeResource;
    public function updateSelectEpisode(NewEpisodeDTO $newEpisodeDTO, Episode $episode): EpisodeResource;
    public function deleteSelectEpisode(Episode $episode): JsonResponse;
}
