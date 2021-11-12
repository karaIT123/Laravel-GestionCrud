<?php

namespace App\Http\Requests;

use App\Models\post;
use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        #dd($this->route());
        #$post = post::findOrFail($this->route('news'));
        #return $post->user_id == 1;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        #|aaaa:aze,aeza,eae
        return [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ];
    }
}
