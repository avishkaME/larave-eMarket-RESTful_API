Hello{{ $user->name}}
    Welcome to eMart, please verify your account using this link:
    {{route('verify', $user->verification_token)}}