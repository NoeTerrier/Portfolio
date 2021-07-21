@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/admin.css">
    <title>Noé Terrier - Admin</title>
@endsection

@section('title')
    <div class="title">
        <i class="back-button"><a href="/portfolio"></a></i>
        <h1>//Admin</h1>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="alert">
            @if(session('success'))
                <h4>{{session('success')}}</h4>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <h4>{{ $error }}</h4></li>
                @endforeach
            @endif
        </div>
        <div class = "form-container">

            {{-- UPLOAD IMAGE --}}
            <div class="action-div" id="image-create">
                <form action="{{route("imageData.store")}}" method="POST" enctype="multipart/form-data">
                    <h4>Ajouter une image</h4>
                    @csrf
                    <label for="file-input">Image</label>
                    <label class="custom-file-input">
                        <input type="file" name="image"/>
                        <i class="fa fa-cloud-upload"></i>
                    </label>
                    <label for="name-input">Name</label>
                    <input type="text" name="name" value="new image" id="name-input"> <br><br>
                    <label for="description-input">Description</label>
                    <textarea name="description" cols="30" rows="8" id="description-input"></textarea>
                    
                    <label for="zones-select">Zones</label>
                    <select multiple name="zones[]" id="zones-select">
                        @foreach ($zones as $zone)
                            <option value="{{$zone->id}}">{{$zone->label}}</option>
                        @endforeach
                    </select>
    
                    <button type="submit"> Upload </button>
                </form>
            </div>


            {{-- POST ZONE --}}
            <div class="action-div" id="zone-create">
                <form action="{{route("zone.store")}}" method="POST" enctype="multipart/form-data">
                    <h4>Ajouter une zone</h4>
                    @csrf
                    <label for="name-input">Label</label>
                    <input type="text" name="label" value="new zone" id="name-input"> <br><br>
                    <button type="submit"> Create </button>
                </form>
            </div>


            {{-- DELETE ZONE--}}
            <div class="action-div" id="zone-delete">
                <h4>Supprimer une zone</h4>
                @foreach ($zones as $zone)
                <form action="{{route("zone.destroy", $zone)}}" method="POST" class="entry-line">
                    @method('DELETE')
                    @csrf
                    <p>{{$zone->label}}</p>
                    <button type="submit"> Delete </button>
                </form>
                @endforeach
            </div>

            {{-- UPDATE DELETE IMAGE--}}
            <div class="action-div" id="image-edit">
                <h4>Images</h4>
                <div class="image-tiles">
                    @foreach ($images as $image)
                    <a href="{{route("imageData.edit", $image)}}">
                        <div class="image-tile">
                            {{$image->name}}
                            <img src="{{url($image->url)}}" alt="{{$image->name}}">
                        </div>
                    </a>
                    @endforeach
                </dir>
            </div>
        </div>

    </div>
@endsection