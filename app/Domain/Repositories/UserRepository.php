<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\User;
use App\Domain\Contracts\UserInterface;
use App\Domain\Contracts\Crudable;


/**
 * Class UserRepository
 * @package App\Domain\Repositories
 */
class UserRepository extends AbstractRepository implements UserInterface, Crudable
{

    /**
     * @var User
     */
    protected $model;

    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
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

    public function kelas($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {

        $cari_rincian = \DB::table('users')->select('class')->whereNull('deleted_at')->get();
        $result = [];
        foreach ($cari_rincian as $key => $value) {
            $result[] = $value->class;
        }

        // --> Flatten  array
        $array_id = [];
        $array_length = count($result);
        for ($i = 0; $i <= $array_length - 1; $i++) {
            array_push($array_id, $result[$i]);
        }

        $desa = \DB::table('kelas')
            ->whereNotIn('kelas.id', function ($q) use ($array_id) {
                $q->select('users.class')
                    ->from('users')
                    ->whereIn('users.class', $array_id)
                    ->groupBy('users.class');
            })
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->paginate($limit)
            ->toArray();
        return $desa;


        //  $user = \DB::table('kelas')
        //    ->where(function ($query) use ($search) {
        //             $query->where('name', 'like', '%' . $search . '%');
        //         })
        //         ->paginate($limit)
        //         ->toArray();
        //         return $user;
    }
    public function getlist()
    {

        $desa = \DB::table('kelas')
->get()
            ->toArray();
        return $desa;


    }


    public function paginate($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // query to aql
        if (session('level') == 0) {
            $akun = $this->model
                ->where('class', session('class'))
                ->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('class', 'like', '%' . $search . '%')
                        ->orWhere('level', 'like', '%' . $search . '%');
                })
                ->paginate($limit)
                ->toArray();
            return $akun;
        }
        if (session('level') == 1) {
            $akun = $this->model
                ->where('class', session('class'))
                ->whereNotIn('id', [session('user_id')])
                ->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('class', 'like', '%' . $search . '%')
                        ->orWhere('level', 'like', '%' . $search . '%');
                })
                ->paginate($limit)
                ->toArray();
            return $akun;
        }

        if (session('level') == 2) {
            $akun = $this->model
                ->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('class', 'like', '%' . $search . '%')
                        ->orWhere('level', 'like', '%' . $search . '%');
                })
                ->paginate($limit)
                ->toArray();
            return $akun;
        }
    }

    public function paginateuser($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // query to aql
        if (session('level') != 2) {
            $akun = $this->model
                ->where('class', session('class'))
                ->where('level', 0)
                ->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('class', 'like', '%' . $search . '%')
                        ->orWhere('level', 'like', '%' . $search . '%');
                })
                ->paginate($limit)
                ->toArray();
            return $akun;
        }
        if (session('level') == 2) {
            $akun = $this->model
                ->where('level', 0)
                ->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('class', 'like', '%' . $search . '%')
                        ->orWhere('level', 'like', '%' . $search . '%');
                })
                ->paginate($limit)
                ->toArray();
            return $akun;
        }
    }


    /**
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(array $data)
    {
        try {
            if (session('level') != '1') {        // execute sql insert
                $simpan =parent::create([
                    'name' => e($data['name']),
                    'class' => e($data['class']),
                    'level' => e($data['level']),
                    'phone' => e($data['phone']),
                    'password' => bcrypt($data['password']),
                    'min_transaksi' => ($data['min_transaksi']),
                    'email' => e($data['email']),
                    'nis' => e($data['nis']),
                ]);
                return $simpan;

            }
            if (session('level') == '1') {        // execute sql insert
                $password = str_random(10);
                $simpan = parent::create([
                    'name' => e($data['name']),
                    'class' => e($data['class']),
                    'level' => e($data['level']),
                    'phone' => e($data['phone']),
                    'password' => bcrypt($password),
                    'min_transaksi' => ($data['min_transaksi']),
                    'email' => e($data['email']),
                    'nis' => e($data['nis']),

                ]);


                \Mail::send('emails/frontoffice', [

                    'name' => $data['name'],
                    'email' => $data['email'],
                    'kelas' => $data['class'],
                    'password' => $password,], function ($message) use ($data) {

                    $message->to($data['email']);

                    $message->subject('Info dari KAS ONLINE');

                });
                return $simpan;
            }
        } catch (\Exception $e) {
            // store errors to log
            \Log::error('class : ' . UserRepository::class . ' method : create | ' . $e);

            return $e;
        }

    }

    /**
     * @param $id
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update($id, array $data)
    {
        return parent::update($id, [
            'name' => e($data['name']),
            'class' => e($data['class']),
            'level' => e($data['level']),
            'phone' => e($data['phone']),
            'min_transaksi' => e($data['min_transaksi']),
            'email' => e($data['email']),
            'nis' => e($data['nis']),
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

    public function updatePassword(array $data)
    {
        try {
            $user = $this->model->find(session('user_id'));
            if ($user) {
                $old_password = $user->password;

                if (\Hash::check($data['old_password'], $old_password)) {
                    // flush cache with tags

                    $user->password = bcrypt($data['new_password']);
                    $user->save();

                    return $this->updateSuccess($data);
                }

                return [
                    'success' => false,
                    'result' => [
                        'message' => 'Password lama tidak cocok.',
                    ],
                ];
            }

            return [
                'success' => false,
                'result' => [
                    'message' => 'Data tidak ditemukan',
                ],
            ];
        } catch (\Exception $e) {
            // store errors to log
            \Log::error('class : ' . UserRepository::class . ' method : put | ' . $e);

            return $this->createError();
        }
    }

}