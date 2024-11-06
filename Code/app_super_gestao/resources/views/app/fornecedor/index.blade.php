<h3>Fornecedor</h3>

@php
    // if(!<condição>) { // enquanto executa se o retorno for true

    // }
@endphp
{{-- @dd($fornecedores) --}}
{{-- @unless executa se o retorno for false --}}

Fornecedores: {{ $fornecedores[0]['nome'] }}
</br>
Status: {{ $fornecedores[0]['status'] }}
</br>
@if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif
<br/>
@unless($fornecedores[0]['status'] == 'S') <!-- se oretorno da condição fpr false -->
    Fornecedor inativo
@endunless
<br/>