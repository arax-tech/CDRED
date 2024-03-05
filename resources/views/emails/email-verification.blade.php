@component('mail::message')
# Verification

Please verify your account by clicking on the "Verify" button


@component('mail::button', ['url' => $details['verify_url']])
Verify
@endcomponent

Thanks & Regards: <br>
<b>CDRED</b> Council for Deductive Research and Education Development <br>
33/234 Market Street Harrisburg, PA 17126 USA | support@cdred.org <br>
All rights are reserved <b>CDRED</b> | www.cdred.org
@endcomponent
