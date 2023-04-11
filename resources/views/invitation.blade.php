<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/invitation.css" rel="stylesheet" type="text/css">
        <title>Invitation</title>
    </head>
    <body>
        
        <div class="container">

            
            <div>
                <img src="/resources/back card.svg" alt="" class="back-card page-centered">
                <div class="card-inside">
                    <h1>Le Club des Nuls</h1>

                    <p>You have been invited to:</p>

                    <h2>{{$eventName}}</h2>

                    <p>Date: {{$date}}</p>
                    <p>Where: Rue du Jura, 9, Crissier</p>
                    <p>{{$description}}</p>
                </div>
                <img src="/resources/front card.svg" alt="" class="front-card page-centered">        
                <div class="cache page-centered"></div>
            </div>
    
        </div>

    </body>
</html>
