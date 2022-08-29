<!doctype html>
<html>

<head>
    <title>Dynamically load data in Select2 with AJAX PDO and PHP</title>
    <meta charset="UTF-8">
    <!-- CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {

            $("#selUser").select2({

                minimumInputLength: 3,

                ajax: {
                    delay: 250, // wait 250 milliseconds before triggering the request
                    url: "ajax_get_data.php",
                    type: "post",
                    dataType: 'json',
                    data: function(params) {
                        var query = {
                            keyword: params.term,
                            type: 'public'
                        }
                        return query;
                    },
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            });

        });
    </script>

</head>

<body>

    <select id='selUser' multiple style='width: 200px;'>
        <option value='0'>- Search user -</option>
    </select>

</body>

</html>