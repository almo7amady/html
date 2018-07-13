@component('mail::message')
# Welcome To Case Root {{ '@' . $username }}

We are so excited about you joining Case Root. Here are a couple of tips to help you get started:
<br>

- **Customize:** You can [customize](https://www.caseroot.com/{{ '@' . $username }}#preferences) your account's **color**, **font** and your very own home **feed** to make sure you always get what's best for you.
- **Find Roots:** Case Root is nothing but a collection of awesome Roots (communities) with awesome users like you. Whenever you felt like finding new ones, just [go here](https://www.caseroot.com/discover-roots).
- **Need Help?** If you are wondering about a Case Root's feature that is confusing to you, just ask the community for [help](https://www.caseroot.com/c/Community). They'd be happy to help.

We have a warm community waiting to welcome you. How about saying hello to them?

@component('mail::button', ['url' => 'https://www.caseroot.com/c/Social'])
Say Hello
@endcomponent


@component('mail::panel')
Should you ever encounter problems with your account or forget your password, we will contact you at this address.
@endcomponent


Regards,<br>
The Case Root Team
@endcomponent