<!-- Allow access to the  database-->
<?php
    include_once 'include/dbh.inc.php'; 
?>
 
<!DOCTYPE html>
 
<html>
    <head>
        <!-- Website tab title-->
        <title>PokeDex</title>
        <!-- Website font-->
        <meta charset="UTF-8">
        <!-- Website access to css fonts-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2 class="title"></h2>
        <div id="titlename">
        <img src="pokemonImages/0.png">
        </div>
        <div id="selection">
            <form method="post" action="#" onsubmit= "alert('no checking out'); return false;">
                <fieldset>
                    <legend>Types</legend>
                    <input type="checkbox" name="types" id="normal" onchange="updateImage()"> Normal <br>
                    <input type="checkbox" name="types" id="fire" onchange="updateImage()"> Fire <br>
                    <input type="checkbox" name="types" id="fighting" onchange="updateImage()"> Fighting <br>
                    <input type="checkbox" name="types" id="water" onchange="updateImage()"> Water <br>
                    <input type="checkbox" name="types" id="flying" onchange="updateImage()"> Flying <br>
                    <input type="checkbox" name="types" id="grass" onchange="updateImage()"> Grass <br>
                    <input type="checkbox" name="types" id="poison" onchange="updateImage()"> Poison <br>
                    <input type="checkbox" name="types" id="electric" onchange="updateImage()"> Electric <br>
                    <input type="checkbox" name="types" id="ground" onchange="updateImage()"> Ground <br>
                    <input type="checkbox" name="types" id="psychic" onchange="updateImage()"> Psychic <br>
                    <input type="checkbox" name="types" id="rock" onchange="updateImage()"> Rock <br>
                    <input type="checkbox" name="types" id="ice" onchange="updateImage()"> Ice <br>
                    <input type="checkbox" name="types" id="bug" onchange="updateImage()"> Bug <br>
                    <input type="checkbox" name="types" id="dragon" onchange="updateImage()"> Dragon <br>
                    <input type="checkbox" name="types" id="ghost" onchange="updateImage()"> Ghost <br>
                    <input type="checkbox" name="types" id="dark" onchange="updateImage()"> Dark <br>
                    <input type="checkbox" name="types" id="steel" onchange="updateImage()"> Steel <br>
                    <input type="checkbox" name="types" id="fairy" onchange="updateImage()"> Fairy <br>
                    <input type="checkbox" name="types" id="???" onchange="updateImage()"> ??? <br>
                    
                </fieldset>
            <form method="post1" action="#" onsubmit= "alert('no checking out'); return false;">
                <fieldset>
                    <legend>Regions</legend>
                    <input type="checkbox" name="types" id="kanto" onchange="updateImage()"> Kanto <br>
                    <input type="checkbox" name="types" id="johto" onchange="updateImage()"> Johto <br>
                    <input type="checkbox" name="types" id="hoenn" onchange="updateImage()"> Hoenn <br>
                    <input type="checkbox" name="types" id="sinnoh" onchange="updateImage()"> Sinnoh <br>
                    <input type="checkbox" name="types" id="unova" onchange="updateImage()"> Unova <br>
                    <input type="checkbox" name="types" id="kalos" onchange="updateImage()"> Kalos <br>
                </fieldset>
                <form method="post2" action="#" onsubmit= "alert('no checking out'); return false;">
                <fieldset>
                    <legend>Generations</legend>
                    <input type="checkbox" name="types" id="g1" onchange="updateImage()"> Generation 1 <br>
                    <input type="checkbox" name="types" id="g2" onchange="updateImage()"> Generation 2 <br>
                    <input type="checkbox" name="types" id="g3" onchange="updateImage()"> Generation 3 <br>
                    <input type="checkbox" name="types" id="g4" onchange="updateImage()"> Generation 4 <br>
                    <input type="checkbox" name="types" id="g5" onchange="updateImage()"> Generation 5 <br>
                    <input type="checkbox" name="types" id="g6" onchange="updateImage()"> Generation 6 <br>
                </fieldset>
        </div>

        <div id="images">
            <img src="pokemonImages/1.png" alt="" id="p1" style="visibility:hidden">
            <img src="pokemonImages/2.png" alt="" id="p2" style="visibility:hidden">
            <img src="pokemonImages/3.png" alt="" id="p3" style="visibility:hidden">
            <img src="pokemonImages/4.png" alt="" id="p4" style="visibility:hidden">
            <img src="pokemonImages/5.png" alt="" id="p5" style="visibility:hidden">
            <img src="pokemonImages/6.png" alt="" id="p6" style="visibility:hidden">
            <img src="pokemonImages/7.png" alt="" id="p7" style="visibility:hidden">
            <img src="pokemonImages/8.png" alt="" id="p8" style="visibility:hidden">
            <img src="pokemonImages/9.png" alt="" id="p9" style="visibility:hidden">
            <img src="pokemonImages/10.png" alt="" id="p10" style="visibility:hidden">
            <img src="pokemonImages/11.png" alt="" id="p11" style="visibility:hidden">
            <img src="pokemonImages/12.png" alt="" id="p12" style="visibility:hidden">
            <img src="pokemonImages/13.png" alt="" id="p13" style="visibility:hidden">
            <img src="pokemonImages/14.png" alt="" id="p14" style="visibility:hidden">
            <img src="pokemonImages/15.png" alt="" id="p15" style="visibility:hidden">
            <img src="pokemonImages/16.png" alt="" id="p16" style="visibility:hidden">
            <img src="pokemonImages/17.png" alt="" id="p17" style="visibility:hidden">
            <img src="pokemonImages/18.png" alt="" id="p18" style="visibility:hidden">
            <img src="pokemonImages/19.png" alt="" id="p19" style="visibility:hidden">
            <img src="pokemonImages/20.png" alt="" id="p20" style="visibility:hidden">

        </div>
        <script type="text/javascript">
            function updateImage() {
                document.getElementById('p1').style.visibility ="hidden";
                document.getElementById('p2').style.visibility ="hidden";
                document.getElementById('p3').style.visibility ="hidden";
                document.getElementById('p4').style.visibility ="hidden";
                document.getElementById('p5').style.visibility ="hidden";
                document.getElementById('p6').style.visibility ="hidden";
                document.getElementById('p7').style.visibility ="hidden";
                document.getElementById('p8').style.visibility ="hidden";
                document.getElementById('p9').style.visibility ="hidden";
                document.getElementById('p10').style.visibility ="hidden";
                document.getElementById('p11').style.visibility ="hidden";
                document.getElementById('p12').style.visibility ="hidden";
                document.getElementById('p13').style.visibility ="hidden";
                document.getElementById('p14').style.visibility ="hidden";
                document.getElementById('p15').style.visibility ="hidden";
                document.getElementById('p16').style.visibility ="hidden";
                document.getElementById('p17').style.visibility ="hidden";
                document.getElementById('p18').style.visibility ="hidden";
                document.getElementById('p19').style.visibility ="hidden";
                document.getElementById('p20').style.visibility ="hidden";
                

                if(document.getElementById('normal').checked) {
                    document.getElementById('p6').style.visibility ="visible";
                    document.getElementById('p7').style.visibility ="visible";
                    document.getElementById('p8').style.visibility ="visible";
                    document.getElementById('p16').style.visibility ="visible";
                }
                if(document.getElementById('fire').checked) {
                    document.getElementById('p2').style.visibility ="visible";
                    document.getElementById('p15').style.visibility ="visible";
                }
                if(document.getElementById('fighting').checked) {
                }
                if(document.getElementById('water').checked) {
                    document.getElementById('p3').style.visibility ="visible";
                }
                if(document.getElementById('flying').checked) {
                    document.getElementById('p6').style.visibility ="visible";
                    document.getElementById('p17').style.visibility ="visible";
                }
                if(document.getElementById('grass').checked) {
                    document.getElementById('p1').style.visibility ="visible";
                    document.getElementById('p18').style.visibility ="visible";
                    document.getElementById('p19').style.visibility ="visible";
                }
                if(document.getElementById('poison').checked) {
                    document.getElementById('p1').style.visibility ="visible";
                    document.getElementById('p5').style.visibility ="visible";
                    document.getElementById('p9').style.visibility ="visible";
                    document.getElementById('p12').style.visibility ="visible";
                    document.getElementById('p13').style.visibility ="visible";
                    document.getElementById('p17').style.visibility ="visible";
                    document.getElementById('p18').style.visibility ="visible";
                    document.getElementById('p20').style.visibility ="visible";
                }
                if(document.getElementById('electric').checked) {
                    document.getElementById('p10').style.visibility ="visible";
                }
                if(document.getElementById('ground').checked) {
                    document.getElementById('p11').style.visibility ="visible";
                }
                if(document.getElementById('psychic').checked) {
                }
                if(document.getElementById('rock').checked) {
                }
                if(document.getElementById('ice').checked) {
                }
                if(document.getElementById('bug').checked) {
                    document.getElementById('p4').style.visibility ="visible";
                    document.getElementById('p5').style.visibility ="visible";
                    document.getElementById('p19').style.visibility ="visible";
                    document.getElementById('p20').style.visibility ="visible";
                }
                if(document.getElementById('dragon').checked) {
                }
                if(document.getElementById('ghost').checked) {
                }
                if(document.getElementById('dark').checked) {
                }
                if(document.getElementById('steel').checked) {
                }
                if(document.getElementById('fairy').checked) {
                    document.getElementById('p14').style.visibility ="visible";
                    document.getElementById('p16').style.visibility ="visible";
                }
                if(document.getElementById('???').checked) {
                }
                if(document.getElementById('kanto').checked) {
                document.getElementById('p1').style.visibility ="visible";
                document.getElementById('p2').style.visibility ="visible";
                document.getElementById('p3').style.visibility ="visible";
                document.getElementById('p4').style.visibility ="visible";
                document.getElementById('p5').style.visibility ="visible";
                document.getElementById('p6').style.visibility ="visible";
                document.getElementById('p7').style.visibility ="visible";
                document.getElementById('p8').style.visibility ="visible";
                document.getElementById('p9').style.visibility ="visible";
                document.getElementById('p10').style.visibility ="visible";
                document.getElementById('p11').style.visibility ="visible";
                document.getElementById('p12').style.visibility ="visible";
                document.getElementById('p13').style.visibility ="visible";
                document.getElementById('p14').style.visibility ="visible";
                document.getElementById('p15').style.visibility ="visible";
                document.getElementById('p16').style.visibility ="visible";
                document.getElementById('p17').style.visibility ="visible";
                document.getElementById('p18').style.visibility ="visible";
                document.getElementById('p19').style.visibility ="visible";
                document.getElementById('p20').style.visibility ="visible";
                }
                if(document.getElementById('g1').checked) {
                    document.getElementById('p1').style.visibility ="visible";
                document.getElementById('p2').style.visibility ="visible";
                document.getElementById('p3').style.visibility ="visible";
                document.getElementById('p4').style.visibility ="visible";
                document.getElementById('p5').style.visibility ="visible";
                document.getElementById('p6').style.visibility ="visible";
                document.getElementById('p7').style.visibility ="visible";
                document.getElementById('p8').style.visibility ="visible";
                document.getElementById('p9').style.visibility ="visible";
                document.getElementById('p10').style.visibility ="visible";
                document.getElementById('p11').style.visibility ="visible";
                document.getElementById('p12').style.visibility ="visible";
                document.getElementById('p13').style.visibility ="visible";
                document.getElementById('p14').style.visibility ="visible";
                document.getElementById('p15').style.visibility ="visible";
                document.getElementById('p16').style.visibility ="visible";
                document.getElementById('p17').style.visibility ="visible";
                document.getElementById('p18').style.visibility ="visible";
                document.getElementById('p19').style.visibility ="visible";
                document.getElementById('p20').style.visibility ="visible";
                }
                
            }
        </script>
        <?php
            //run the query
            function sql1() {
            $sql = "SELECT * FROM pokemon, region WHERE p_regionID = r_regionID;";
            
            //save the result on the query
            $result = mysqli_query($conn, $sql);
 
            //check if there is any results
            $resultCheck = mysqli_num_rows($result);
 
            //if there are results 
            if($resultCheck > 0){
                
                //while the coloumn is not empty
                while($row = mysqli_fetch_assoc($result)){
 
                    //print our each row
                    echo $row['p_name'];
                    echo " ";
            
                }
            }
            }
        ?>
        <style>
        body {
            background-image: url("pokemonImages/bg3.png");
            background-repeat:no-repeat;
            background-size:cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>
    </body>
</html>   