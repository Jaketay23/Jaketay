<?php 
require 'includes/dbhandler.php';
require 'includes/header.php'; 
require 'includes/review-helper.php';
?>

<main>
<link rel="stylesheet" href="css/reviews.css">
<div class = "overlay">
    <div class = "container" align="center" style="max-width: 800px">
        <div class ="my_auto">
        <form id="review-form" action="includes/review-helper.php" method="post">
                <div class = "form-group" style = "margin-top: 15px;">
                    <label class="title-label" for="review-title" style="font-size: 16px; font-weight: bold;">Title</label>
                    <input type = "text" name="review-title" id="review-title" style="width: 100%; margin-bottom: 10px;">
                    <font-awesome-icon size="2x" :icon="['fas', 'heart']" />
                    <textarea class="form-control" id="review-text" name="review" cols="10" rows="3" placeholder="Enter a comment..."></textarea>
                    <input type="hidden" name="rating" id="rating">
                    <input type="hidden" name="item_id" value="<?php echo $_GET['id'];?>">
                </div>
                <div class = "form-group">
                    <button class="btn btn-outline-danger" id="review-submit" name="review-submit" type="submit" style="width: 100%;">Review</button>
                </div>
            </form>
        </div>
    </div>
</div>
</main>
