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
use stdClass;
use Illuminate\Support\Str;

class BookmarkController extends Controller
{
    public function __construct(WebServiceHelper $webServiceHelper)
    {
        $this->webServiceHelper = $webServiceHelper;
        // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        // return view('staticPages.comingSoon.index');

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


    public function getBookmarkedCompanies(Request $request)
    {
        $params = array();
        $catagoryID = $request->query('catagoryID');
        $availablityStatus = $request->query('availablityStatus');
        $distance = $request->query('distance');

        // $baseUrl = Config::get("app.apiUrl") . "v1/get-my-bookmarked-companies/" . Auth::user()->id;

        $baseUrl = Config::get("app.apiUrl") . "v1/get-my-bookmarked-companies/686ba4de940660836707450d";

        $queryParams = [];

        if (!is_null($catagoryID)) {
            $queryParams['catagoryID'] = $catagoryID;
        }

        if (!is_null($availablityStatus)) {
            $queryParams['availablityStatus'] = $availablityStatus;
        }

        if (!is_null($distance)) {
            $queryParams['distance'] = $distance;
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
                return $companyResponse;
            }
        } catch (Exception $exception) {
            $customerDevices = [];
        }

        return [];
    }


    public function getApprovedSuppliers(Request $request)
    {
        $params = array();
        $catagoryID = $request->query('catagoryID');
        $availablityStatus = $request->query('availablityStatus');
        $distance = $request->query('distance');

        // $baseUrl = Config::get("app.apiUrl") . "v1/get-my-bookmarked-companies/" . Auth::user()->id;

        $baseUrl = Config::get("app.apiUrl") . "v1/get-my-approved-companies/686ba4de940660836707450d";

        $queryParams = [];

        if (!is_null($catagoryID)) {
            $queryParams['catagoryID'] = $catagoryID;
        }

        if (!is_null($availablityStatus)) {
            $queryParams['availablityStatus'] = $availablityStatus;
        }

        if (!is_null($distance)) {
            $queryParams['distance'] = $distance;
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
                return $companyResponse;
            }
        } catch (Exception $exception) {
            $customerDevices = [];
        }

        return [];
    }


    public function getRecomendedSuppliers(Request $request)
    {
        $params = array();

        // $baseUrl = Config::get("app.apiUrl") . "v1/get-my-recomended-companies/" . Auth::user()->id;

        $endpoint = Config::get("app.apiUrl") . "v1/get-my-recomended-companies/686ba4de940660836707450d";


        $headers = $this->webServiceHelper->httpGetHeaders;
        $method = $this->webServiceHelper->httpGetMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $companyResponse = $response->data;

            if (isset($companyResponse)) {
                return $companyResponse;
            }
        } catch (Exception $exception) {
            $customerDevices = [];
        }

        return [];
    }

    public function getSelectedSuppliers(Request $request)
    {
        $params = array();

        // $baseUrl = Config::get("app.apiUrl") . "v1/get-my-recomended-companies/" . Auth::user()->id;

        $endpoint = Config::get("app.apiUrl") . "v1/get-my-selected-companies/686ba4de940660836707450d";


        $headers = $this->webServiceHelper->httpGetHeaders;
        $method = $this->webServiceHelper->httpGetMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $companyResponse = $response->data;

            if (isset($companyResponse)) {
                return $companyResponse;
            }
        } catch (Exception $exception) {
            $customerDevices = [];
        }

        return [];
    }

    public function getBookmarkAds(Request $request)
    {
        $params = array();

        // $baseUrl = Config::get("app.apiUrl") . "v1/get-my-recomended-companies/" . Auth::user()->id;

        $endpoint = Config::get("app.apiUrl") . "v1/get-bookmark-ads/686ba4de940660836707450d";


        $headers = $this->webServiceHelper->httpGetHeaders;
        $method = $this->webServiceHelper->httpGetMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $companyResponse = $response->data;

            if (isset($companyResponse)) {
                return $companyResponse;
            }
        } catch (Exception $exception) {
            return $exception;
            $customerDevices = [];
        }

        return [];
    }

    public function addNewBookmarkFolder(Request $request)
    {

        // $authID = Auth::user()->id;
        $folderName = $request->post('folderName') ?? 'CustomFolder - ' . str::random(7);
        $authID = "686ba4de940660836707450d";

        $params = array();
        $params["folderName"] = $folderName;
        $params["authID"] = $authID;

        $endpoint = Config::get("app.apiUrl") . "v1/add-new-bookmark-folder";
        $headers = $this->webServiceHelper->httpPostHeaders;
        $method = $this->webServiceHelper->httpPostMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $bookmarkResponse = $response->data;

            if (isset($bookmarkResponse)) {
                return $bookmarkResponse;
            }
        } catch (Exception $exception) {
            $customerDevices = [];
        }

        return false;
    }

    public function updateBookmarkFolder(Request $request)
    {

        // $authID = Auth::user()->id;
        $folderName = $request->post('folderName') ?? 'CustomFolder - ' . str::random(7);
        $authID = "686ba4de940660836707450d";
        $folderID = $request->post('folderID') ?? '6874ce7aca1ec02795081282';

        $params = array();
        $params["folderName"] = $folderName;
        $params["authID"] = $authID;
        $params["folderID"] = $folderID;

        $endpoint = Config::get("app.apiUrl") . "v1/update-bookmark-folder-name";
        $headers = $this->webServiceHelper->httpPostHeaders;
        $method = $this->webServiceHelper->httpPostMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $bookmarkResponse = $response->data;

            if (isset($bookmarkResponse)) {
                return $bookmarkResponse;
            }
        } catch (Exception $exception) {
            $customerDevices = [];
        }

        return false;
    }

    public function deleteBookmarkFolder(Request $request)
    {

        // $authID = Auth::user()->id;
        $authID = "686ba4de940660836707450d";
        $folderID = $request->post('folderID') ?? '6874ce7aca1ec02795081282';

        $params = array();
        $params["authID"] = $authID;
        $params["folderID"] = $folderID;

        $endpoint = Config::get("app.apiUrl") . "v1/delete-bookmark-folder";
        $headers = $this->webServiceHelper->httpPostHeaders;
        $method = $this->webServiceHelper->httpPostMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $bookmarkResponse = $response->data;

            if (isset($bookmarkResponse)) {
                return $bookmarkResponse;
            }
        } catch (Exception $exception) {
            $customerDevices = [];
        }

        return false;
    }


    public function getAvailableCustomBookmarkApis(Request $request)
    {
        $params = array();

        // $baseUrl = Config::get("app.apiUrl") . "v1/get-my-recomended-companies/" . Auth::user()->id;

        $endpoint = Config::get("app.apiUrl") . "v1/get-available-custom-bookmark-folder-api/686ba4de940660836707450d";


        $headers = $this->webServiceHelper->httpGetHeaders;
        $method = $this->webServiceHelper->httpGetMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $folderIDs = $response->data;

            if (isset($folderIDs) && count($folderIDs) > 0) {
                $responseUrlArray = [];
                foreach ($folderIDs as $folderID) {
                    array_push($responseUrlArray, Config::get("constants.websiteConfigurations.appUrl") . "get-custom-bookmark-folder-details/" . $folderID);
                }
                return $responseUrlArray;
            }
        } catch (Exception $exception) {
            $customerDevices = [];
        }

        return [];
    }

    public function getCustomBookmarkFolderDetails(Request $request)
    {
        // $authID = Auth::user()->id;
        $authID = "686ba4de940660836707450d";
        $folderID = $request->route('folderID') ?? '6874ce7aca1ec02795081282';

        $params = array();

        $endpoint = Config::get("app.apiUrl") . "v1/get-custom-bookmark-folder-details/686ba4de940660836707450d/$folderID";


        $headers = $this->webServiceHelper->httpGetHeaders;
        $method = $this->webServiceHelper->httpGetMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, $params);
            $response = json_decode($response);
            $companyResponse = $response->data;

            if (isset($companyResponse)) {
                return $companyResponse;
            }
        } catch (Exception $exception) {
            return $exception;
            $customerDevices = [];
        }

        return [];
    }

    public function removeFromFolder(Request $request)
    {
        // $authID = Auth::user()->id;
        $authID = "686ba4de940660836707450d";
        $companyID  = $request->route('companyID');
        $fromFolder = $request->route('fromFolder');

        $endpoint = Config::get("app.apiUrl") . "v1/remove-company-from-folder/686ba4de940660836707450d/" . $fromFolder . "/" . $companyID;

        $headers = $this->webServiceHelper->httpGetHeaders;
        $method = $this->webServiceHelper->httpGetMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, []);
            $response = json_decode($response);
            $companyResponse = $response->data;

            if (isset($companyResponse)) {
                return $companyResponse;
            }
        } catch (Exception $exception) {
            return $exception;
            $customerDevices = [];
        }
    }

    public function moveFolder(Request $request)
    {
        // $authID = Auth::user()->id;
        $authID = "686ba4de940660836707450d";
        $companyID  = $request->route('companyID');
        $fromFolder = $request->route('fromFolder');
        $toFolder = $request->route('toFolder');


        $endpoint = Config::get("app.apiUrl") . "v1/move-folder/686ba4de940660836707450d/" . $fromFolder . "/" . $toFolder . "/" . $companyID;

        $headers = $this->webServiceHelper->httpGetHeaders;
        $method = $this->webServiceHelper->httpGetMethod;
        try {
            $response = $this->webServiceHelper->call($method, $endpoint, $headers, []);
            $response = json_decode($response);
            $companyResponse = $response->data;

            if (isset($companyResponse)) {
                return $companyResponse;
            }
        } catch (Exception $exception) {
            return $exception;
            $customerDevices = [];
        }
    }
}
