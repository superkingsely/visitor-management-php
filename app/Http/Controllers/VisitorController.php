<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visitor;

use DataTables;

use Illuminate\Support\Facades\Auth;

class VisitorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        return view('visitor');
    }

    function fetch_all(Request $request)
    {
        if($request->ajax())
        {
            $query = Visitor::join('users', 'users.id', '=', 'visitors.visitor_enter_by');

            if(Auth::user()->type == 'User')
            {
                $query->where('visitors.visitor_enter_by', '=', Auth::user()->id);
            }

            $data = $query->get(['visitors.visitor_name', 'visitors.visitor_meet_person_name', 'visitors.visitor_department', 'visitors.visitor_enter_time', 'visitors.visitor_out_time', 'visitors.visitor_status', 'users.name', 'visitors.id']);

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('visitor_status', function($row){
                    if($row->visitor_status == 'In')
                    {
                        return '<span class="badge bg-success">In</span>';
                    }
                    else
                    {
                        return '<span class="badge bg-danger">Out</span>';
                    }
                })
                ->escapeColumns('visitor_status')
                ->addColumn('action', function($row){
                    if($row->visitor_status == 'In')
                    {
                        return '<a href="/visitor/view/'.$row->id.'" class="btn btn-info btn-sm">View</a>&nbsp;<a href="/visitor/edit/'.$row->id.'" class="btn btn-primary btn-sm">Edit</a>&nbsp;<button type="button" class="btn btn-danger btn-sm delete" data-id="'.$row->id.'">Delete</button>
                        ';
                    }
                    else
                    {
                        return '<a href="/visitor/view/'.$row->id.'" class="btn btn-info btn-sm">View</a>&nbsp;<button type="button" class="btn btn-danger btn-sm delete" data-id="'.$row->id.'">Delete</button>';
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    // patch
    // add btn nd page next

    function add()
    {
        
        return view('add_visitor');
    }

    function add_validation(Request $request)
    {
        $request->validate([
            'visitor_name'            =>  'required',
            'visitor_email'           =>  'email',
            'visitor_mobile_no'       =>  'required',
            'visitor_address'         =>  'required',
            'visitor_meet_person_name'=>  'required',
            'visitor_department'      =>  'required',
            'visitor_reason_to_meet'  =>  'required',
            'visitor_enter_time'      =>  'required',
            'visitor_outing_remark'   =>  'required',
            'visitor_out_time'        =>  'required',
            'visitor_status'          =>  'required',
            'visitor_enter_by'        =>  'required'
        ]);

        $data = $request->all();

        Visitor::create([
            'visitor_name'            => $data['visitor_name'            ],
            'visitor_email'           => $data['visitor_email'           ],
            'visitor_mobile_no'       => $data['visitor_mobile_no'       ], 
            'visitor_address'         => $data['visitor_address'         ],
            'visitor_meet_person_name'=> $data['visitor_meet_person_name'],
            'visitor_department'      => $data['visitor_department'      ],
            'visitor_reason_to_meet'  => $data['visitor_reason_to_meet'  ],
            'visitor_enter_time'      => $data['visitor_enter_time'      ],
            'visitor_outing_remark'   => $data['visitor_outing_remark'   ],
            'visitor_out_time'        => $data['visitor_out_time'        ],
            'visitor_status'          => $data['visitor_status'          ],
            'visitor_enter_by'        => $data['visitor_enter_by'        ]
            
        ]);

        return redirect('visitor')->with('success', 'New Visitor Added');
    }

}
