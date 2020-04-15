<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class MonitoringController extends Controller
{
	public function index()
	{
		$cases = $this->covidJson();
		return view('covid.index', compact('cases'));
	}

    public function cases()
    {
    	$cases = $this->covidJson();
    	$chart = $this->chart();
    	$total = count($cases);
    	$recovered = 0;
    	$admitted = 0;
    	$death = 0;
    	foreach ($cases as $case) {
    		// 
    		switch ($case['status']) {
    			case 'Recovered':
    				$recovered++;
    				break;

    			case 'Admitted':
    				$admitted++;
    				break;

    			case 'Died':
    				$death++;
    				break;
    			
    			default:
    				# code...
    				break;
    		}
    	}
    	return view('index', compact('cases', 'total', 'recovered', 'admitted', 'death', 'chart'));
    }

    public function chart()
    {
    	$cases = $this->covidJson();
    	$months = ['January' => 0, 'February' => 0, 'March' => 0, 'April' => 0];
    	foreach ($cases as $case) {
    		if($case['date'] != 'TBA'){
	    		$date = $case['date'];
	    		$date = Carbon::parse($date)->format('F');
	    		switch ($date) {
	    			case 'January':
	    				$months['January'] += 1;
	    				break;
	    			case 'February':
	    				$months['February'] += 1;
	    				break;
	    			case 'March':
	    				$months['March'] += 1;
	    				break;
	    			case 'April':
	    				$months['April'] += 1;
	    				break;
	    			
	    			default:
	    				# code...
	    				break;
	    		}
    		}
    	}
    	
    	return $months;
    }

    public function casesOutsidePH()
    {
    	$cases = $this->covidJsonOutsidePH();
    	return view('covid.outside', compact('cases'));
    }

	protected function covidJson()
	{
    	$response = Http::get('https://coronavirus-ph-api.herokuapp.com/cases');
    	$data = $response->json();
    	return $data;
	}

	protected function covidJsonOutsidePH()
	{
    	$response = Http::get('https://coronavirus-ph-api.herokuapp.com/cases-outside-ph');
    	$data = $response->json();
    	return $data;
	}
}
