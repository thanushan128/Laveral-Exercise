<h1>Create Employee Form</h1>

<form action="store" method="post">
    <label>Name </label><input type="text" name="name">
    <label>Age </label><input type="text" name="age">
    <label>Phone </label><input type="text" name="phone">
    <input type="submit" value="Create Employee">
    @csrf
</form>
