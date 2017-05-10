<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Transaction;
use App\Domain\Contracts\TransactionInterface;
use App\Domain\Contracts\Crudable;
use App\Domain\Entities\User;


/**
 * Class TransactionRepository
 * @package App\Domain\Repositories
 */
class TransactionRepository extends AbstractRepository implements TransactionInterface, Crudable
{

    /**
     * @var Transaction
     */
    protected $model;

    /**
     * TransactionRepository constructor.
     * @param Transaction $transaction
     */
    public function __construct(Transaction $transaction)
    {
        $this->model = $transaction;
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
        if (session('level') != 3) {
            $akun = $this->model
                ->join('users', 'transactions.users_id', '=', 'users.id')
                ->where('users.class', session('class'))
                ->where(function ($query) use ($search) {
                    $query->where('transactions.month', 'like', '%' . $search . '%')
                        ->orWhere('transactions.amount', 'like', '%' . $search . '%')
                        ->orWhere('name', 'like', '%' . $search . '%')
                        ->orWhere('users.name', 'like', '%' . $search . '%');
                })
                ->select('transactions.*')
                ->paginate($limit)
                ->toArray();
            return $akun;
        }
        if (session('level') == 3) {
            $akun = $this->model
                ->join('users', 'transactions.users_id', '=', 'users.id')
                ->where(function ($query) use ($search) {
                    $query->where('transactions.month', 'like', '%' . $search . '%')
                        ->orWhere('transactions.amount', 'like', '%' . $search . '%')
                        ->orWhere('name', 'like', '%' . $search . '%')
                        ->orWhere('users.name', 'like', '%' . $search . '%');
                })
                ->select('transactions.*')
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
        $user = User::find($data['users_id']);
        $cari = $this->model->where('users_id', $data['users_id'])->where('month', $data['month'])->sum('amount');
        $cari2 = $this->model->where('users_id', $data['users_id'])->where('month', $data['month'])->min('kurang');
        if($cari2 == null) {
            $cek2 = 0;

        }
        else{
            $cek2 = $cari2 - $data['amount'];

        }

        if ($data['amount'] > $user->min_transaksi) {
            return response()->json(
                [
                    'success' => false,
                    'result' => 'Kas Melebihi batas bulan ' . $data['month'],
                ]
            );
          
        }
        else if ($cek2 < 0) {
            if($cari2 == 'Lunas'){
                return response()->json(
                    [
                        'success' => false,
                        'result' => 'Kas Bulan '. $data['month']. ' Sudah Lunas',
                    ]
                );
            }
            else{
                return response()->json(
                    [
                        'success' => false,
                        'result' => 'Kas Melebihi ambang batas kurang '.$cari2,
                    ]
                );

            }

        }
        if (intval($cari) == 0) {
            $hasil = $user->min_transaksi - $data['amount'];
        } else if (intval($cari) <= intval($cari2)) {
            $hasil = intval($cari2) - intval($data['amount']);
        }
//    dump($cari);
        if ($hasil <= 0) {
            $hasil2 = 'Lunas';
            $status = '2';
        } else {
            $hasil2 = $hasil;
            $status = '1';
        }
        $relasi = $this->model->where('users_id', $data['users_id'])->where('month', $data['month'])->select('id as transaksi_id')->get();
//        dump($relasi);
        $result = [];
        foreach ($relasi as $key => $value) {
            $result[] = $value->transaksi_id;
        }

//         --> Flatten  array
        $array_id = [];
        $array_length = count($result);
        for ($i = 0; $i <= $array_length - 1; $i++) {
            array_push($array_id, $result[$i]);
        }
        for ($j5 = 0; $j5 <= count($array_id) - 1; $j5++) {
                $update_bidang = Transaction::find($array_id[$j5]);
                $update_bidang->kurang = $hasil2;
                $update_bidang->description = $status;
                $update_bidang->save();

        }

            // execute sql insert
        return parent::create([
            'description' => $status,
            'amount' => e($data['amount']),
            'month' => e($data['month']),
            'users_id' => e($data['users_id']),
            'kurang' => $hasil2

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
            'description' => e($data['description']),
            'amount' => e($data['amount']),
            // 'members_id'   => e($data['members_id']),
            'month' => e($data['month']),
            'users_id' => e($data['users_id'])
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id)
    {
        $transaksi = Transaction::find($id);

        $relasi = $this->model->where('users_id', $transaksi['users_id'])->where('month', $transaksi['month'])->select('id as transaksi_id')->get();
            $kurang =$transaksi->amount + $transaksi->kurang;
//        dump($relasi);
        $result = [];
        foreach ($relasi as $key => $value) {
            $result[] = $value->transaksi_id;
        }

//         --> Flatten  array
        $array_id = [];
        $array_length = count($result);
        for ($i = 0; $i <= $array_length - 1; $i++) {
            array_push($array_id, $result[$i]);
        }
        for ($j5 = 0; $j5 <= count($array_id) - 1; $j5++) {
            $update_bidang = Transaction::find($array_id[$j5]);
            $update_bidang->kurang = $kurang;
            $update_bidang->description = 1;
            $update_bidang->save();

        }

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