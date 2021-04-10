<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class getApiCoronaController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('country')) {
            $country = $request->country;
        } else {
            $country = 'Indonesia';
        }

        $host = 'covid-19-coronavirus-statistics.p.rapidapi.com';
        $key = 'bf3103929bmsh3a6c586fd226930p12adbejsn84aee2d38401';

        $list_data = $this->getAPi($host, $key, $country)['data']['covid19Stats'][0];
        $list_country = $this->getAPi($host, $key, $country = '')['data']['covid19Stats'];

        $country_array = [];
        foreach ($list_country as $result) {
            $country_array[] = $result['country'];
        }

        $country = collect($country_array)->unique();

        return view('report', ['list_data' => $list_data, 'country' => $country]);
    }

    private function getAPi($host, $key, $country)
    {
        return Http::withHeaders([
            'x-rapidapi-key' => $key,
            'x-rapidapi-host' => $host,
        ])->get('https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats', [
            "country" => $country,
        ]);

    }
}
