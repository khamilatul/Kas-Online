<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Member;
use App\Domain\Contracts\MemberInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class MemberRepository
 * @package App\Domain\Repositories
 */
class MemberRepository extends AbstractRepository implements MemberInterface, Crudable
{

    /**
     * @var Member
     */
    protected $model;

//    protected $with = 'user';


    /**
     * MemberRepository constructor.
     * @param Member $member
     */
    public function __construct(Member $member)
    {
        $this->model = $member;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param int $limit
     * @param int $page
     * @param array $column
     * @param string $field
     * @param string $search
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // query to aql
      $akun = $this->model
            ->join('users', 'members.users_id', '=', 'users.id')
            ->where(function ($query) use ($search) {
                $query->where('members.name', 'like', '%' . $search . '%')
                    ->orWhere('members.class', 'like', '%' . $search . '%')
                    ->orWhere('members.email', 'like', '%' . $search . '%')
                    ->orWhere('members.phone', 'like', '%' . $search . '%')
                    ->orWhere('users.name', 'like', '%' . $search . '%');
            })
            ->select('members.*')
            ->paginate($limit)
            
            ->toArray();
        return $akun;
    }

    /**
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(array $data)
    {
        // execute sql insert
        return parent::create([
            'name'    => e($data['name']),
            'class'    => e($data['name']),
            'email'   => e($data['email']),
            'phone'   => e($data['phone']),
            'users_id' => 10
        ]);

    }

    /**
     * @param $id
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update($id, array $data)
    {
        return parent::update($id, [
            'name'    => e($data['name']),
            'class'    => e($data['name']),
            'email'   => e($data['email']),
            'phone'   => e($data['phone']),
            'users_id' => e($data['users_id'])
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }


    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function findById($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    

}