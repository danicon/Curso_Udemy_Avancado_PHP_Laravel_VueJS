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

    @forelse($fornecedores as $indice => $fornecedor)
        {{-- @dd($loop) --}}

        Iteração atual: {{ $loop->iteration }}
        </br>
        Fornecedores: {{ $fornecedor['nome'] }}
        </br>
        Status: {{ $fornecedor['status'] }}
        </br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        </br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        </br>
        @if($loop->first)
            Primeira iteração do Loop

            </br>
            Total de registro: {{ $loop->count }}
        @endif
        @if($loop->last)
            Última iteração do Loop
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
     
    
@endisset
