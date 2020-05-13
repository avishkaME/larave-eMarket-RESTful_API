Hello{{ $user->name}}
    email change detected, please verify your new email using this link:
{{route('verify', $user->verification_token)}}