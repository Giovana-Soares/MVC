@extends('template/default') 
@section('content') 
<div>
    <section class= "title">
        <h1>Categoria</h1>
    </section>

    <table>
            <tr> 
                <th>id:</th>
                <th>Nome:    </th>
            </tr>
    @foreach($categoria as $c)
       
            <tr>
                <td> {{$c-> idCategoria}} </td>
                <td> {{$c-> nome}} </td>
            </tr>
        </table>

    @endforeach
    
</div>
@endsection