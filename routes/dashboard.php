<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::prefix('/dashboard')->group(function (){

    Route::get('/', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::post('create-user', function (Request $request) {
        
        $name = $request->input('name');
        $last_name = $request->input('lastName');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $avatar = $request->input('avatarUrl');
        $birth_date = $request->input('birthdate');
        $doc_type = $request->input('docType');
        $doc_number = $request->input('docNumber');
        $sex = $request->input('sex');
        $sex_orientation = $request->input('sexOrientation');
        $rh = $request->input('rh');
        $data_value = json_encode([]);
        $role = $request->input('role');
        $city = $request->input('city');
        $user_type = $request->input('userType');

        Log::info('Creating user with data:', [
            'name' => $name,
            'last_name' => $last_name,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'address' => $address,
            'avatar' => $avatar,
            'birth_date' => $birth_date,
            'doc_type' => $doc_type,
            'doc_number' => $doc_number
        ]);

        $newUser = new User([
            'name' => $name,
            'last_name' => $last_name,
            'user_name' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'password_text' => $password,
            'phone' => $phone,
            'address' => $address,
            'avatar' => $avatar,
            'birth_date' => $birth_date,
            'doc_type' => $doc_type,
            'doc_number' => $doc_number,
            'sex' => $sex,
            'sex_orientation' => $sex_orientation,
            'rh' => $rh,
            'data_value' => $data_value,
            'id_role' => $role,
            'id_city' => $city,
            'id_user_type' => $user_type,
        ]);

        $newUser->save();



        return to_route('dashboard');
    })->name('addUser');

});

