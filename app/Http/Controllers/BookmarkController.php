<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Package;
use App\Models\Post;
use Illuminate\Support\Facades\Config;
use App\Helpers\WebServiceHelper;
use Illuminate\Support\Facades\Auth;
use Exception;

class BookmarkController extends Controller
{
    // public function __construct(WebServiceHelper $webServiceHelper)
    // {
    //     $this->webServiceHelper = $webServiceHelper;
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        return view('staticPages.comingSoon.index');

        return view('bookmark.index');
        $params = array();

        $endpoint = Config::get("app.apiUrl") . "v1/get-all-companies/" . Auth::user()->id;

        $headers = $this->webServiceHelper->httpGetHeaders;
        $method = $this->webServiceHelper->httpGetMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $companyResponse = $response->data;

            if (isset($companyResponse)) {
                $mapLocations = [];
                foreach ($companyResponse as $company) {
                    if (isset($company->lattitude, $company->longitude)) {
                        $data['lat'] =  $company->lattitude;
                        $data['lng'] =  $company->longitude;
                        $data['name'] = $company->name;
                        $data['distanceFromYou'] = $company->distanceFromYou;
                        array_push($mapLocations, $data);
                    }
                }
                return view('bookmark.index')->with(['companies' => $companyResponse, 'mapLocations' => $mapLocations]);
            }
        } catch (Exception $exception) {
            $customerDevices = [];
        }

        abort(404);
    }


    public function getCompanies(Request $request)
    {
        $params = array();


        $catagoryIDs = $request->query('catagoryIDs');
        $availablities = $request->query('availablities');
        $ratings = $request->query('ratings');
        $distances = $request->query('distances');

        // $catagoryIDs = [
        //     "67fff39e05958478940b17a2"
        // ];
        // $availablities = ["IMMEDIATE"];
        // $ratings = [4.6];
        // $distances = ["sample", "ample"];

        $baseUrl = Config::get("app.apiUrl") . "v1/get-all-companies/" . Auth::user()->id;

        $queryParams = [];

        if (!is_null($catagoryIDs)) {
            $queryParams['catagoryIDs'] = $catagoryIDs;
        }

        if (!is_null($availablities)) {
            $queryParams['availablities'] = $availablities;
        }

        if (!is_null($ratings)) {
            $queryParams['ratings'] = $ratings;
        }

        if (!is_null($distances)) {
            $queryParams['distances'] = $distances;
        }

        $endpoint = $baseUrl;

        if (!empty($queryParams)) {
            $endpoint .= '?' . http_build_query($queryParams, '', '&', PHP_QUERY_RFC3986);
        }

        $headers = $this->webServiceHelper->httpGetHeaders;
        $method = $this->webServiceHelper->httpGetMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $companyResponse = $response->data;

            if (isset($companyResponse)) {
                $mapLocations = [];
                $companies = $companyResponse->companies;
                foreach ($companies as $company) {
                    if (isset($company->lattitude, $company->longitude)) {
                        $data['lat'] =  $company->lattitude ?? null;
                        $data['lng'] =  $company->longitude ?? null;
                        $data['name'] = $company->name ?? null;
                        $data['distanceFromYou'] = $company->distanceFromYou ?? null;
                        array_push($mapLocations, $data);
                    }
                }
                return ['companies' => $companies, 'mapLocations' => $mapLocations, 'subcatagories' => $companyResponse->subCatagories];
            }
        } catch (Exception $exception) {
            return $exception;
            $customerDevices = [];
        }

        abort(404);
    }
    public function bookmarksuplier(Request $request)
    {

        $companyID = $request->query('companyID');
        $action = $request->query('action');
        $authID = $request->query('authID');

        $params = array();
        $params["companyID"] = $companyID;
        $params["action"] = $action;
        $params["authID"] = $authID;

        $endpoint = Config::get("app.apiUrl") . "v1/update-company-bookmarks";
        $headers = $this->webServiceHelper->httpPostHeaders;
        $method = $this->webServiceHelper->httpPostMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $jobResponse = $response->data;

            if (isset($jobResponse)) {
                return true;
            }
        } catch (Exception $exception) {
            $customerDevices = [];
        }


        return false;

        
    }
}
