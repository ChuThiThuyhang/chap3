<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
<<<<<<< c2331992b3e96c3d94020c65104bb2110690631f
=======
use App\Http\Requests\TicketFormRequest;
>>>>>>> commit in develop

class TicketFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'content'=> 'required|min:10',
            //yeu cau title nhap vao toi thieu 3 ky tu - content toi thieu 10
        ];
    }
}
