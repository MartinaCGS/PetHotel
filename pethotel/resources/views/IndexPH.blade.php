<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pat Hotels</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Pat Hotels</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('pethotels.create') }}"> Create Pet Hotel</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>PH.No</th>
                    <th>PH Name</th>
                    <th>PH Description</th>
                    <th>PH City</th>
                    <th>PH Address</th>
                    <th>PH Phones</th>
                    <th>PH Email</th>
                    <th>PH GPS coords</th>
                    <th>PH Site URL</th>
                    <th>PH Rating</th>
                    <th>PH for Dogs</th>
                    <th>PH for Cats</th>
                    <th>PH Price</th>
                    <th>PH Free Dates</th>
                    <th>PH w/ Feeding</th>
                    <th>PH w/ Walks</th>
                    <th>PH w/ Bathing</th>
                    <th>PH w/ Nail Cutting</th>
                    <th>PH w/ Transport</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pethotels as $pethotel)
                    <tr>
                        <td>{{ $pethotel->id }}</td>
                        <td>{{ $pethotel->name }}</td>
                        <td>{{ $pethotel->description }}</td>
                        <td>{{ $pethotel->city }}</td>
                        <td>{{ $pethotel->address }}</td>
                        <td>{{ $pethotel->phones }}</td>
                        <td>{{ $pethotel->email }}</td>
                        <td>
                        <a href="http://maps.google.com/maps?q={{ $pethotel->coordsGPS }}" target="_">View on map</a>
                        </td>
                        <td>{{ $pethotel->siteURL }}</td>
                        <td>{{ $pethotel->rating }}</td>
                        <td>
                            @if ($pethotel->dog === 1) 
                            Yes
                            @else
                            No
                            @endif
                        </td>
                        <td>{{ $pethotel->cat }}</td>
                        <td>{{ $pethotel->price }}</td>
                        <td>{{ $pethotel->freeDates }}</td>
                        <td>{{ $pethotel->feeding }}</td>
                        <td>{{ $pethotel->walks }}</td>
                        <td>{{ $pethotel->bathing }}</td>
                        <td>{{ $pethotel->nailCutting }}</td>
                        <td>{{ $pethotel->transportation }}</td>
                        <td>
                            <form action="{{ route('pethotels.destroy',$pethotel->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('pethotels.edit',$pethotel->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $pethotels->links() !!}
    </div>
</body>
</html>