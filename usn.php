<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>DCS-Event</title>
        <title></title>
        <?php require 'utils/styles.php'; ?>css links. file found in utils folder
        
    </head>
    <style>
        .form-group{
            display: flex;
            justify-content: center;
            align-items: center;   
            height: 100vh; 
        }

        .form-group input{
            border: solid 2px red;  
            border-radius: 20px;
        }

        .btn{
            
        }
    </style>
    <body>
        <?php require 'components/navbar.php'; ?><!--header content. file found in utils folder-->

        <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <form action="RegisteredEvents.php" class ="form-group" method="POST">

                        
                        <div class="form-group">
                            <label for="usn"> Student USN: </label>
                            <input type="text"
                                   id="usn"
                                   name="usn"
                                   class="form-control">
                        </div>
                        <button type="submit" class = "btn btn-default">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
