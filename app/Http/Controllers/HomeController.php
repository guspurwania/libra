<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use DataTables;
use Auth;
use DB;

use App\LearningSchedule;
use App\LearningUser;

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
    public function index(Request $request, Builder $htmlBuilder)
    {
        if(Auth::user()->role_id == 1)
        {
            if (request()->ajax()) {
                DB::statement(DB::raw('SET @rownum=0'));
                $learning_schedules = LearningSchedule::query()->select([
                    DB::raw('@rownum := @rownum + 1 AS rownum'),
                    DB::raw('learning_schedules.*')
                ])->where('learning_schedules.deleted_at', NULL);

                return DataTables::of($learning_schedules)
                ->addColumn('action', function($learning_schedule){
                    return view('datatable._action_dinamyc', [
                        'model'           => $learning_schedule,
                        'delete'          => route('learning_schedule.destroy', $learning_schedule->id),
                        'url'             => [
                            'Edit'        => route('learning_schedule.edit', $learning_schedule->id),
                            'Participant' => route('learning_schedule.participant', $learning_schedule->id)
                        ],
                        'confirm_message' => 'Are you sure to delete bank account ' . $learning_schedule->name . ' ?',
                        'padding'         => '85px',

                    ]);
                })
                ->rawColumns(['action'])->toJson();
            }

            $html = $htmlBuilder
                  ->addColumn(['data' => 'action', 'name' => 'action', 'title' => '', 'orderable' => false, 'searchable' => false])
                  ->addColumn(['data' => 'rownum', 'name' => 'rownum', 'title' => 'No','searchable' => false])
                  ->addColumn(['data' => 'code', 'name' => 'code', 'title' => 'Code'])
                  ->addColumn(['data' => 'subject', 'name' => 'subject', 'title' => 'Subject'])
                  ->addColumn(['data' => 'schedule_day', 'name' => 'schedule_day', 'title' => 'Day'])
                  ->addColumn(['data' => 'schedule_time', 'name' => 'schedule_time', 'title' => 'Start At'])
                  ->addColumn(['data' => 'schedule_time_end', 'name' => 'schedule_time_end', 'title' => 'End At'])
                  ->addColumn(['data' => 'class_room', 'name' => 'class_room', 'title' => 'Room'])
                  ->addColumn(['data' => 'enrollment_key', 'name' => 'enrollment_key', 'title' => 'Enrollment Key'])
                  ->parameters([
                    'scrollX' => true,
                    'order'   => [1, 'asc'],
                    'stateSave' => true,
                  ]);

            return view('home')->with(compact('html'));
        } elseif (Auth::user()->role_id == 2){
            $learning_schedules = LearningSchedule::all();
            $learning_users = LearningUser::with('learning_schedule')->where('user_id', Auth::user()->id)->get();
            return view('dashboard')->with(compact('learning_schedules', 'learning_users'));
        }
    }
}
