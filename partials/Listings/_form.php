<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ListingType = trim($_POST["ListingType"]);
  $title = trim($_POST["title"]);
  $mail = trim($_POST["mail"]);
  $price = trim($_POST["Price"]);
  $location = trim($_POST['Location']);
  $message = trim($_POST["message"]);
  $_SESSION['annonces'][] = ['user' => $_SESSION['user'], 'title' => $title, 'price ' => $price, 'Location' => $location]; 
}
?> 

<form action="" method="post" class="newListingForm">

<label class="label" for="ListingType">Listing Type :</label>
<select name="ListingType" id="ListingType">
<option value="Rent">Rent</option>
<option value="Sale">Sale</option>
</select>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($ListingType)): ?>
<p class="errors"> please choose a Listing Type </p>
<?php endif ?>


<label class="label" for="title">Title :</label>
<input class="textInput" type="text" name="title"></input>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($title)): ?>
<p class="errors"> please enter a title </p>
<?php endif ?>


<label class="label" for="mail">contact mail :</label>
<input class="textInput" type="mail" name="mail"></input>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($mail)): ?>
<p class="errors"> please enter a contact mail </p>
<?php endif ?>


<label class="label" for="Price">Price :</label>
<input class="textInput" type="number" name="Price">
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($price)): ?>
<p class="errors"> please enter a title </p>
<?php endif ?>


<label class="label" for="Location">Localization of your property :</label>
<input class="textInput" type="text" name="Location" id="Location">
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($location)): ?>
<p class="errors"> please enter a location </p>
<?php endif ?>


<label class="label" for="message">Description :</label>
<input class="textInput description" type="text" name="message"></input>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($message)): ?>
<p class="errors"> please enter a description </p>
<?php endif ?>



<button class="sendListing" type="submit">Create Listing</button>
</form>