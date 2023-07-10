<html>
@include("header")

<br><br>
<h2>Create user</h2>
<div class="container">
<div class="row">

    <form action="/register" method="post">
        @csrf
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">nombre</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="username">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">correo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
        </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">contraseña</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">confirmar contraseña</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" name="password-confirmation">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Login</button>

    </div>
    </form>
</div>

</html>