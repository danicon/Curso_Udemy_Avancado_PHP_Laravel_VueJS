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
    Fornecedores: {{ $fornecedores[1]['nome'] }}
    </br>
    Status: {{ $fornecedores[1]['status'] }}
    </br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? '' }}
    {{-- 
        $variavel testada não estiver definida (isset)
        ou
        $variavel testada possui o valor null
    --}}
@endisset
