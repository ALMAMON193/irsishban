<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}" />
</head>

<style>
    .is-invalid {
        border-color: red;
    }

    .error-message {
        color: red;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }
</style>

<body>
    <div class="auth-container">
        <div class="img-container">
            <div class="overlay"></div>
            <img src="{{ asset('frontend/assets/img/auth-img.png') }}" alt="image">
        </div>
        <div class="form-container">
            <div class="logo-container">
                <a class="d-flex mx-auto" href="./index.html">
                    <img src="{{ asset('frontend/assets/img/auth-logo.png') }}" alt="logo">
                </a>
            </div>
            <h3 class="auth-title text-center mt-5">Register to Continue</h3>
            <p class="auth-text text-center mt-4">
                We’ll email you a magic link so we can verify your email address.
            </p>
            <form action="{{ route('register') }}" method="post" class="inputs">
                @csrf
                <div class="input-container">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="21" viewBox="0 0 17 21"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.64704 13.8345C4.77942 13.8345 1.47656 14.4192 1.47656 16.7611C1.47656 19.103 4.75847 19.7088 8.64704 19.7088C12.5147 19.7088 15.8166 19.123 15.8166 16.7821C15.8166 14.4411 12.5356 13.8345 8.64704 13.8345Z"
                                stroke="#5A5C5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.6509 10.4942C11.189 10.4942 13.2461 8.43607 13.2461 5.89797C13.2461 3.35988 11.189 1.30273 8.6509 1.30273C6.11281 1.30273 4.05471 3.35988 4.05471 5.89797C4.04614 8.4275 6.08995 10.4856 8.61852 10.4942H8.6509Z"
                                stroke="#5A5C5F" stroke-width="1.42857" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <input name="name" placeholder="Name" type="text" class="@error('name') is-invalid @enderror">
                </div> @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <div class="input-container">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                            fill="none">
                            <path
                                d="M3.66406 8.48828L11.5547 13.7487C12.2265 14.1965 13.1017 14.1965 13.7735 13.7487L21.6641 8.48828M5.66406 19.4883H19.6641C20.7686 19.4883 21.6641 18.5929 21.6641 17.4883V7.48828C21.6641 6.38371 20.7686 5.48828 19.6641 5.48828H5.66406C4.55949 5.48828 3.66406 6.38371 3.66406 7.48828V17.4883C3.66406 18.5929 4.55949 19.4883 5.66406 19.4883Z"
                                stroke="#5A5C5F" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <input name="email" placeholder="Email Address" type="email"
                        class="@error('email') is-invalid @enderror">
                </div>
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <div class="input-container">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="21" viewBox="0 0 17 21"
                            fill="none">
                            <path
                                d="M13.0898 7.93608V5.78908C13.0898 3.27608 11.0518 1.23808 8.53875 1.23808C6.02575 1.22708 3.97975 3.25508 3.96875 5.76908V5.78908V7.93608"
                                stroke="#5A5C5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.3471 19.738H4.70606C2.61206 19.738 0.914062 18.041 0.914062 15.946V11.657C0.914062 9.56199 2.61206 7.86499 4.70606 7.86499H12.3471C14.4411 7.86499 16.1391 9.56199 16.1391 11.657V15.946C16.1391 18.041 14.4411 19.738 12.3471 19.738Z"
                                stroke="#5A5C5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.52344 12.6909V14.9119" stroke="#5A5C5F" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <input name="password" placeholder="Password" type="password"
                        class="@error('password') is-invalid @enderror">
                </div>
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <div class="input-container">
                    <div class="icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="21" viewBox="0 0 17 21"
                            fill="none">
                            <path
                                d="M13.0898 7.93608V5.78908C13.0898 3.27608 11.0518 1.23808 8.53875 1.23808C6.02575 1.22708 3.97975 3.25508 3.96875 5.76908V5.78908V7.93608"
                                stroke="#5A5C5F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12.3471 19.738H4.70606C2.61206 19.738 0.914062 18.041 0.914062 15.946V11.657C0.914062 9.56199 2.61206 7.86499 4.70606 7.86499H12.3471C14.4411 7.86499 16.1391 9.56199 16.1391 11.657V15.946C16.1391 18.041 14.4411 19.738 12.3471 19.738Z"
                                stroke="#5A5C5F" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8.52344 12.6909V14.9119" stroke="#5A5C5F" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <input name="password_confirmation" placeholder="Confirm Password" type="password"
                        class="@error('password_confirmation') is-invalid @enderror">
                </div>
                @error('password_confirmation')
                    <div class="error-message">{{ $message }}</div>
                @enderror
                <div>
                    <button class="submit-btn" type="submit">Submit</button>
                </div>
                <div class="checkbox-container">
                    <input class="form-check-input" type="checkbox" name="" id="">
                    <label for="">
                        By joining NCLEX PREP WORLD you consent to our <a href="">terms & conditions</a>
                    </label>
                </div>
            </form>
            <div class="navigate-link">
                Already have an account? <a href="{{ route('login') }}">Log In</a>
            </div>
        </div>
    </div>
</body>

</html>
