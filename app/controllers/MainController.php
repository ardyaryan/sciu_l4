<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class MainController extends BaseController
{
    public function showELearning()
    {
        try{
            $userId = Session::get('user_id');
            if (!empty($userId)) {
                return View::make('e-learning', ['page' => 'e-learning', 'view' => 'portal.home']);
            } else {
                return View::make('e-learning-login', ['page' => 'e-learning']);
            }
        } catch (\Exception $e) {
            \Log::info(__METHOD__ . '************ and error occurred ***************' . print_r($e, 1));
        }
    }

    public function logout()
    {
        try{
            Session::set('user_id', null);
            return Redirect::to('e-learning');
        } catch (\Exception $e) {
            Log::info(__METHOD__ . '************ and error occurred ***************' . print_r($e, 1));
        }
    }

    public function login()
    {
        try{
            $userName = trim(Input::get('user_name'));
            $password = trim(Input::get('password'));

            if(!empty($userName)) {
                $user = User::where('username', '=', $userName)->first();
                if (!empty($user)) {
                    $check = Hash::check($password, $user->password);
                    if ($check) {
                        Session::set('user_id', $user->id);
                        return ['success' => true, 'message' => 'Successfully logged in.'];
                    } else {
                        Session::set('user_id', null);
                        return ['success' => true, 'message' => 'Invalid Username or Password.'];
                    }
                } else {
                    return ['success' => false, 'message' => 'Unable to find User.'];
                }
            }
        } catch (\Exception $e) {
            Log::info(__METHOD__ . '************ and error occurred ***************' . print_r($e, 1));
        }
    }
}