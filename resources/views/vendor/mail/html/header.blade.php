@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('images/logo/ikasmak-logo.png') }}" class="logo" alt="IKASMAK Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
