<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>QUICK SEARCH ELEMENT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="container">

    <div class="card mt-5">

        <div class="card-header bg-info text-white">TÌM NHANH</div>

        <div class="card-body">

            <input type="text" class="form-control loctren-tim" placeholder="Tìm nhanh..." name="">


            <ul class="list-unstyled mt-4">

                <?php

                    for ($i=1; $i < 51; $i++) {
                        $rand = bin2hex(openssl_random_pseudo_bytes(10));

                        echo '
                        <li>

                            <label>

                                <input type="checkbox" name="" />

                                <span data-text="'.strtolower($rand).'">'.$rand.'</span>

                            </label>

                        </li>

                        ';
                    }

                ?>

            </ul>

        </div>

    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="./main.js"></script>
</body>
</html>