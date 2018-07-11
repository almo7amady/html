@component('mail::message')

# Hey {{ '@' . $username }},

Thank you for registering for an account on Case Root. Before we get started, we just need to confirm that this is you. Click on below button to verify your email address:

@component('mail::button', ['url' => config('app.url') . '/email/verify?token=' . $token])
Verify Email
@endcomponent

@component('mail::panel')
    ask [community](https://www.caseroot.com/c/Community), or hit us up on Twitter [@elmo7amady](https://twitter.com/elmo7amady).
    Want to give us feedback? Let us know what you think on our [feedback page](https://www.caseroot.com?feedback=1).
@endcomponent

@component('mail::subcopy')
If you’re having trouble clicking the "Verify Email" button, copy and paste the URL below into your web browser:

{{ config('app.url') . '/email/verify?token=' . $token }}
@endcomponent

@endcomponent
