<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $c)
                <tr>
                    <td>{{$c->name}}</td>
                    <td>{{$c->email}}</td>
                    <td>
                        @if($c->gender=='m')
                            Male
                        @elseif($c->gender=='f')
                            Female
                        @else
                            Other    
                        @endif
                    </td>
                    <td>{{$c->dob}}</td>
                    <td>{{$c->state}}</td>
                    <td>{{$c->country}}</td>
                    <td>
                        @if ($c->status=='1')
                            Active
                        @else
                            Inactive    
                        @endif    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
