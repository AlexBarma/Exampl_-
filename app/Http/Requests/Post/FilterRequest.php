<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;//Обязательно необходимо в файлах реквеста поменьять в этой строке false на true!!!!!!!!!!
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'string',
            'content'=>'string',
            'category_id'=>'',
            'page'=>'',//Эти два свойства добавляются для получения разрешения считывать информацию о постах на всех страницах в формате json для фронтенда
            'per_page'=>'',//Эти два свойства добавляются для получения разрешения считывать информацию о постах на всех страницах в формате json для фронтенда
        ];
    }
}
