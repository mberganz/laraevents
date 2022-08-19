<?php

namespace App\Http\Requests\Organization\Event;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'event_name' => 'required',
            'speaker_name' => 'required',
            'start_date' => [
                'required',
                'date_format:dd/mm/YYYY H:i'
            ],
            'end_date' => [
                'required',
                'date_format:dd/mm/YYYY H:i',
                'after:' . $this->start_date ?? null
            ],
            'participants_limit' => [
                'numeric',
                'integer',
                'min:1'
            ],
            'target_audience' => [
                'required',
                'max:150'
            ]
        ];
    }

    public function attributes()
    {
        return [
            'event_name' => 'nome',
            'speaker_name' => 'palestrante',
            'start_date' => 'data de inicio',
            'end_date' => 'data de fim',
            'participants_limit' => 'limite de participantes',
            'target_audience' => 'publico-alvo'
        ];
    }

    public function messages()
    {
        return [
            'date_format' => 'O campo :attribute não corresponde ao formato 00/00/0000 00:00',
            'end_date.after' => 'A data final deve ser posterior a data inicial'
        ];
    }
}
