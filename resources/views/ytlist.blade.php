<h1>Videos : </h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Video Name</td>
        <td>Video URL</td>
        <td>Video Description</td>
    </tr>
    @foreach($vids as $videoz)
    <tr>
        <td>{{$videoz['id']}}</td>
        <td>{{$videoz['Video Name']}}</td>
        <td>{{$videoz['Video URL']}}</td>
        <td>{{$videoz['Video Description']}}</td>
    </tr>
    @endforeach
</table>
        