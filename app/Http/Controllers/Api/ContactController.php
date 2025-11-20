<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Notifications\Contact\OwnerInformation;
use App\Notifications\Contact\UserConfirmation;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request)
    {
        $validated = $request->validated();

        $apartments = [];
        if ($request->input('apartment_1_5')) {
            $apartments[] = '1.5-Zimmerwohnung';
        }
        if ($request->input('apartment_2_5')) {
            $apartments[] = '2.5-Zimmerwohnung';
        }
        if ($request->input('apartment_3_5')) {
            $apartments[] = '3.5-Zimmerwohnung';
        }

        $data = [
            'date_submission' => date('d.m.Y', time()),
            'apartments' => $apartments,
            'apartments_string' => implode(', ', $apartments),
            'title' => $request->input('firstname').' '.$request->input('name').', '.$request->input('email'),
            'name' => $request->input('name'),
            'firstname' => $request->input('firstname'),
            'street' => $request->input('street'),
            'location' => $request->input('location'),
            'phone' => $request->input('phone') ?? null,
            'email' => $request->input('email'),
            'privacy' => true,
        ];

        try {
            Notification::route('mail', env('MAIL_TO'))->notify(new OwnerInformation($data));
        } catch (\Exception $e) {
            \Log::error('Failed to send owner notification for contact form: '.$e->getMessage(), [
                'email' => env('MAIL_TO'),
                'data' => $data,
            ]);
        }

        try {
            Notification::route('mail', $data['email'])->notify(new UserConfirmation($data));
        } catch (\Exception $e) {
            \Log::error('Failed to send user confirmation for contact form: '.$e->getMessage(), [
                'email' => $data['email'],
                'data' => $data,
            ]);
        }

        return response()->json(['message' => 'Store successful']);
    }
}
