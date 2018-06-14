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
                return View::make('e-learning', ['page' => 'e-learning', 'view' => 'portal.home', 'data' => []]);
            } else {
                return View::make('e-learning-login', ['page' => 'e-learning']);
            }
        } catch (\Exception $e) {
            \Log::info(__METHOD__ . '************ and error occurred ***************' . print_r($e, 1));
        }
    }

    public function showELibrary()
    {
        try{
            return View::make('e-library', ['page' => 'e-library']);
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

            $LogHash = Hash::make($password);
            Log::info(__METHOD__ . '************ $LogHash ***************' . print_r($LogHash, 1));
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

    public function newsletter()
    {
        try{
            $email = trim(Input::get('email'));

            if(!empty($email)) {
                $newsletter = Newsletter::where('email', '=', $email)->first();
                if (empty($newsletter)) {
                    $newsletter = New Newsletter;
                    $newsletter->email = $email;
                    $newsletter->save();
                    return ['success' => true, 'message' => 'Thank you! You are now added to the Newsletter list!'];
                } else {
                    return ['success' => true, 'message' => 'Email already exists.'];
                }
            }
        } catch (\Exception $e) {
            Log::info(__METHOD__ . '************ and error occurred ***************' . print_r($e, 1));
        }
    }

    public function myProfile()
    {
        try {
            $userId = Session::get('user_id');

            if (!empty($userId)) {

                $profile = DB::table('user')
                    ->select('*')
                    ->join('user_profile', 'user.id', '=', 'user_profile.user_id')
                    ->where('user.id', '=', $userId)
                    ->first();

                return View::make('e-learning', ['page' => 'e-learning', 'view' => 'portal.my-profile', 'data' => $profile]);
            } else {
                return Redirect::to('e-learning');
            }
        } catch (\Exception $e) {
            Log::info(__METHOD__ . '************ and error occurred ***************' . print_r($e, 1));
        }
    }

    public function showMbaCourse()
    {
        try {
            $userId = Session::get('user_id');

            if (!empty($userId)) {
                $courses = Course::all()->toArray();
                $courseContents = [];
                foreach ($courses as $course) {

                    $lectures = CourseLecture::where('course_id', '=', $course['id'])->get()->toArray();
                    $lectureItems = [];
                    foreach ($lectures as $lecture) {
                        $lecturesProperties = DB::table('course_lecture AS cl')
                            ->select('lf.lecture_name', 'lf.file_name', 'la.id as assignment_id', 'la.title as assignment_title', 'll.link', 'll.link_name', 'lfm.id as forum_id')
                            ->leftJoin('lecture_file AS lf', 'cl.id', '=', 'lf.lecture_id')
                            ->leftJoin('lecture_assignment AS la', 'cl.id', '=', 'la.lecture_id')
                            ->leftJoin('lecture_link AS ll', 'cl.id', '=', 'll.lecture_id')
                            ->leftJoin('lecture_forum AS lfm', 'cl.id', '=', 'lfm.lecture_id')
                            ->where('cl.id', '=', $lecture['id'])
                            ->get();
                        $json  = json_encode($lecturesProperties);
                        $lecturesProperties = json_decode($json, true)[0];
                        $lectureItems[$lecture['lecture_period']] = $lecturesProperties;
                    }
                    array_push($courseContents, ['name'=> $course['name'] , 'items' => $lectureItems]);
                }
                return View::make('e-learning', ['page' => 'e-learning', 'view' => 'portal.mba-courses', 'data' => ['course_contents' => $courseContents]]);
            } else {
                return Redirect::to('e-learning');
            }
        } catch (\Exception $e) {
            Log::info(__METHOD__ . '************ and error occurred ***************' . print_r($e, 1));
        }
    }

}