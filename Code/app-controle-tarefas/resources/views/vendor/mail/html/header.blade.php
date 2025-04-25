@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}:8000/img/logo.png" style="display: inline-block;">
@if (trim($slot) === 'Controle de Tarefas')
<img src="http://localhost:8000/img/logo.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
