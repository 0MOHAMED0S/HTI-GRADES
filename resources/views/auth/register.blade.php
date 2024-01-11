@include('grades_pages.layouts.links')
<div class="loginbox2">
            <!--logo-->
    <img src="{{ asset('grades/images/logo.jpg') }}" class="login">
    <h2 style="color: #ff973e;">REGISTER</h2>
            <!--start form-->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <input id="or" class="form-control" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error style="color: rgb(255, 0, 0)" :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <input id="or" class="form-control" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error style="color: rgb(255, 0, 0)" :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <input id="or" class="form-control" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error style="color: rgb(255, 0, 0)" :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <input id="or" class="form-control" type="password" name="password_confirmation" required
                autocomplete="new-password" />

            <x-input-error style="color: rgb(255, 0, 0)" :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div style="justify-content: center;display: flex;" class="flex  justify-end mt-4">
            <button type="submit" class="btn btn-success">Submit</button>

        </div>
    </form>
