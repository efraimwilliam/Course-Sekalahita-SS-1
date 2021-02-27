<html>
    <body>
        @if($mahasiswa)
            @for ($i=0;$i< count($mahasiswa);$i++)
                <p>{{$mahasiswa[$i]->nama}}</p>
                
            @endfor
                    <h3>Ada datanya, tapi pake for biasa</h3>
            
            @else
                <h3>Data Kosong</h3>

            @endif

        @foreach($mahasiswa as $data)
            <p>{{$data->nama}}</p>

        @endforeach
            <h3>ini for each</h3>
    </body>
</html>