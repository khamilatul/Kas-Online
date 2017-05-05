<?php

namespace App\Http\Requests\Transaction;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

/**
 * Class UserCreateRequest
 *
 * @package App\Http\Requests\User
 */
class TransactionCreateRequest extends Request
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
        'description'    => 'Description',
        'amount'   => 'Amount',
        'members_id' => 'Member_id',
        'Month'   => 'Month'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'description'    => 'required|max:225',
            'amount' => 'required|max:60',
            'members_id'   => 'required|max:30',
            'month'   => 'required|max:30'
        ];
    }

    /**
     * @param $validator
     *
     * @return mixed
     */
       public function validator($validator)
    {
        return $validator->make($this->all(), $this->container->call([$this, 'rules']), $this->messages(), $this->attrs);
    }

    public function formatErrors(Validator $validator)
    {
        $message = $validator->errors();
        return [
            'success'    => false,
            'validation' => [
                'description' => $message->first('description'),
                'amount' => $message->first('amount'),
                'members_id' => $message->first('members_id'),
                'month' => $message->first('month'),
            ]
        ];
    }
}
