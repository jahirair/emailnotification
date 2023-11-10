<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\Welcome;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class NoticationController extends Controller {
    public function index() {
        $user = User::first();
        // Notification::send( $user, new Welcome );
        Notification::send( $user, new Welcome() );
        return view( 'welcome' );
        dd( 'done' );
    }
}
