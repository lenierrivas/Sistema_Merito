<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\testQuestions;
use App\Models\testQuestionsDescription;
use App\Models\testUsersResponse;
use Auth;
use Illuminate\Http\Request;
use App\Exports\ExportExcel;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        return view('home');
    }

    public function questions()
    {
        $testQuestions = testQuestions::select('questions_id', 'name')->get();
        $testQuestionsDescription = testQuestionsDescription::select('descriptions_id', 'descriptions', 'lyrics', 'questions_refer_id')->get();

        $send_data = [
            "questions" => $testQuestions,
            "description" => $testQuestionsDescription
        ];

        return view('questions')->with('send_data', $send_data);
    }

    public function sendPost(Request $request)
    {
        $data = request()->all();

        foreach ($data as $key => $value) {
            if (!in_array($key, ['_token', '_method'])) {
                $response = $this->testQuestionsDescription($value);
                testUsersResponse::create([
                    'user_id'                   => Auth::id(),
                    'questions_name_id'         => $response['questions_refer_id'],
                    'questions_descriptions_id' => $response['descriptions_id'],
                    'lyrics'                    => $response['lyrics']
                ]);
            }
        }

        \Session::flash('status', 'Registro Exitoso');

        return view('home'); 
    }

    public function testQuestionsDescription($value)
    {
        return testQuestionsDescription::select('descriptions_id', 'questions_refer_id', 'lyrics')
            ->where('descriptions_id', $value)
            ->first();
    }

    public function exportExcel()
    {
        return Excel::download(new ExportExcel, 'Response_User.xlsx');
    }
}