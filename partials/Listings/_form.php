<form action="" method="post" class="newListingForm">

<label class="label" for="ListingType">Listing Type :</label>
<select name="ListingType" id="ListingType">
<option value="Rent">Rent</option>
<option value="Sale">Sale</option>
</select>

<label class="label" for="name">Your name :</label>
<input class="textInput" type="text" name="name"></input>

<label class="label" for="mail">Your email :</label>
<input class="textInput" type="mail" name="mail"></input>

<label class="label" for="Price">Price :</label>
<input class="textInput" type="number" name="Price">

<label class="label" for="Location">Localization of your property :</label>
<input class="textInput" type="text" name="Location" id="Location">

<label class="label" for="description">Description :</label>
<input class="textInput description" type="text" name="description"></input>


<button class="sendListing" type="submit">Create Listing</button>
</form>

<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ListingType = trim($_POST["ListingType"]);
  $name = trim($_POST["name"]);
  $mail = trim($_POST["mail"]);
  $price = trim($_POST["Price"]);
  $location = trim($_POST['Location']);
  $message = trim($_POST["message"]);

  $errors = [];

  if (empty($ListingType)) {
    $errors[] = "Please chose your type of listing";
  }
  if (empty($name)) {
    $errors[] = "Please enter a name";
  }
  if (empty($mail)) {
    $errors[] = "Please enter a mail";
  }
  if (empty($price)) {
    $errors[] = "Please enter a price";
  }
  if (empty($location)) {
    $errors[] = "Please enter a location";
  }
  if (empty($message)) {
    $errors[] = "Please write a description";
  }
 
}
?> 

<?php if (!empty($errors)) : ?>
    <div class="errorContainer">
    <h2 class="errorMessage">Merci de corriger les erreurs suivantes :</h2>
    <ul class="errors">
      <?php foreach ($errors as $error) : ?>
        <li class="formError"><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
      </div>
  <?php endif; ?>
