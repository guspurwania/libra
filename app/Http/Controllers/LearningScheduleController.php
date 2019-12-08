<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LearningScheduleCreateRequest;
use App\Http\Requests\LearningScheduleUpdateRequest;

use Yajra\DataTables\Html\Builder;
use DataTables;
use Illuminate\Support\Facades\Storage;

use App\LearningSchedule;
use App\LearningUser;
use App\Helpers\CustomImage;
use Auth;
use DB;

class LearningScheduleController extends Controller
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


    public function create()
    {
        return view('learning_schedule.create');
    }


    public function store(LearningScheduleCreateRequest $request)
    {
        if (!empty($request->image)){
            $upload = CustomImage::storeImage($request->image, 'learn');
            $request->request->add(['img' => $upload['name']]);
        }
        $result = LearningSchedule::create($request->except('_token'));
        
        if ($result)
            return redirect(route('home'))->with('status', 'Successfully created');
        else
            return redirect(route('learning_schedule.create'))->withErrors('Failed to create');
    }


    public function edit($id)
    {
        $learning_schedule = LearningSchedule::find($id);

        return view('learning_schedule.edit')->with(compact('learning_schedule'));
    }

    public function show($id)
    {
        $learning_schedule = LearningSchedule::find($id);
        $check_user = LearningUser::where('learning_schedule_id', $id)->where('user_id', Auth::user()->id)->first();

        return view('learning_schedule.show')->with(compact('learning_schedule', 'check_user'));
    }

    public function enroll($id, $code)
    {
        $validate = LearningUser::where('learning_schedule_id', $id)->where('user_id', Auth::user()->id)->first();
        if($validate)
        {
            $check = LearningSchedule::where('id', $id)->where('enrollment_key', $code)->first();
            $learning_schedule = LearningSchedule::find($id);
            if($check)
            {
                LearningUser::create([
                    'learning_schedule_id' => $check->id,
                    'user_id' => Auth::user()->id
                ]);
                return back()->with([
                    'status'=> 'Successfully enroll',
                    'learning_schedule' => $learning_schedule
                ]);
            } else {
                return back()->with([
                    'error'=> 'Failed to enroll',
                    'learning_schedule' => $learning_schedule
                ]);
            }
        } else {
            return back()->with([
                'error'=> 'You already enroll this course',
                'learning_schedule' => $learning_schedule
            ]);
        }
    }

    public function participant($id, Request $request, Builder $htmlBuilder)
    {
        if (request()->ajax()) {
            DB::statement(DB::raw('SET @rownum=0'));
            $participants = LearningUser::query()->join('users', 'learning_users.user_id', '=', 'users.id')
            ->select([
                DB::raw('@rownum := @rownum + 1 AS rownum'),
                DB::raw('learning_users.*'),
                DB::raw('users.name AS name'),
                DB::raw('users.email AS email'),
            ])->where('learning_users.learning_schedule_id', $id);

            return DataTables::of($participants)->rawColumns(['action'])->toJson();
        }

        $html = $htmlBuilder
              ->addColumn(['data' => 'rownum', 'name' => 'rownum', 'title' => 'No','searchable' => false])
              ->addColumn(['data' => 'name', 'name' => 'users.name', 'title' => 'Name'])
              ->addColumn(['data' => 'email', 'name' => 'users.email', 'title' => 'Email'])
              ->parameters([
                'scrollX' => true,
                'order'   => [1, 'asc'],
                'stateSave' => true,
              ]);

        return view('learning_schedule.participant')->with(compact('html'));
    }


    public function update(LearningScheduleUpdateRequest $request, $id)
    {
        $result = LearningSchedule::find($id);

        if (!empty($request->image)){
            if (!empty($result->img)){
                Storage::delete('learn/'.$result->img);
            };
            $upload = CustomImage::storeImage($request->image, 'learn');
            $request->request->add(['img' => $upload['name']]);
        }

        $result->update($request->except('_token'));

        if ($result)
            return redirect(route('home'))->with('status', 'Successfully updated');
        else
            return back()->withErrors('Failed to update');
    }


    public function destroy($id)
    {  
        $result = LearningSchedule::destroy($id);

        if ($result)
            return redirect(route('home'))->with('message', 'Successfully deleted');
        else
            return redirect(route('home'))->withErrors('Failed to delete');
    }
}
