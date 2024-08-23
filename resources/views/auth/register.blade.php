<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        <div>
            <label for="linkedin_username">LinkedIn Username:</label>
            <input type="text" id="linkedin_username" name="linkedin_username" value="{{ old('linkedin_username') }}"
                required>
        </div>

        <div>
            <label for="fields_of_work">Fields of Work:</label>
            <div>
                <input type="checkbox" name="fields_of_work[]" value="Technology"> Technology
            </div>
            <div>
                <input type="checkbox" name="fields_of_work[]" value="Health"> Health
            </div>
            <div>
                <input type="checkbox" name="fields_of_work[]" value="Education"> Education
            </div>
            <div>
                <input type="checkbox" name="fields_of_work[]" value="Finance"> Finance
            </div>
            <div>
                <input type="checkbox" name="fields_of_work[]" value="Art"> Art
            </div>
        </div>

        <div>
            <label for="mobile_number">Mobile Number:</label>
            <input type="text" id="mobile_number" name="mobile_number" value="{{ old('mobile_number') }}" required>
        </div>

        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>

</html>
