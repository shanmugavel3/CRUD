<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    </style>

</head>

<body>
    <div class="container">
        <h1 class="text-center text-uppercase my-5 text-success">DETAILS</h1>
        <a href="./registerform.php" class="btn btn-outline-primary mb-5 ">Create Data</a>
        <table class="table table-bordered">
            <thead>
                <tr class=" table table-success">
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Phone Number</th>
                    <th class="text-center">ACTIONS</th>

                </tr>
            </thead>
            <tbody id="body">





            </tbody>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script>
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "./getdata.php", true);
            xmlhttp.setRequestHeader('Content-Type', 'application/json')
            xmlhttp.onload = function() {

                const data = JSON.parse(this.responseText);


                // var x = data.querySelectorAll('user');

                let id = document.getElementById('id');
                let name = document.getElementById('name');
                let phone = document.getElementById('phone');


                template = '';

                let innervalue = document.getElementById('body');

                data.forEach(val => {




                    template += ` <tr>
                        <td class="text-center">${val.id}</td>
                        <td class="text-center">${val.name}</td>
                        
                        <td class="text-center">${val.phone}</td>
                        <td class="text-center"><a class="btn btn-outline-dark me-3" href="./updateform.php?id=${val.id}">Update</a>
                        
                            <a class="btn btn-outline-danger me-3" href="./delete.php?id=${val.id}">Delete</a>
                        </td>

                    </tr>`;




                    innervalue.innerHTML = template;



                })

            }



            xmlhttp.send();
        </script>
</body>

</html>