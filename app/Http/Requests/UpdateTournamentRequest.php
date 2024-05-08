<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\TournamentApprovalStatusEnum;
use App\Enums\TournamentTypeEnum;

class UpdateTournamentRequest extends FormRequest
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
        $isNull = $this->input('requesting') === 'approving' ? 'nullable' : 'required';

        return [
            'requesting' => 'nullable',
            'users_id' => $isNull . '|exists:users,id',
            'game_categories_id' => $isNull . '|exists:game_categories,id',
            'name' => $isNull . '|string|max:255',
            'bracket_link' => $isNull . '|url',
            'description' => $isNull . '|string',
            'registration_open' => $isNull . '|date',
            'registration_close' => $isNull . '|date|after_or_equal:registration_open',
            'event_start' => $isNull . '|date',
            'registration_price' => $isNull . '|integer|min:0',
            'event_end' => $isNull . '|date|after_or_equal:event_start',
            'rules' => $isNull . '|string',
            'poster_image' => $isNull . '|image|max:2048',
            'pic_name' => $isNull . '|string|max:191',
            'number_of_teams' => $isNull . '|integer|min:1',
            'pic_contact' => $isNull . '|string|max:191',
            'pic_email' => $isNull . '|string|email|max:191',
            'event_type' => $isNull . '|in:' . collect(TournamentTypeEnum::cases())->pluck('value')->implode(','),
            'status' => 'required|in:' . collect(TournamentApprovalStatusEnum::cases())->pluck('value')->implode(','),
        ];
    }
}
