@extends('layouts.app')

@section('content')
<div class="container" id="report">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to FRSC Admin ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table  >
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>N.O.K</th>
                        <th>N.O.K Phone</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

        @foreach($driver as $data)
        
            <tr>
                <td>{{ $data->id}}</td>
                <td>{{ $data->name}}</td>
                <td>{{ $data->gender}}</td>
                <td>{{ $data->dateofbirth}}</td>
                <td>{{ $data->phone}}</td>
                <td>{{ $data->email}}</td>
                <td>{{ $data->address}}</td>
                <td>{{ $data->nextofkin}}</td>
                <td>{{ $data->nextofkinphone}}</td>
                <td><a href="{{url('editdriver/'.$data->id)}}" class="btn btn-success">Edit</a></td>
                <td><a href={{"delete/".$data['id']}} class="btn btn-danger">Delete</a></td>
                
            </tr>
        @endforeach
</table>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" id="download"> Generate Pdf</button>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
                <script>
                    window.onload = function(){
                        document.getElementById("download").addEventListener("click", ()=>{
                            const report= this.document.getElementById("report");
                            console.log(report);
                            console.log(window);
                            var opt = {
                                margin: 1,
                                filename: 'myfile.pdf',
                                image: { type: 'jpeg', quality: 0.98 },
                                html2canvas: { scale: 2 },
                                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
                            };
                        html2pdf().from(report).set(opt).save();
                        });
                    }
                </script>
</div>


@endsection
