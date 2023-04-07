<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    /**
     * Shows login form.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function showIndex(Request $request)
    {
        $agendas = [
            [
                'title' => 'Registration & Networking',
                'time'  => '08.30 AM - 09.30 AM',
                'speaker'   => '',
            ],
            [
                'title' => 'Welcome Remarks',
                'time'  => '09.30 AM - 09.40 AM',
                'speaker'   => 'Benedikta Satya, Country Director, Searce',
            ],
            [
                'title' => 'Accelerate Data Movement into Google Cloud with Fivetran',
                'time'  => '09.40 AM - 10.10 AM',
                'speaker'   => 'Felicity Burrows, Alliance Manager, Fivetran',
            ],
            [
                'title' => 'Agile Development with Officeless No Code Platform',
                'time'  => '10.10 AM - 10.40 AM',
                'speaker'   => 'Heryudi Ganesha, VP of IT Operations and Infrastructure, Jojonomic',
            ],
            [
                'title' => 'Set up Complicated Architecture with Aiven in minutes',
                'time'  => '10.40 AM - 11.10 AM',
                'speaker'   => 'Budi Kusuma Utama, Senior Solution Architect, Aiven',
            ],
            [
                'title' => 'Build the optimized cloud infrastructure with Intel',
                'time'  => '11.10 AM - 11.40 AM',
                'speaker'   => 'Beny Ibrani, Cloud Solution Architect, Intel',
            ],
            // [
            //     'title' => 'Topic 4',
            //     'time'  => '11.30 AM - 12.00 PM',
            //     'speaker'   => 'Maron* - Google',
            // ],
            [
                'title' => 'Lunch',
                'time'  => '11.40 AM - 1.00 PM',
                'speaker'   => '',
            ],
        ];

        $speakers = [
            [
                'filename' => 'Benedikta.jpg',
                'name' => 'Benedikta Satya',
                'job' => 'Country Director, Searce',
                'bio' => 'Bene is responsible for overseeing the overall business in Searce Indonesia, and monitoring the revenue achievement.'
            ],
            [
                'filename' => 'Beny.JPG',
                'name' => 'Beny Ibrani',
                'job' => 'Cloud Solution Architect',
                'bio' => 'BCloud Solution Architect, Intel.'
            ],
            [
                'filename' => 'Budi_Kusuma_Utama.jpeg',
                'name' => 'Budi Kusuma Utama',
                'job' => 'Senior Solution Architect, Aiven',
                'bio' => 'Budi is a Senior Presales Solution Architect at Aiven. Budi has been passionate about internet technology.'
            ],
            [
                'filename' => 'Felicity_Burrows.png',
                'name' => 'Felicity Burrows',
                'job' => 'Alliance Manager, Fivetran',
                'bio' => 'Felicity Burrows is an Alliance Manager based in Singapore who spent the last 18 months at Fivetran.'
            ],
            [
                'filename' => 'Heryudi_Ganesha.jpg',
                'name' => 'Heryudi Ganesha',
                'job' => 'VP of IT Operations and Infrastructure at Jojonomic',
                'bio' => 'Budi has extensive experience in IT operations, infrastructure, and service delivery management for over 15 years.'
            ]
        ];
        return view('searce.welcome', [
            'agendas' => $agendas,
            'speakers' => $speakers
        ]);

    }


    public function dashboard() {
        $users = User::all();

        if (Auth::user()->role->role_level == 2) {
            $adminsEvent = Auth::user()->event->event_name;
            $users = User::where('subqis', $adminsEvent)->get();
        }
        return view('admin.pages.index', [
            'users' => $users
        ]);
    }
}
