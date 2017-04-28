<?php

namespace App\Http\Controllers;

use App\Http\Requests\Transaction\TransactionCreateRequest;
use App\Http\Requests\Transaction\TransactionEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\TransactionInterface;

class TransactionController extends Controller
{

    /**
     * @var TransactionInterface
     */
    protected $transaction;

    /**
     * TransactionController constructor.
     * @param TransactionInterface $transaction
     */
    public function __construct(TransactionInterface $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @api {get} api/contacts Request Transaction with Paginate
     * @apiName GetTransactionWithPaginate
     * @apiGroup Transaction
     *
     * @apiParam {Number} page Paginate transaction lists
     */
    public function index(Request $request)
    {
        return $this->transaction->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/contacts/id Request Get Transaction
     * @apiName GetTransaction
     * @apiGroup Transaction
     *
     * @apiParam {Number} id id_contact
     * @apiSuccess {Number} id id_contact
     * @apiSuccess {Varchar} name name of transaction
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of transaction
     * @apiSuccess {Number} phone phone of transaction
     */
    public function show($id)
    {
        return $this->transaction->findById($id);
    }

    /**
     * @api {post} api/contacts/ Request Post Transaction
     * @apiName PostTransaction
     * @apiGroup Transaction
     *
     *
     * @apiParam {Varchar} name name of transaction
     * @apiParam {Varchar} email email of transaction
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of transaction
     * @apiSuccess {Number} id id of transaction
     */
    public function store(Request $request)
    {
        return $this->transaction->create($request->all());
    }

    /**
     * @api {put} api/contacts/id Request Update Transaction by ID
     * @apiName UpdateTransactionByID
     * @apiGroup Transaction
     *
     *
     * @apiParam {Varchar} name name of transaction
     * @apiParam {Varchar} email email of transaction
     * @apiParam {Varchar} address address of transaction
     * @apiParam {Float} phone phone of transaction
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(TransactionEditRequest $request, $id)
    {
        return $this->transaction->update($id, $request->all());
    }

    /**
     * @api {delete} api/contacts/id Request Delete Transaction by ID
     * @apiName DeleteTransactionByID
     * @apiGroup Transaction
     *
     * @apiParam {Number} id id of transaction
     *
     *
     * @apiError TransactionNotFound The <code>id</code> of the Transaction was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->transaction->delete($id);
    }

}