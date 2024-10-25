<?php

namespace App\Http\Controllers;

use App\Http\Requests\EpisodeRequest;
use App\Http\Resources\EpisodeCollection;
use App\Http\Resources\EpisodeResource;
use App\Interfaces\Services\IEpisode;
use App\Models\Episode;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function __construct(
        protected IEpisode $episodeService,
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index(): EpisodeCollection
    {
        return $this->episodeService->getAllEpisodes();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EpisodeRequest $request): EpisodeResource
    {
        return $this->episodeService->storeEpisode($request->getDto());
    }

    /**
     * Display the specified resource.
     */
    public function show(Episode $episode): EpisodeResource
    {
        return $this->episodeService->getSelectEpisode($episode);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EpisodeRequest $request, Episode $episode): EpisodeResource
    {
        return $this->episodeService->updateSelectEpisode($request->getDto(), $episode);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episode $episode): JsonResponse
    {
        return $this->episodeService->deleteSelectEpisode($episode);
    }
}
