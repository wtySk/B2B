<!--
    Author : wtySk
    Date : 2017-05-02 15:46:45
 -->
<html>
    <head>
        <title> Laravel Test </title>
    </head>
    <body>
    <form action="/test/register" method="POST">
        {!! csrf_field() !!}

        <div>
            Name: <input type="text" name="name">
        </div>

        <div>
            <input type="checkbox" value="yes" name="terms"> Accept Terms
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    </body>
</html>