<form method="post" action="" enctype="multipart/form-data">
    <label>
        One file:
        <input type="file" name="image">
    </label>
    <br>

    <label>
        Many files:
        <input type="file" multiple="multiple" name="images[]">
    </label>
    <br>

    <input type="submit" value="Upload">
</form>