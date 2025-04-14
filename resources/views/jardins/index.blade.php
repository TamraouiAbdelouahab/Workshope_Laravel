<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jardin</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/lib.min.js" integrity="sha512-iZkSskGK6ztK3mG293FyahxuEzQjj/qpKBnvMCoXD42sBLOd3ljqCt4nZWbS2YYAEQiNMex832AhAU4nFILWoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script> --}}
</head>
<body>
    <h1>Jardins</h1>

    <form action="{{route('jardins.filter')}}" method="GET">
        <select name="query" id="">
            @foreach($jardiniers as $jardinier)
            <option value="{{$jardinier->id}}">{{$jardinier->name}}</option>
            @endforeach
        </select>
        <button type="submit">filtrer</button>
    </form>

    <button onclick="window.location.href='{{route('jardins.create')}}'">Nouveau jardin</button>
    <table with="900%">
        <th>
            <td>name</td>
            <td>espace</td>
            <td>jardinier</td>
            <td>actions</td>
        </th>
        <tbody>
            @foreach($jardins as $jardin)
                <tr>
                    <td>{{$jardin->name}}</td>
                    <td>{{$jardin->espace}}</td>
                    <td>{{$jardin->jardinier->name}}</td>
                    <td>
                        <button onclick="window.location.href='{{route('jardins.show',$jardin->id)}}'">voir</button>
                        <button onclick="window.location.href='{{route('jardins.edit',$jardin->id)}}'">modifier</button>
                        <form action="{{route('jardins.destroy',$jardin->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type='submit'>suprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="font-size : 15px;">
        {{$jardins->links()}}
    </div>
</body>
</html>