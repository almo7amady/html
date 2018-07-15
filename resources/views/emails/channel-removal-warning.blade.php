@component('mail::message')

# Dear {{ '@' . $user->username }}, moderator of [#{{ $channel->name }}](https://www.caseroot.com/c/{{ $channel->name }}?ref=email)

During the beta phase, to keep the community clean and active, we are deleting all the inactive roots that haven't had any activities in the last 60 days. Your **#{{ $channel->name }}** root hasn't had any activities in **{{ optional($channel->submissions()->orderBy('created_at', 'desc')->first())->created_at->diffInDays() }} days**. Thus, In case you intend to keep your root alive, please start posting to it. Otherwise, just ignore this email.

We'll begin deleting inactive roots a week after the date of sending this email.

@component('mail::button', ['url' => config('app.url') . '/c/' . $channel->name . '?ref=email'])
    Go to #{{ $channel->name }}
@endcomponent

Thank you for being a Case Root moderator!<br>
The Case Root Team

@component('mail::subcopy')
    Need help? ask [community](https://www.caseroot.com/c/Community), or hit us up on Twitter [@case_root](https://twitter.com/case_root).
    Want to give us feedback? Let us know what you think on our [feedback page](https://www.caseroot.com?feedback=1).
@endcomponent

@endcomponent