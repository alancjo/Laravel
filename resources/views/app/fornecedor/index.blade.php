<h4>Fornecedor</h4>

@php 
    /*
        if(empty($variavel)) {} // retornar true se a variável estiver vazia
        - ''
        - 0
        - 0.0
        - '0'
        - null
        - false
        - array()
        - $var
    */
@endphp

@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }} 
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedore['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }})
        <hr>
    @empty
        Não existem fornecedores cadastrador
    @endforelse

@endisset
