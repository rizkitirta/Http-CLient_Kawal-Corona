<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Covid-19</title>
</head>

<body>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-4"></div>
            <div class="col">

                <div class="col">
                    <form action="{{ url('/') }}" method="GET">
                        <div class="form-group">
                            <select class="form-control select2" name="country" style="width: 25rem;">
                                <option selected disabled>Pilih Negara</option>
                                @foreach ($country as $result)
                                    <option value="{{ $result }}">{{ $result }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-1">
                            <button class="btn btn-sm btn-primary " style="width: 25rem;">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="card mt-2" style="width: 25rem;">
                    <img src="https://images.unsplash.com/photo-1585858229735-cd08d8cb510d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Covid-19</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">Negara : {{ $list_data['country'] }}</li>
                        <li class="list-group-item text-center text-bold">Terjangkit :
                            {{ number_format($list_data['confirmed']) }} Orang</li>
                    </ul>
                    <div class="card-body">
                        <table class="table table-success table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Meninggal</th>
                                    <th>Sembuh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-danger">{{ $list_data['deaths'] }}</td>
                                    <td class="text-success">{{ $list_data['recovered'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <div>{{ $list_data['lastUpdate'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- // In your Javascript (external .js resource or --}}

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });

    </script>
</body>

</html>
