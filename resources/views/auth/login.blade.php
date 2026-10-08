<x-guest-layout>
    <style>
        /* Background image for buyer/artist login */
        body {
            background-image: url('/adminbackground.jpg'); /* Replace with appropriate background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0; /* Remove default body margins */
        }

        /* Center the login box */
        .authentication-card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent white */
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        /* Styling the title */
        .login-title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }

        /* Input fields styling */
        input {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 0.5rem;
            width: 100%;
            margin-bottom: 1rem;
        }

        /* Styling the login button */
        .login-button {
            background-color: #C9A050; /* Match theme for buyers/artists */
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #C9A050; /* Darker shade for hover */
        }

        /* Remember Me checkbox and forgot password link */
        .checkbox-label {
            display: flex;
            align-items: center;
            margin-bottom: 0rem;
        }

        .forgot-password-link {
            font-size: 0.875rem;
            color: #C9A050;
            text-decoration: underline;
            cursor: pointer;
        }

        .forgot-password-link:hover {
            color: #C9A050;
        }
    </style>

    <div class="authentication-card">
        <!-- Title for Buyers/Artists Login -->
        <div class="login-title">Login</div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me checkbox -->
            <div class="checkbox-label mt-4">
                <input id="remember_me" type="checkbox" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </div>


            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit" class="login-button">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
