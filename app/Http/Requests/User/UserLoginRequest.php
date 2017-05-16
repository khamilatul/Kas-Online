<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;
/**
 * Class UserCreateRequest
 *
 * @package App\Http\Requests\User
 */
class UserLoginRequest extends Request
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
        'email'    => 'EMAIL',
       // 'class'   => 'Class',
       // 'level' => 'Level',
       // 'phone'   => 'Phone',
        'password'   => 'Password'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'    => 'required|max:225',
            //'class' => 'required|max:60',
            //'level' => 'required|max:60',
           //'phone'   => 'required|max:30',
            'password'   => 'required|max:30'
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
                'email'      => $message->first('email'),
                'password'  => $message->first('password')
            ]
        ];
    }

}
