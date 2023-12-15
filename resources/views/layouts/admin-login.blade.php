<!-- main-content-wrapper start -->
<div class="main-content-wrapper pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="my_account_area">
                    <h2>Login</h2>
                    <form action="{{ route('admin.login', app()->getlocale() ) }}" method="POST" class="customer_login">
                        @csrf
                        <p class="form-row">
                            <label>{{ __('Email') }}&nbsp;<span class="required">*</span></label>
                            <input type="text" name="email" value="" class="input-text @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}">
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </p>
                        <p class="form-row">
                            <label>{{ __('Password') }}&nbsp;<span class="required">*</span></label>
                            <input type="password" name="password" class="input-text @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </p>
                        <p>
                            <button class="submit-button" type="submit">{{ __('Login') }}</button>
                            <label class="">
                                <input type="checkbox" value="forever" id="rememberme" name="rememberme" {{ old('remember') ? 'checked' : '' }}>
                                <span>{{ __('Remember Me') }}</span>
                            </label>
                        </p>
                        <p class="lost_password">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request', app()->getlocale() ) }}">{{ __('Forgot Your Password?') }}</a>
                            @endif
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrapper end -->