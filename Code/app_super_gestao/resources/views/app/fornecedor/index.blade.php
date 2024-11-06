<h3>Fornecedor</h3>

@php
    // if() {

    // } elseif() {
 
    // } else {

    // }
@endphp

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns forncedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios forncedores cadastrados</h3>
@else
    <h3>Ainda não existem forncedores cadastrados</h3>
@endif
