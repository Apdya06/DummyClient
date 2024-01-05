<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DummyController extends Controller{

    public function getRequestJson(Request $request){
        $url = 'https://dummy.restapiexample.com/api/v1/employees';
        $headers = ['Accept: application/json'];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        curl_close($ch);

        $response = json_decode($result, true);
        return view('posts/getRequestJson', ['results' => $response["data"]]);
    }

    public function getRequestJsonId(Request $request, $id){
        $url = 'https://dummy.restapiexample.com/api/v1/employee/' . $id;
        $headers = ['Accept: application/json'];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        curl_close($ch);

        $response = json_decode($result, true);
        return view('posts/getRequestJson', ['result' => $response["data"]]);
    }

    public function postRequestJson(Request $request){
        $url = 'https://dummy.restapiexample.com/api/v1/create';
        $headers = ['Accept: application/json', 'Content-Type: application/json'];
        $data  = [
            "name" => "New Employee",
            "salary" => "234",
            "age" => "32",
        ];

        $data_json = json_encode($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);

        $result = curl_exec($ch);

        curl_close($ch);

        $response = json_decode($result, true);

        return view('posts/postRequestJson', ['result' => $response["data"]]);
    }

    public function updateRequestJson(Request $request, $id){
        $url = 'https://dummy.restapiexample.com/api/v1/update/' . $id;
        $headers = ['Accept: application/json', 'Content-Type: application/json'];
        $data  = [
            "name" => "Updated Employee",
            "salary" => "300",
            "age" => "35",
        ];

        $data_json = json_encode($data);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);

        $result = curl_exec($ch);

        curl_close($ch);

        $response = json_decode($result, true);

        return view('posts/putRequestJson', ['result' => $response["data"]]);
    }

    public function deleteRequestJson(Request $request, $id){
        $url = 'https://dummy.restapiexample.com/public/api/v1/delete/' . $id;
        $headers = ['Accept: application/json', 'Content-Type: application/json'];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

        $result = curl_exec($ch);

        curl_close($ch);

        $response = json_decode($result, true);

        return view('posts/deleteRequestJson', ['result' => $response]);
    }


}
