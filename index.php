<?php
include "header.php";
?>
<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
        height: 515px;
    }
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="pictures/picture1.jpg">
        </div>
        <div class="item">
            <img src="pictures/picture2.jpg">
        </div>
        <div class="item">
            <img src="pictures/picture3.jpg">
        </div>
        <div class="item">
            <img src="pictures/picture4.jpg">
        </div>
        <div class="item">
            <img src="pictures/picture5.jpg">
        </div>
        <div class="item">
            <img src="pictures/picture6.jpg">
        </div>
    </div>
</div>
