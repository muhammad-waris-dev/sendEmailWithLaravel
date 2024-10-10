<!DOCTYPE html>
<html>
    <head>
        <title>Email</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="mx-auto" style="width: 500px; margin-top: 50px">
                    <p>Send Email Through Laravel</p>
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            Message
                        </div>
                        <div class="card-body">
                            <form action="send" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>To:<span class="red">*</span></label>
                                    <input type="email" name="email" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>Subject:<span class="red">*</span></label>
                                    <input type="text" name="subject" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>Body:</label>
                                    <textarea name="body" class="form-control"></textarea>
                                </div>
                                <input type="submit" value="Send" class="btn btn-primary"/>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </body>
</html>