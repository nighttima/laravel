<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Information;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Http\Request;
use phpseclib3\File\ASN1\Maps\Name;

class TestController extends Controller
{
    public function test() {
        $admin = Admin::find(2);
        $roles = $admin->roles;
        foreach ($roles as $role) {
            echo $role->name.'<br>';
        }
//        $posts = Information::find(3);
//        dump($admin);
        return;
    }
}
