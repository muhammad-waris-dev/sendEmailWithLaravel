<!DOCTYPE html>
<html>
    <head>
         <title>Email Template </title>
    </head>
    <body style="background-color: #F1EFEF;">
    <div>
        <table style="width: 50%; text-align:center; margin-left:auto; margin-right:auto; border: 1px solid #ddd;">
            <thead style="background-color:#66c2ff">
                <tr>
                    <th>Email send by Laravel</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><p>{{ $details['body'] }}</p></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td><p>Email Recived</p></td>
                </tr>
            </tfoot>
        </table>
        </div>
    </body>
</html>