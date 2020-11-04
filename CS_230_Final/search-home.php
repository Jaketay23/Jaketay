<?php 
require 'includes/dbhandler.php';
require 'includes/header.php'; 
?>

<link rel="stylesheet" type="text/css" href="css/search-style.css">

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search">Search</button>
</form>

<h1>Front Page</h1>
<h2>All Media</h2>
<div class="media-container">
    <?php
        $sql = "SELECT * FROM movies";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);
    
        if($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="media-box">
                        <div class="card">
                            <a href = "reviews.php?id='.$row['pid'].'">
                                <h3>'.$row["title"].'</h3>
                            </a>
                            <p>Director: '.$row["director"].'</p>
                            <p>Lead Actor: '.$row["lead"].'</p>
                            <p>Release Date: '.$row["release_date"].'</p>
                        </div>                        
                    </div>';
            }
        }
    ?>
</div>