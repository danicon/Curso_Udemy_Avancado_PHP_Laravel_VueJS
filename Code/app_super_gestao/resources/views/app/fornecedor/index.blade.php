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

    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedores: {{ $fornecedores[$i]['nome'] }}
        </br>
        Status: {{ $fornecedores[$i]['status'] }}
        </br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        </br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>
    @endfor
    
@endisset
