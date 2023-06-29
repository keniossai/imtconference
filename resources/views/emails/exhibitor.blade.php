<x-mail::message>
# Hello!

This is to notify you that {{ $exhibitor->company_name }} has filled and submitted the exhibition form for 2023 NBA AGC  and have listed the following personnel for the exhibition:

<x-mail::table>
|  S/N | Name |Email and Phone No  |Designation  |
| --------------------- | :---------------- | :---------------------- | :----------------- |
@foreach($exhibitor->exhibitonPersonnels as $personnel)
| {{ $loop->iteration }}| {{ $personnel->company_personnel_name }}  | {{ $personnel->company_personnel_email }} | {{ $personnel->company_personnel_designation }} |
@endforeach

</x-mail::table>

You can also reach out to  {{ $exhibitor->company_name }} through the contact person for clarifications.
<x-mail::panel>
{{ $exhibitor->contact_person_name }} <br>
<i><small>{{ $exhibitor->contact_person_position }}</small></i><br>
<i> <small>{{ $exhibitor->contact_person_phone }}</small></i><br>
<i> <small>{{ $exhibitor->company_address }}</small></i><br>
<i><small>Website: <a target="_blank" href="{{$exhibitor->contact_website }}">{{ $exhibitor->contact_website }}</a></small></i> <br>
</x-mail::panel>

Kindly review the document attached to validate this registration.

Thanks,<br>
NBA Conference 2023
</x-mail::message>
