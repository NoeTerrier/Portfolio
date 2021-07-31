@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/admin.css">
    <title>Noé Terrier - Admin</title>
@endsection

@section('title')
    <div class="title">
        <i class="back-button"><a href="/portfolio/admin"></a></i>
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

        <div class = "edit-div">
            {{$image->name}}
            <img src="{{url($image->url)}}" alt="{{$image->name}}">



            <form action="{{route("imageData.update", $image)}}" method="POST" enctype="multipart/form-data">
                <h4>Modifier l'image</h4>
                @csrf
                <label for="file-input">Image</label>
                <label class="custom-file-input">
                    <input type="file" name="image"/>
                    <i class="fa fa-cloud-upload"></i>
                </label>
                <label for="name-input">Name</label>
                <input type="text" name="name" value="{{$image->name}}"" id="name-input"> <br><br>
                <label for="description-input">Description</label>
                <textarea name="description" cols="30" rows="8" id="description-input">{{$image->description}}</textarea>
                
                <label for="zones-select">Zones</label>
                <select multiple name="zones[]" id="zones-select">
                    @foreach ($zones as $zone)
                        <option value="{{$zone->id}}" 
                        @if ($image->zones->contains($zone))
                            selected
                        @endif>{{$zone->label}}</option>
                    @endforeach
                </select>
    
                <button type="submit"> Update </button>
            </form>



            <form action="{{route("imageData.destroy", $image)}}" method="POST" class="entry-line">
                @method('DELETE')
                @csrf
                <button type="submit"> Delete </button>
            </form>
        </div>

    </div>
@endsection