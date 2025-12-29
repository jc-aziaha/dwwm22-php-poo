<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <script>
        const Person = {
            firstName: 'Picsou',
            lastName: 'Balthazar',
            email: 'picsou@gmail.com',
            password: 'pipi12344A*',

            saluer: function () {
                console.log(this.firstName);
            }
            
            // saluer: () => {
            //     console.log(this);
            // }
        }

        Person.saluer();
    </script>
</body>
</html>