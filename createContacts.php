<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Contact</title>
</head>
<body>
<form action="savecontact.php" method="post">
  <fieldset>
      <label for="firstName">First Name:</label>
      <input name="firstName" id="firstName" />
  </fieldset>

    <fieldset>
        <label for="lastName">Last Name:</label>
        <input name="lastName" id="lastName" />
    </fieldset>

    <fieldset>
        <label for="email">Email:</label>
        <input name="email" id="email" required />
    </fieldset>
    <button>Submit</button>
</form>

#[[$END$]]#
</body>
</html>