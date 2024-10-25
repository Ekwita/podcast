<?php

namespace App\Http\Requests;

use App\DTOs\NewEpisodeDTO;
use Illuminate\Foundation\Http\FormRequest;

class EpisodeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file_path' => 'required|string',
            'duration' => 'nullable|integer|min:0',
            'thumbnail_path' => 'nullable|string',
            'host_name' => 'nullable|string|max:255',
            // 'guest_names' => 'nullable|array',
            // 'guest_names.*' => 'string|max:255',
        ];
    }

    public function getDto(): NewEpisodeDTO
    {
        return new NewEpisodeDTO(
            title: $this->get('title'),
            description: $this->get('description'),
            filePath: $this->get('file_path'),
            duration: $this->get('duration'),
            thumbnailPath: $this->get('thumbnail_path'),
            hostName: $this->get('host_name'),
            // guestNames: $this->get('guestNames'),
        );
    }
}
