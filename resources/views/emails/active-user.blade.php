@component('mail::message')
    #فعال سازی ایمیل

@component('mail::button' , ['url' => route('activation.account' , $activationCode)])
        فعال سازی
@endcomponent

@endcomponent
