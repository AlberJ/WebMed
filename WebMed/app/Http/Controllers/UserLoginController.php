<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserLoginRequest;
use App\Http\Requests\UpdateUserLoginRequest;
use App\Repositories\UserLoginRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserLoginController extends AppBaseController
{
    /** @var  UserLoginRepository */
    private $userLoginRepository;

    public function __construct(UserLoginRepository $userLoginRepo)
    {
        $this->userLoginRepository = $userLoginRepo;
    }

    /**
     * Display a listing of the UserLogin.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userLoginRepository->pushCriteria(new RequestCriteria($request));
        $userLogins = $this->userLoginRepository->all();

        return view('user_logins.index')
            ->with('userLogins', $userLogins);
    }

    /**
     * Show the form for creating a new UserLogin.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_logins.create');
    }

    /**
     * Store a newly created UserLogin in storage.
     *
     * @param CreateUserLoginRequest $request
     *
     * @return Response
     */
    public function store(CreateUserLoginRequest $request)
    {
        $input = $request->all();

        $userLogin = $this->userLoginRepository->create($input);

        Flash::success('User Login saved successfully.');

        return redirect(route('userLogins.index'));
    }

    /**
     * Display the specified UserLogin.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userLogin = $this->userLoginRepository->findWithoutFail($id);

        if (empty($userLogin)) {
            Flash::error('User Login not found');

            return redirect(route('userLogins.index'));
        }

        return view('user_logins.show')->with('userLogin', $userLogin);
    }

    /**
     * Show the form for editing the specified UserLogin.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userLogin = $this->userLoginRepository->findWithoutFail($id);

        if (empty($userLogin)) {
            Flash::error('User Login not found');

            return redirect(route('userLogins.index'));
        }

        return view('user_logins.edit')->with('userLogin', $userLogin);
    }

    /**
     * Update the specified UserLogin in storage.
     *
     * @param  int              $id
     * @param UpdateUserLoginRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserLoginRequest $request)
    {
        $userLogin = $this->userLoginRepository->findWithoutFail($id);

        if (empty($userLogin)) {
            Flash::error('User Login not found');

            return redirect(route('userLogins.index'));
        }

        $userLogin = $this->userLoginRepository->update($request->all(), $id);

        Flash::success('User Login updated successfully.');

        return redirect(route('userLogins.index'));
    }

    /**
     * Remove the specified UserLogin from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userLogin = $this->userLoginRepository->findWithoutFail($id);

        if (empty($userLogin)) {
            Flash::error('User Login not found');

            return redirect(route('userLogins.index'));
        }

        $this->userLoginRepository->delete($id);

        Flash::success('User Login deleted successfully.');

        return redirect(route('userLogins.index'));
    }
}
