<form action="{{ route('users.store') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">{{ trans('register.username') }}</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="username-help" value="{{ old('name') }}">
        <small id="username-help" class="sr-only">{{ trans('register.username_help') }}</small>
    </div>
    <div class="form-group">
        <label for="email">{{ trans('register.with_space.email') }}</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="email-help" value="{{ old('email') }}">
        @if(App::getLocale() == 'en')
            <small id="email-help" class="form-text text-muted">{{ trans('register.email_help') }}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="password">{{ trans('register.with_space.password') }}</label>
        <input type="password" name="password" class="form-control" id="password" aria-describedby="password-help">
        <small id="password-help" class="sr-only">{{ trans('register.password_help') }}}</small>
    </div>
    <div class="form-group">
        <label for="confirm-password">{{ trans('register.confirm_password') }}</label>
        <input type="password" name="password_confirmation" class="form-control" id="confirm-password" aria-describedby="confirm-password-help">
        <small id="confirm-password-help" class="sr-only">{{ trans('register.confirm_password_help') }}</small>
    </div>
    <button type="submit" class="btn btn-primary">{{ trans('register.submit') }}</button>
</form>