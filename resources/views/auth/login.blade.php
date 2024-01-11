    @include('grades_pages.layouts.links')
    <div class="loginbox">
        <!--logo-->
        <img src="{{asset('grades/images/logo.jpg')}}" class="login">
        <h2 style="color: #ff973e;">LOGIN</h2>
        <h6 style="color: #ff4e3e;DISPLAY: flex;JUSTIFY-CONTENT: center;">NOTE THIS PAGE FOR THE ADMINS </h6>
        <!--start form-->
        <form style="margin-top: 20px;" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
        <div>
            <x-input-label  for="email" :value="__('Email')" />
            <input id="or" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error  style="color: red;"  :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <input class="form-control" id="or" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error style="color: red;" :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div style="justify-content: center;display: flex;" class="flex  justify-end mt-4">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
        </form>
    </div>