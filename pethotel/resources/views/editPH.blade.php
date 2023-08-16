<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Edit Pet Hotel Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
 
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Pet Hotel</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('pethotels.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('pethotels.update',$pethotel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH Name:</strong>
                        <input type="text" name="name" value="{{ $pethotel->name }}" class="form-control" placeholder="PH Name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH Description:</strong>
                        <input type="text" name="description" value="{{ $pethotel->description }}" class="form-control" placeholder="PH Description">
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH City:</strong>
                        <input type="text" name="city" value="{{ $pethotel->city }}" class="form-control" placeholder="PH City">
                        @error('city')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH Address:</strong>
                        <input type="text" name="address" value="{{ $pethotel->address }}" class="form-control" placeholder="PH Address">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH Phones:</strong>
                        <input type="text" name="phones" value="{{ $pethotel->phones }}" class="form-control" placeholder="PH Phones">
                        @error('phones')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH Email:</strong>
                        <input type="email" name="email" value="{{ $pethotel->email }}" class="form-control" placeholder="PH Email">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH GPS coords:</strong>
                        <input type="text" name="coordsGPS" value="{{ $pethotel->coordsGPS }}" class="form-control" placeholder="PH GPS coords">
                        @error('coordsGPS')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH Site URL:</strong>
                        <input type="text" name="siteURL" value="{{ $pethotel->siteURL }}" class="form-control" placeholder="PH Site URL">
                        @error('siteURL')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH Rating:</strong>
                        <input type="number" name="rating" value="{{ $pethotel->rating }}" class="form-control" placeholder="PH Rating">
                        @error('rating')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div> -->
                @$rating = 0.0;
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH for Dogs:</strong>
                        <input type="number" name="dog" value="{{ $pethotel->dog }}" class="form-control" placeholder="PH for Dogs">
                        @error('dog')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH for Cats:</strong>
                        <input type="number" name="cat" value="{{ $pethotel->cat }}" class="form-control" placeholder="PH for Cats">
                        @error('cat')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH Price:</strong>
                        <input type="number" name="price" value="{{ $pethotel->price }}" class="form-control" placeholder="PH Price">
                        @error('price')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH Free Dates:</strong>
                        <input type="text" name="freeDates" value="{{ $pethotel->freeDates }}" class="form-control" placeholder="PH Free Dates">
                        @error('freeDates')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH w/ Feeding:</strong>
                        <input type="number" name="feeding" value="{{ $pethotel->feeding }}" class="form-control" placeholder="PH w/ Feeding">
                        @error('feeding')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH w/ Walks:</strong>
                        <input type="number" name="walks" value="{{ $pethotel->walks }}" class="form-control" placeholder="PH w/ Walks">
                        @error('walks')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH w/ Bathing:</strong>
                        <input type="number" name="bathing" value="{{ $pethotel->bathing }}" class="form-control" placeholder="PH w/ Bathing">
                        @error('bathing')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH w/ Nail Cutting:</strong>
                        <input type="number" name="nailCutting" value="{{ $pethotel->nailCutting }}" class="form-control" placeholder="PH w/ Nail Cutting">
                        @error('nailCutting')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>PH w/ Transport:</strong>
                        <input type="number" name="transportation" value="{{ $pethotel->transportation }}" class="form-control" placeholder="PH w/ Transport">
                        @error('transportation')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                @$created_at = new DateTime('now', new DateTimeZone('Europe/Sofia'));
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>
 
</html>