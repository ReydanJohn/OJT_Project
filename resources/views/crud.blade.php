<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Table</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main>
        <div class="container">
            <h3>CRUD TABLE</h3>
            <a href="#add" class="add">Create <i class="fa-solid fa-plus"></i></a>
        </div>
            <table>
                <tr>
                    <th>#</th>
                    <th>First</th>
                    <th>Last</th>
                    <th>Occupation</th>
                    <th colspan="2">Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Rey</td>
                    <td>Belen</td>
                    <td>Intern</td>
                    <td><a href="#edit" class="edit"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><a href="#delete" class="delete"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
            </table>
            <div class="pagenum">
                <p>Page 1</p>
            </div>
    </main>
</body>
</html>
