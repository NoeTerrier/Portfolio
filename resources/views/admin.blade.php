@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/admin.css">
    <title>Noé Terrier - Admin</title>
@endsection

@section('title')
    <div class="title">
        <i class="back-button"><a href="/portfolio"></a></i>
        <h1>//Admin</h1>
        <form action="{{route('logout')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <button type="submit"> Logout </button>
        </form>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="alert">
            <h4>
                @if(session('success'))
                    {{session('success')}}
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                @endif
            </h4>
        </div>
        <div class = "form-container">

            {{-- UPLOAD IMAGE --}}
            <div class="action-div" id="image-create">
                <form action="{{route("imageData.store")}}" method="POST" enctype="multipart/form-data">
                    <h4>Ajouter une image</h4>
                    @csrf
                    <label for="file-input">Image</label>
                    <label class="custom-file-input">
                        <input type="file" name="image">
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
            <div class="action-div" id="zone-edit">
                <h4>Supprimer une zone</h4>
                @foreach ($zones as $zone)
                <div class="entry-line">
                    <form action="{{route("zone.update", $zone)}}" method="POST">
                        @csrf
                        <input type="text" name="label" value="{{$zone->label}}">
                    </form>
                    <form action="{{route("zone.destroy", $zone)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit"> Delete </button>
                    </form>
                </div>
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

        <div class="invitation">
            <div class="action-div" id="invitation-create">
                <form action="{{route("invitation.store")}}" method="POST" enctype="multipart/form-data">
                    <h4>Créer un événement</h4>

                    @php
                        $eventName = is_null($invitation) ? "Nothing" : $invitation->eventName;
                        $date = is_null($invitation) ? "Never" : $invitation->date;
                        $description = is_null($invitation) ? "You're not invited because nothing is planned. Or maybe because we don't like you." : $invitation->description;
                    @endphp

                    @csrf
                    <label for="eventName-input">Event name</label>
                    <input type="text" name="eventName" value="{{ $eventName }}" id="eventName-input"> <br><br>
                    <label for="eventDate">Date</label>
                    <input type="date" name="date" id="eventDate-input">
                    <label for="eventDescription-input">Description</label>
                    <textarea name="description" cols="30" rows="8" id="eventDescription-input">{{ $description }}</textarea>
                    
                    <button type="submit"> Upload </button>
                </form>
            </div>
        </div>

    </div>

@endsection