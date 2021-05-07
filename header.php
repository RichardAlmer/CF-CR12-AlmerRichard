<?php
function build_query_string(array $params) {
    $query_string = http_build_query($params);
    return $query_string;
}
function curl_get($url) {
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    curl_close($client);
    return $response;
}
 
$url = 'http://api.serri.codefactory.live/random/';
$result = curl_get($url);
$jokeObj = json_decode($result);
$joke = $jokeObj->joke;

?>
<style>
    #header{
        background-color: #1100AB;
        height: 230px;
        color: white;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    @media screen and (max-width: 700px) {
        #card{
            display: none;
        }
        #header{
            justify-content: center;
        }
    }
</style>
<div id="header">
    <h1>Mount Everest - Travels</h1>
    <div>
        <div id='card' class='card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>
            <div class='card-body'>
                <p id='joke' class='card-text'><?php echo $joke ?></p>
                <button id="button" class="btn btn-warning btn-sm">New Joke</button>
            </div>
        </div>
    </div>
    
</div>
<script>
    document.getElementById("button").addEventListener ("click", getJoke);
    
    function getJoke() {
        var request = new XMLHttpRequest();
        request.open("GET", "api.php", true);
        request.onload = function() {
            // console.log(request.responseText);
            document.getElementById("joke").innerHTML = request.responseText;
        }
        request.send();
    }
</script>