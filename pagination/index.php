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

            $('#selUser').select2({

                //minimumInputLength: 3,

                ajax: {
                    delay: 250, // wait 250 milliseconds before triggering the request
                    url: 'ajax_data.php',
                    type: "post",
                    dataType: 'json',
                    data: function(params) {
                        var query = {
                            keyword: params.term,
                            page: params.page || 1
                        }
                        return query;
                    },

                    processResults: function(data, params) {

                        params.page = params.page || 1;

                        var datalist = data['data'];
                        var totaldata = data.totaldata;

                        return {
                            results: datalist,
                            pagination: {
                                more: (params.page * 10) < totaldata
                            }
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