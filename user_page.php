<!DOCTYPE html>
<html>
<head>
	<title>Entertainment Database</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href=".tab_style.css">
	
</head>
<body>
<header>
    <h1 class="Whitetrash" >Team Alex</h1>
    <h1 class="headermiddle">Entertainment Database</h1>
    <div class="account">
        <div class="Accountpic">
            <img src="http://www.dvdsreleasedates.com/posters/800/D/Deadpool-2016-movie-poster.jpg" border=1 height="90px" max-width="100%">    
        </div>
        <div class="Accountinfo">
            <p class="user">User</p>
            <p>account</p>
            <p>Log out</p>
        </div>
    </div>
</header>
<br>
<br>
<br>
<br>
	
<ul class="tabs">
    <li>
        <input type="radio" name="tabs" id="tab1" checked />
        <label for="tab1">Image</label>
        <div id="tab-content1" class="tab-content">
            <div class="Column">
                <img src="http://4k.com/wp-content/uploads/2014/06/4k-image-tiger-jumping.jpg" alt=""border=1 width=100%></img><!--assets/SteveAustin_NoTitle.png-->
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <div class="Imagetable">
                    <div style="height:520px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                    <table>
                        <thead>
                            <tr>
                                <th>I</th>
                                <th>M</th>
                                <th>A</th>
                                <th>G</th>
                                <th>E</th>
                                <th>&amp;</th>
                                <th>G</th>
                                <th>I</th>
                                <th>F</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <?php
                                require_once 'dbcon_gru.php';
                                try
                                {
                                    $sql = "SELECT Link FROM pictures";
                                    $result = $Connection->query($sql);
                                }
                                catch (PDOException $e)
                                {
                                    echo 'Error fetching link:'. $e -> getMessage();
                                }
                                while ($row = $result->fetch()) 
                                {
                                    $link[] = $row['Link'];
                                }
                                $rowcount = 0;
                                for ($counter=0; $counter < count($link); $counter++) 
                                { 
                                    echo "<td><img src=\"$link[$counter]\"></img></td>";
                                    $rowcount++;
                                    if($rowcount % 9 == 0)
                                    	echo "</tr><tr>";
                                }
                                ?>
  
                            </tr>

                            <tr>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE&commat;"></img></td>
								<!--<td><img src="include 'getImage.php';"></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE&commat;._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://4k.com/wp-content/uploads/2014/06/4k-image-tiger-jumping.jpg" alt=""></img></td>
                                <td><img src="assets/SteveAustin_NoImageSelected.gif" alt=""></img></td>
                                <td><img src="http://www.kvikmyndir.is/script/timthumb.php?src=/images/poster/deadpool-1453984383.png&w=120&zc=1" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMTk2Mjc0NTM2N15BMl5BanBnXkFtZTcwNTI5OTU3MQ&commat;&commat;._V1_SX640_SY720_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjE2Njk4MTIwNl5BMl5BanBnXkFtZTYwNjI2NjE3._V1_SX640_SY720_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://gcathletics.com/images/150x500_coke.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_SX300.jpg" alt=""></img></td>-->
                                
                            </tr>
                            <tr>
                                <!--<td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>-->
                            </tr>
                            <tr>
                                <!--<td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>-->
                            </tr>
                            <tr>
                                <!--<td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>-->
                            </tr>
                            <tr>
                                <!--<td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>-->
                            </tr>
                            <tr>
                                <!--<td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>-->
                            </tr>
                            <tr>
                                <!--<td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>-->
                            </tr>
                            <tr>
                                <!--<td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>-->
                            </tr>
                            <tr>
                                <!--<td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt=""></img></td>-->
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div> 
            </div>
        </div>        
    </li>
    <li>
        <input type="radio" name="tabs" id="tab2" />
        <label for="tab2">Series</label>
        <div id="tab-content2" class="tab-content">
            <div class="grid">
                <div class= "column">
                    <img src="http://www.dvdsreleasedates.com/images/orig/L/Las-Vegas-TV-Series-2003-2008.jpg" border=1 width=48%></img>
                    <table class="smalltable">
                        <tr>
                            <th>Title</th>
                            <td>Las Vegas</td>
                        </tr>
                        <tr>
                            <th>Number of Episodes</th>
                            <td>103</td>
                        </tr>
                        <tr>
                            <th>Catagory</th>
                            <td>Crime, Drama</td>
                        </tr>
                        <tr>
                            <th>Imdb Rating</th>
                            <td>8,3</td>
                        </tr>
                        <tr>
                            <th>User Rating</th>
                            <td>9,5</td>
                        </tr>
                        <tr>
                            <th>User Rating</th>
                            <td>9,5</td>
                        </tr>
                         <tr>
                            <th>Catagory</th>
                            <td>Crime, Drama</td>
                        </tr>
                        <tr>
                            <th>Imdb Rating</th>
                            <td>8,3</td>
                        </tr>
                    </table>
                    <a href="http://www.imdb.com/title/tt1431045/?ref_=fn_al_tt_1" target="_blank"><img src="http://www.brafton.com/wp-content/uploads/2016/02/IMDb-icon.png" height=20 width=60></img></a>
                    

                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla?</p>
                </div>
                <div class="table">
                    <div style="height:750px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                    <table>
                        <thead>
                            <tr>
                                <th class="Poster">Poster</th>
                                <th class="Name">Name</th>
                                <th class="Info">Info</th>
                                <th class="Episode">Number of Episodes</th>
                                <th class="Duration">Duration</th>
                                <th class="Imdb">Imdb rating</th>
                                <th class="User">User rating</th>
                                <th class="RD">Rating Diffrence</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <?php
                                try
                                {
                                    $sql = "SELECT Title,poster,Episode,Description,Duration,world_rating,User_rating,Rating_diffrence FROM series JOIN users_has_series ON series.Series_ID=users_has_series.series_Series_ID";
                                    $result = $Connection->query($sql);

                                }
                                catch (PDOException $e)
                                {
                                    echo 'Error fetching link:'. $e -> getMessage();
                                }
                                while ($row = $result->fetch()) 
                                {
                                    
                                    $linkur[] = $row['poster'];
                                    $linkur[] = $row['Title'];
                                    $linkur[] = $row['Description'];
                                    $linkur[] = $row['Episode'];
                                    $linkur[] = $row['Duration'];
                                    $linkur[] = $row['world_rating'];
                                    $linkur[] = $row['User_rating'];
                                    $linkur[] = $row['Rating_diffrence'];
                                }
                                $rowcount = 0;
                                for ($counter1=0; $counter1 < count($linkur); $counter1++) 
                                { 
                                    echo "<td>$linkur[$counter1]</td>";
                                    $rowcount++;
                                    if($rowcount % 8 == 0)
                                        echo "</tr><tr>";
                                }
                                ?>
                                <!--<td><img src="http://ia.media-imdb.com/images/M/MV5BMTk2Mjc0NTM2N15BMl5BanBnXkFtZTcwNTI5OTU3MQ@@._V1_UY268_CR6,0,182,268_AL_.jpg" alt="" border=2 height=140 width=91></img></td>
                                <td>Las Vegas</td>
                                <td>Welcome to the Montecito Resort & Casino in Las Vegas, where you can do anything you want... but Ed Deline and his crack surveillance team will be watching. Just remember, what happens in Vegas, stays in Vegas.</td>
                                <td>103</td>
                                <td>Crime, Drama</td>
                                <td>8,3</td>
                                <td>9,5</td>
                                <td>Math</td>
                            </tr>
                            <tr>
                                -->
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li>
        <input type="radio" name="tabs" id="tab3" />
        <label for="tab3">Movies</label>
        <div id="tab-content3" class="tab-content">
            <div class="grid">
                <div class= "column">
                    <img src="http://www.dvdsreleasedates.com/posters/800/D/Deadpool-2016-movie-poster.jpg" border=1 width=48%></img>
                    <table class="smalltable">
                        <tr>
                            <th>Title</th>
                            <td>Deadpool</td>
                        </tr>
                        <tr>
                            <th>Duration</th>
                            <td>1h 48min</td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td>Action, Adventure, Comedy</td>
                        </tr>
                        <tr>
                            <th>Imdb Rating</th>
                            <td>8,3</td>
                        </tr>
                        <tr>
                            <th>User Rating</th>
                            <td>9,5</td>
                        </tr>
                    </table>
                    <a href="http://www.imdb.com/title/tt1431045/?ref_=fn_al_tt_1"><img src="http://www.brafton.com/wp-content/uploads/2016/02/IMDb-icon.png" height=20 width=60></img></a>

                    <p>This is the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.</p>
                </div>
                <div class="table">
                    <div style="height:750px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                    <table>
                        <thead>
                            <tr>
                                <th>Poster</th>
                                <th>Name</th>
                                <th>Duration</th>
                                <th>Genre</th>
                                <th>Imdb rating</th>
                                <th>User rating</th>
                                <th>Rating Diffrence</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
                        	class TableRows extends RecursiveIteratorIterator { 
							    function __construct($it) { 
							        parent::__construct($it, self::LEAVES_ONLY); 
							    }
							
							    function current() {
							        return "<td style='width:150px;border:1px solid black;'>" . 							parent::current(). "</td>";
							    }
							
							    function beginChildren() { 
							        echo "<tr>"; 
							    } 
							
							    function endChildren() { 
							        echo "</tr>" . "\n";
							    } 
							} 
							
							try {
							    $stmt = $Connection->prepare("SELECT Poster, Title, Genre, duration, Imdb_rating FROM movies"); 
							    $stmt->execute();
							
							    // set the resulting array to associative
							    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
							    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as 							$k=>$v) { 
							        echo $v;
							    }
							}
							catch(PDOException $e) {
							    echo "Error: " . $e->getMessage();
							}
							$Connection = null;
							
							?>
                            <?php
                            /*
                            $results = mysql_query("SELECT Poster, Title, Genre, duration, Imdb_rating FROM movies");
                            while($row = mysql_fetch_array($results)) 
                            {
                            ?>
                            <tr>
                                <td><?php echo $row['Poster']?></td>
                                <td><?php echo $row['Title']?></td>
                                <td><?php echo $row['duration']?></td>
                                <td><?php echo $row['Genre']?></td>
                                <td><?php echo $row['Imdb_rating']?></td>
                            </tr>

                            <?php
                            }*/
                            ?>
                            
                            <!--<tr>
                                
                                <td><img src="http://ia.media-imdb.com/images/M/MV5BMjQyODg5Njc4N15BMl5BanBnXkFtZTgwMzExMjE3NzE@._V1_UY268_CR1,0,182,268_AL_.jpg" alt="" border=2 height=140 width=91></img></td>
                                <td>Deadpool</td>
                                <td>1h 48min</td>
                                <td>Action, Adventure, Comedy</td>
                                <td>8,3</td>
                                <td>9,5</td>
                                <td>Math</td>
                            </tr>
                            -->
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
    <!--
    <div class="tab-content">
        <div id="tab1" class="tab active">
            <p>Tab #1 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p>
        </div>
 
        <div id="tab2" class="tab">
            <p>Tab #2 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
        </div>
 
        <div id="tab3" class="tab">
            <p>Tab #3 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
        </div>
 
        <div id="tab4" class="tab">
            <p>Tab #4 content goes here!</p>
            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
        </div>
    </div>
    -->
</div>
	<script type="text/javascript" src="team_alex.js"></script>

</body>
</html>