<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Redirect;
use View;
use Illuminate\Support\Carbon;
use Auth;
use Validator;

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
                'speaker'   => 'Benedikta Satya | Country Director | Searce',
            ],
            [
                'title' => 'Accelerate Data Movement into Google Cloud with Fivetran',
                'time'  => '09.40 AM - 10.10 AM',
                'speaker'   => 'Felicity Burrows | Alliance Manager | Fivetran',
            ],
            [
                'title' => 'Agile Development with Officeless No Code Platform',
                'time'  => '10.10 AM - 10.40 AM',
                'speaker'   => 'Heryudi Ganesha | VP of IT Operations and Infrastructure | Jojonomic',
            ],
            [
                'title' => 'Set up Complicated Architecture with Aiven in minutes',
                'time'  => '10.40 AM - 11.10 AM',
                'speaker'   => 'Budi Kusuma Utama | Senior Solution Architect | Aiven',
            ],
            [
                'title' => 'Build the optimized cloud infrastructure with Intel',
                'time'  => '11.10 AM - 11.30 AM',
                'speaker'   => 'Beny Ibrani | Cloud Solution Architect | Intel',
            ],
            [
                'title' => 'Topic 4',
                'time'  => '11.30 AM - 12.00 PM',
                'speaker'   => 'Maron* - Google',
            ],
            [
                'title' => 'Lunch',
                'time'  => '12.30 PM - 1.30 PM',
                'speaker'   => '',
            ],
        ];

        $speakers = [
            [
                'filename' => 'Benedikta.jpg',
                'name' => 'Benedikta Satya',
                'job' => 'Country Director, Searce',
                'bio' => 'Bene is responsible for overseeing the overall business in Searce Indonesia.Monitoring the revenue achievement, client base expansions as well as building the entire Indonesia team structure are also part of her main responsibility.'
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
                'bio' => 'Budi is a Senior Presales Solution Architect at Aiven. He has been passionate about internet technology ever since he began his work as a web developer more than 20 years ago.'
            ],
            [
                'filename' => 'Felicity_Burrows.png',
                'name' => 'Felicity Burrows',
                'job' => 'Alliance Manager, Fivetran',
                'bio' => 'Felicity Burrows is an Alliance Manager based in Singapore. Felicity spent the last 18 months at Fivetran building the SI partner ecosystem from scratch for the South East Asia region including India and Korea.'
            ],
            [
                'filename' => 'Heryudi_Ganesha.jpg',
                'name' => 'Heryudi Ganesha',
                'job' => 'VP of IT Operations and Infrastructure at Jojonomic',
                'bio' => 'Often called by his nickname Yudi, he has extensive experience in IT operations, infrastructure, and service delivery management for over 15 years. Yudi has worked for various organizations and in his contribution in managing teams.'
            ]
        ];
        return view('searce.welcome', [
            'agendas' => $agendas,
            'speakers' => $speakers
        ]);

    }
}
