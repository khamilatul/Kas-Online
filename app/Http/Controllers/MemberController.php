<?php

namespace App\Http\Controllers;

use App\Http\Requests\Member\MemberCreateRequest;
use App\Http\Requests\Member\MemberEditRequest;
use Illuminate\Http\Request;
use App\Domain\Contracts\MemberInterface;

class MemberController extends Controller
{

    /**
     * @var MemberInterface
     */
    protected $member;

    /**
     * MemberController constructor.
     * @param MemberInterface $member
     */
    public function __construct(MemberInterface $member)
    {
        $this->member = $member;
    }

    /**
     * @api {get} api/contacts Request Member with Paginate
     * @apiName GetMemberWithPaginate
     * @apiGroup Member
     *
     * @apiParam {Number} page Paginate member lists
     */
    public function index(Request $request)
    {
        return $this->member->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('search'));
    }

    /**
     * @api {get} api/contacts/id Request Get Member
     * @apiName GetMember
     * @apiGroup Member
     *
     * @apiParam {Number} id id_contact
     * @apiSuccess {Number} id id_contact
     * @apiSuccess {Varchar} name name of member
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of member
     * @apiSuccess {Number} phone phone of member
     */
    public function show($id)
    {
        return $this->member->findById($id);
    }

    /**
     * @api {post} api/contacts/ Request Post Member
     * @apiName PostMember
     * @apiGroup Member
     *
     *
     * @apiParam {Varchar} name name of member
     * @apiParam {Varchar} email email of member
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of member
     * @apiSuccess {Number} id id of member
     */
    public function store(Request $request)
    {
        return $this->member->create($request->all());
    }

    /**
     * @api {put} api/contacts/id Request Update Member by ID
     * @apiName UpdateMemberByID
     * @apiGroup Member
     *
     *
     * @apiParam {Varchar} name name of member
     * @apiParam {Varchar} email email of member
     * @apiParam {Varchar} address address of member
     * @apiParam {Float} phone phone of member
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(MemberEditRequest $request, $id)
    {
        return $this->member->update($id, $request->all());
    }

    /**
     * @api {delete} api/contacts/id Request Delete Member by ID
     * @apiName DeleteMemberByID
     * @apiGroup Member
     *
     * @apiParam {Number} id id of member
     *
     *
     * @apiError MemberNotFound The <code>id</code> of the Member was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->member->delete($id);
    }

}