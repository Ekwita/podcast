<?php

namespace App\Services;

use App\DTOs\NewEpisodeDTO;
use App\Http\Resources\EpisodeCollection;
use App\Http\Resources\EpisodeResource;
use App\Interfaces\Services\IEpisode;
use App\Models\Episode;
use Illuminate\Http\JsonResponse;

class EpisodeService implements IEpisode
{
    public function getAllEpisodes(): EpisodeCollection
    {
        return new EpisodeCollection(Episode::all());
    }

    public function storeEpisode(NewEpisodeDTO $newEpisodeDTO): EpisodeResource
    {
        return new EpisodeResource(Episode::create($newEpisodeDTO->toArray()));
    }

    public function getSelectEpisode(Episode $episode): EpisodeResource
    {
        return new EpisodeResource($episode);
    }

    public function updateSelectEpisode(NewEpisodeDTO $newEpisodeDTO, Episode $episode): EpisodeResource
    {
        $episode->update($newEpisodeDTO->toArray());
        return new EpisodeResource($episode);
    }

    public function deleteSelectEpisode(Episode $episode): JsonResponse
    {
        $episode->delete();

        return response()->json([
            'message' => 'Episode deleted successfully.'
        ], 200);
    }
}
