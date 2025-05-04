<h2>Lista de tarefas</h2>

<table> 
<thead> 
    <tr> 
        <th>ID</th> 
        <th>Tarefa</th> 
        <th>Data limite Conclusão</th> 
    </tr>
</thead>
<tbody>
    @foreach ($tarefas as $key => $tarefa)
        <tr>
            <td>{{ $tarefa->id }}
            <td>{{ $tarefa->tarefa }}
            <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}
        </tr>
    @endforeach
</tbody>
</table>
