<html>
    <head>
        <title>User</title>
        <link rel="stylesheet" href="../View/css/userprofile.css">
    </head>
    <body>
    <section class="user" id="user">

        <h1 class="heading"> <i class="fas fa-paw"></i>User <i class="fas fa-paw"></i> </h1>

            <form action="../View/create.php" method="post">

                <div class="inputBox">
                    <input type="text"  value="
                    <?php 
                        if(isset($_GET['name']))
                            echo($_GET['name']); 
                    ?>"placeholder="name">
                </div>
                <div class="inputBox">
                <input type="email"  value="
                            <?php 
                                if(isset($_GET['email']))
                                    echo($_GET['email']); 
                            ?>" placeholder="email">
                </div>

                <input type="submit" value="Create" class="btn">
                <input type="submit" value="Update" class="btn">
                <input type="submit" value="Delete" class="btn">

            </form>

        </section>
    </body>
</html>