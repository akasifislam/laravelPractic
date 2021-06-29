<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <table class="table table-bordered table-primary table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Details</th>
                        <th scope="col">created_at</th>
                        <th scope="col">created_at</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $key => $article)
                        <tr>
                            <th> {{ $key+1  }} </th>
                            <td> {{ $article->name }} </td>
                            <td>{{ $article->details }}</td>
                            <td>{{ $article->created_at }}</td>
                            <td>{{ dateFormat() }}</td>
                        </tr>
                        @endforeach      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>