<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;

class ContactFormRequest extends FormRequest
{
	public function authorize(): bool
	{
		return true;
	}

	public function rules(): array
	{
		return [
			'interest' => 'required|array|min:1',
			'interest.*' => 'string',
			'name' => 'required',
			'firstname' => 'required',
			'street' => 'required',
			'location' => 'required',
			'email' => 'required|email|regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
			'phone' => 'nullable',
			'privacy' => 'accepted',
			'recaptcha_token' => 'required',
			'website' => 'nullable|max:0',
			'_start' => 'required|integer'
		];
	}

	public function messages(): array
	{
		return [
			'interest.required' => 'Bitte wählen Sie mindestens eine Option',
			'interest.min' => 'Bitte wählen Sie mindestens eine Option',
			'name.required' => 'Name ist erforderlich',
			'firstname.required' => 'Vorname ist erforderlich',
			'street.required' => 'Strasse/Nr. ist erforderlich',
			'location.required' => 'PLZ/Ort ist erforderlich',
			'email.required' => 'E-Mail ist erforderlich',
			'email.email' => 'E-Mail muss gültig sein',
			'email.regex' => 'E-Mail muss gültig sein',
			'privacy.accepted' => 'Die Datenschutzerklärung muss akzeptiert werden',
			'recaptcha_token.required' => 'reCAPTCHA Verifizierung fehlgeschlagen',
			'website.max' => 'Ungültige Eingabe',
		];
	}

	public function withValidator($validator): void
	{
		$validator->after(function ($validator) {
			// Check if form was submitted too quickly (bot detection)
			$startTime = $this->input('_start');
			if ($startTime) {
				$elapsedTime = now()->timestamp * 1000 - $startTime;
				if ($elapsedTime < config('spam-protection.min_submit_time')) {
					$validator->errors()->add('email', 'Bitte versuchen Sie es erneut.');
					return;
				}
			}

			if (! $this->verifyRecaptcha()) {
				$validator->errors()->add('recaptcha_token', 'reCAPTCHA Verifizierung fehlgeschlagen. Bitte versuchen Sie es erneut.');
			}
		});
	}

	protected function verifyRecaptcha(): bool
	{
		$token = $this->input('recaptcha_token');

		if (empty($token)) {
			return false;
		}

		try {
			$response = Http::asForm()->post(config('recaptcha.verify_url'), [
				'secret' => config('recaptcha.secret_key'),
				'response' => $token,
				'remoteip' => $this->ip(),
			]);

			$result = $response->json();

			if (! $result['success']) {
				return false;
			}

			if (isset($result['score']) && $result['score'] < config('recaptcha.min_score')) {
				return false;
			}

			return true;
		} catch (\Exception $e) {
			\Log::error('reCAPTCHA verification failed: '.$e->getMessage());

			return false;
		}
	}
}
