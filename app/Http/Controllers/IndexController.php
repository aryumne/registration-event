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
                'id'       => 'benedikta',
                'filename' => 'benedikta.png',
                'name'     => 'Benedikta Satya',
                'job'      => 'Country Director Searce',
                'bio'      => 'As Indonesia Country Director, Bene is responsible for overseeing the overall business in Searce Indonesia.Monitoring the revenue achievement, client base expansions as well as building the entire Indonesia team structure are also part of her main responsibility. <br>
Benedikta Satya has more than 14 years of experience across the various industries and more than 12 years in the technology business. She started her career as an Account Executive at one of the biggest system integration companies in Indonesia called Metrodata and then moved on to join big giant companies like NTT, IBM and SAP. During her tenure in those companies, Bene successfully built a good network around enterprise companies as well as Digital natives ecosystems in Indonesia. '
            ],
            [
                'id'       => 'felicity',
                'filename' => 'felicity.png',
                'name'     => 'Felicity Burrows',
                'job'      => 'Alliance Manager Fivetran',
                'bio'      => 'Felicity Burrows is an Alliance Manager based in Singapore. Felicity spent the last 18 months at Fivetran building the SI partner ecosystem from scratch for the South East Asia region including India and Korea. She is now responsible for the Google relationship across the APAC region including all System Integrator partners of Google. She is focusing on building the best partnerships with System Integrators who have a shared vision of data democratisation and modernising their data stack with best in breed solutions for data movement to the BigQuery cloud. Felicity has 10 years of global experience across EMEA, US & APAC and is passionate about Fivetrans mission to make access to data as simple and reliable as electricity.'
            ],
            [
                'id'       => 'heryudi',
                'filename' => 'heryudi.png',
                'name'     => 'Heryudi Ganesha',
                'job'      => 'VP of IT Operations and infrastructure Jojonomic',
                'bio'      => 'Heryudi Ganesha is VP of IT Operations and Infrastructure at Jojonomic. Often called by his nickname Yudi, he has extensive experience in IT operations, infrastructure, and service delivery management for over 15 years. Yudi has worked for various organizations and in his contribution in managing teams, he has proven tracks to successfully reduce infrastructure costs, improve efficiency, and ensure compliance with SLAs. Additionally, he has expertise in e-learning management and IT infrastructure architecture. In his spare time, Yudi has actively served as a part-time lecturer in various universities'
            ],
            [
                'id'       => 'budi',
                'filename' => 'budi.png',
                'name'     => 'Budi Kusuma Utama',
                'job'      => 'Senior Solution Architect Aiven',
                'bio'      => 'Budi is a Senior Presales Solution Architect at Aiven. He has been passionate about internet technology ever since he began his work as a web developer more than 20 years ago. Aside from advocating cloud data and security, Budi is passionate about helping clients overcome challenges and developing purposeful solutions to achieve their goals.'
            ],
            [
                'id'       => 'beny',
                'filename' => 'beny.png',
                'name'     => 'Beny Ibrani',
                'job'      => 'Cloud Solution Architect Intel',
                'bio'      => 'Beny is a Cloud Solution Architect at Intel.'
            ],
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
