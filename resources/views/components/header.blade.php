<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="<?= URL::to('/') ?>"  class="w3-bar-item  w3-padding-small "><img class=" w3-padding" src='{{ URL::to('image/PastBook.png') }}' width="175px"> </a>
        <a href="https://pastbook.com/" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-blue" title="Home page"><i class="fa fa-home"></i></a>

        <a href="https://moments.pastbook.com/create/scratch/" class="w3-bar-item w3-button w3-hide-small w3-right w3-margin-right w3-padding-small w3-hover-blue w3-green w3-round-xxlarge w3-border no-decoration" title="Create Book" style="margin-top: 10px;">@lang('contact.create_book')</a>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large " style="margin-top:51px">
    <a href="https://www.pastbook.com/" class="w3-bar-item w3-button w3-padding-large no-decoration">@lang('contact.home')</a>
    <a href="https://moments.pastbook.com/create/scratch/" class="w3-bar-item w3-button w3-padding-large no-decoration">@lang('contact.create_book')</a>

</div>