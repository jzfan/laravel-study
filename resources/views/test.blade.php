<html>
    <body>
        <form action="" method="post">
        {!! csrf_field() !!}
            Name: <input type="text" name='name'><br><br>
             Age: <input type="text" name='age'><br>
            <br>
            <input type="submit" value='submit'>
        </form>
    </body>
</html>