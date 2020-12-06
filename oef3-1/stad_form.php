<?php
include_once "lib/connection.php";
include_once "lib/html_components.php";

printHead();
?>

    <div class="jumbotron text-center">
        <h1>Detail stad</h1>
    </div>

<form>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</form>

    </body>
</html>

