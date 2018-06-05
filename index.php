
<?php
$API_key    = 'AIzaSyAcb0dNv0gWOMFehEYs4bH9ou5T1yKMbpo';  // se optiene de Google 
$channelID  = 'UCvIjE29XXbhizoVGrkrgSMQ';        // Aun Necesito saber donde consultarla mendiante  gsuite
$maxResults = 1;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

/// Obtiene todos los elementos de la consulta 


foreach($videoList->items as $item){     // mediante  el bucle resive paramentros
    
   // los envia mediante un string 
        echo '<div class="youtube-video">
                <iframe width="480" height="350" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                <h5>'. $item->snippet->title .'</h5>   <!-- Accede al Json snippet data title   Coloca las medidas  -->
            </div>';

             

             

}
