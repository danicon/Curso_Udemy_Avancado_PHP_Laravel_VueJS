<h3>Fornecedor</h3>

@php
    // if(empty($variavel) { // retornar true se a variavel estiver vazia
    // - ''
    // - 0
    // - 0.0
    // - '0'
    // - null
    // - false
    // - array()
    // - $var
    // }
@endphp
@isset($fornecedores)
    Fornecedores: {{ $fornecedores[0]['nome'] }}
    </br>
    Status: {{ $fornecedores[0]['status'] }}
    </br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? '' }}
    </br>
    Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }}) {{ $fornecedores[0]['telefone'] ?? '' }}
    @switch($fornecedores[0]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Juiz de Fora - MG
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não identificado
    @endswitch
@endisset
