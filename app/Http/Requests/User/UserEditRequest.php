<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;
/**
 * Class UserCreateRequest
 *
 * @package App\Http\Requests\User
 */
class UserEditRequest extends Request
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
     * Declaration an attributes
     *
     * @var array
     */
    protected $attrs = [
        'name'    => 'Name',
        // 'email'   => 'Email',
        'phone'   => 'Phone'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => 'required|max:225',
            // 'email'   => 'required|email|unique:users,email|max:225',
            'phone'   => 'required|max:30'
        ];
    }

    /**
     * @param $validator
     *
     * @return mixed
     */
   /* Menampilkan error */
public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }

    /**
     * @param Validator $validator
     *
     * @return array
     *
     */
    protected function formatErrors(Validator $validator)
    {
        $message = $validator->errors();

        return [
            'success' => false,
            'validation' => [
                'name'      => $message->first('name'),
                'class'     => $message->first('class'),
                'level'     => $message->first('level'),
                'phone'     => $message->first('phone'),
                'password'  => $message->first('password')
            ]
        ];
    }
}
