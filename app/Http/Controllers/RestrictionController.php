<?php

namespace App\Http\Controllers;

use App\Models\access_level;
use App\Models\restriction;
use App\Models\role;
use Illuminate\Http\Request;

class RestrictionController extends Controller
{
    public function index()
    {
        $restrictions = restriction::with(['role', 'levels'])->sortable()->paginate(10);
        
        return view('dashboard.restriction', [
            'restrictions' => $restrictions,
            'total_level' => access_level::all()->count()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'route' => 'required'
        ]);

        $data = $request->only([
            'route',
            'level',
            'role'
        ]);

        try 
        {
            restriction::create($data);
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Create role failed $msg");

            return redirect()->back();
        }

        return redirect()->intended('/dashboard/user/restriction');
    }

    public function update(Request $request)
    {
        $request->validate([
            'route' => 'required'
        ]);

        $data = $request->only([
            'route',
            'level',
            'role'
        ]);

        $restriction = restriction::find($request->id);

        try 
        {
            $restriction->update($data);
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Update restriction failed $msg");

            return redirect()->back();
        }

        return redirect()->intended('/dashboard/users/restriction');
    }

    public function delete(Request $request)
    {
        $restriction = restriction::find($request->id);

        try 
        {
            $restriction->delete();
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Delete restriction failed $msg");
            
            return back();
        }

        return redirect()->intended('/dashboard/users/restriction');
    }

    public function search(Request $request)
    {
        if ($request->ajax())
        {
            $result = '';

            $restrictions = restriction::with(['role', 'levels'])->sortable()->paginate(10);

            if(isset($request->keyword))
            {
                $restrictions = restriction::with(['role', 'levels'])->
                whereHas('role', function($q) use($request) {
                    $q->where('name','LIKE', "%$request->keyword%");
                })->
                orWhere('route','LIKE',"%$request->keyword%")->
                orWhere('action', 'LIKE', "%$request->keyword%")->
                orWhere('type', 'LIKE', "%$request->keyword%")->
                sortable()->
                get();
            }

            if ($restrictions->count() == 0)
            {
                $result .= '<tr>
                                <th>Not Found</th>
                                <td>Not Found</td>
                                <td>Not Found</td>
                                <td>Not Found</td>
                                <td>Not Found</td>
                                <td>Not Found</td>
                                <td>
                                    <span class="badge badge-danger">
                                        <i class="zmdi zmdi-lock"></i>
                                        Not Found
                                    </span>
                                </td>
                            </tr>';
                        
                return response()->json([
                    'message' => $result
                ]);
            }

            foreach ($restrictions as $key => $restriction) 
            {
                $edit_action = auth()->user()->level <= 4 ? "/dashboard/restriction?page=edit&restriction=" . $restriction->id  : "javascript:void();";
                $disabled = auth()->user()->level > 4 ? "disabled" : "";
                $delete = auth()->user()->level <= 3 ? "#restriction-delete-" .  $restriction->id : "javascript:void();";

                $result .= '
                <tr>
                    <th scope="row">' . ($key + 1) . '</th>
                    <td>' . $restriction->route . '</td>
                    <td>' . $restriction->action . '</td>
                    <td>' . $restriction->role->name . '</td>
                    <td>' . $restriction->type . '</td>
                    <td>
                        <span class="' . $restriction->levels->badge . '">
                            <i class="' . $restriction->levels->icon . '"></i> 
                            '. $restriction->levels->name .'
                        </span>
                    </td>
                    <td>
                        <div class="btn-group mx-auto">
                            <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right bg-dark-light">
                                <li class="dropdown-divider"></li>
                                <a href="' . $edit_action . '"><li class="dropdown-item' . $disabled . '">Edit User</li></a>
                                <li class="dropdown-divider"></li>
                                <a data-toggle="modal" data-target="' . $delete . '"><li class="dropdown-item ' . $disabled . '">Delete User</li></a>
                            </ul>
                        </div>
                    </td>
                </tr>';
            }

            return response()->json([
                'message' => $result
            ]);
        }

        return response()->json([
            'message' => 'unknown'
        ]);
    }
}
