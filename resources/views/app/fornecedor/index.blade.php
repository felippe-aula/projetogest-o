<h1>fornecedor</h1>

{{--@dd($fornecedores)--}}




{{--@if(count ($fornecedores)>0 && count--)}}
{{--asasasa--}}
{{--@if(count($fornecedores)>0&& count($fornecedores)<10)
    <h1>Existem alguns fornecedores cadastrados</h1>
    @elseif(count($fornecedores)>10)
        <h1>Existem Varios fornecedores cadastrados</h1>
    @else 
    <h1>Não existem fornecedores cadastrado
    </h1>

    @endif--}}

{{--
    @if(!($fornecedores[0]['status']=='S'))
    <h1>fornecedor inativo</h1>
    
        
    @endif--}}




{{--   @unless($fornecedores[0]['status']=='S')
    <h1>fornecedor inativo</h1>  <!-- retorna quando a condição é false -->
        
    @endunless--}}

@isset($fornecedores) <!-- retorna quando a condição é true, ou seja se estiver definida -->
@foreach ($fornecedores as $indice =>$fornecedor)
    

    Fornecedor:{{$fornecedor['Nome'] }}
    <br>
    Status:{{$fornecedor['status']}}
    <br>
    CNPJ: {{$fornecedor['cnpj']?? 'CNPJ NÃO IDENTIFICADO , error 267/2021'}}
    <!--$Varival testada não estiver definida (isset)
    ou $variavel testada possuir valor null--> 
    <hr>
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{$fornecedores[1]['cnpj']}}
    @empty($fornecedores[1]['cnpj']))
        Não há informações a serem mostradas
        @endempty
        @endisset  
        @endforeach  
    @endisset
{{--
    @@forelse ($collection as $item)
        
    @empty
        
    @endforelse-- serve para desviar o fluxo caso algo de errado}}



{{--empty Retornar true se a variavel estiver vazia , ou seja quaisquer valor que seja zero,vazil,null ou variavel vazia--}}