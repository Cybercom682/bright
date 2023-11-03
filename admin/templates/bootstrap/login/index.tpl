<form id="loginform" class="w-25 position-absolute top-50 start-50 translate-middle border shadow-sm p-3 text-bg-dark" method="post">
    <input type="hidden" name="login">
    <div class="form-group">
        <label for="user">Benutzername</label>
        <input type="text" class="form-control" id="user" name="user" aria-describedby="userHelp">
        <small id="userHelp" class="form-text text-muted">Bitte geben sie hier ihren Benutzernamen an.</small>
    </div>
    <div class="form-group">
        <label for="pass">Passwort</label>
        <input type="password" class="form-control" id="pass" name="pass">
    </div>
    <button type="submit" class="btn btn-outline-info mt-3">Anmelden</button>
</form>