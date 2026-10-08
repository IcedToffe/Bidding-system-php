<x-guest-layout>
    <style>
        /* Background styling */
        body {
            background-image: url('/adminbackground.jpg'); /* Replace with your image path */
            background-size: 1290px 909px;
            background-position: cover;
            background-repeat: no-repeat;
        }

        /* Center the login card */
        .authentication-card {
            position: absolute; /* Position relative to the viewport */
            top: 50%; /* Vertically center */
            left: 50%; /* Horizontally center */
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9); /* Slightly transparent white */
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            margin: auto;
        }

        /* Styling the Admin Login title */
        .admin-title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #020202;
            margin-bottom: 1rem;
        }

        /* Styling input fields */
        input {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 0.5rem;
            width: 100%;
        }

        /* Styling the login button */
        .login-button {
            background-color: #C9A050; /* Match your design */
            color: white;
            padding: 0.5rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #B89345; /* Slightly darker shade for hover */
        }
    </style>

    <div class="authentication-card">
        <!-- Admin Login Title -->
        <div class="admin-title">Admin Login</div>


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required />
            </div>

            <!-- Login Button -->
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="login-button">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
