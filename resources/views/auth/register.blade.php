<x-guest-layout>
    <style>
        /* Background image for the registration page */
        body {
            background-image: url('/adminbackground.jpg'); /* Replace with appropriate background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0; /* Remove default body margins */
        }

        /* Center the registration box */
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
        .register-title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }

        /* Input fields styling */
        input, select {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 0.5rem;
            width: 100%;
            margin-bottom: 1rem;
        }

        /* Styling the register button */
        .register-button {
            background-color: #C9A050; /* Match theme */
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-button:hover {
            background-color: #b08f45; /* Darker shade for hover */
        }

        /* Already registered link */
        .already-registered-link {
            font-size: 0.875rem;
            color: #C9A050;
            text-decoration: underline;
            text-align: center;
            display: block;
            margin-top: 1rem;
        }

        .already-registered-link:hover {
            color: #b08f45;
        }
    </style>

    <div class="authentication-card">
        <!-- Title for Registration -->
        <div class="register-title">Register</div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <!-- Email Address -->
            <div>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <!-- Password -->
            <div>
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <!-- Register As (Dropdown) -->
            <div>
                <label for="role">{{ __('Register as') }}</label>
                <select id="role" name="role" required>
                    <option value="">-- Select Role --</option>
                    <option value="user">User</option>
                    <option value="seller">Seller</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="register-button">
                    {{ __('Register') }}
                </button>
            </div>

            <!-- Already registered link -->
            <a class="already-registered-link" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </form>
    </div>
</x-guest-layout>
