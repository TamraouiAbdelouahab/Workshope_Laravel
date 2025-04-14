<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jardin</title>
</head>
<body>
    <form action="{{route('jardins.store')}}" method="POST">
        @csrf
        @method('post')

        <input type="text" name="name" placeholder="name">
        @error('name')
        {{$message}}            
        @enderror
        <input type="text" name="espace" placeholder="espace">
        @error('espace')
        {{$message}}            
        @enderror
        <select name="jardinier_id" id="">
            <option value="">choisis un jardinier</option>
            @foreach($jardiniers as $jardinier)
                <option value="{{$jardinier->id}}">{{$jardinier->name}}</option>
            @endforeach
        </select>
        @error('jardinier_id')
        {{$message}}            
        @enderror
        <button type="submit">creé</button>
    </form>
</body>
</html>