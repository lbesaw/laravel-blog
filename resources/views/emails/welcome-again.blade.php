@component('mail::message')
# Introduction

Thanks for registering!

@component('mail::button', ['url' => 'http://www.liambesaw.com'])
View my webpage!
@endcomponent

@component('mail::panel', ['url' => ''])
Some ispirational quote to go here.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
