<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <title>Document</title>

    <script type="text/javascript">
        $(document).ready(async() =>{
            


            f_llamar_chatbot = () =>{
				return new Promise((resolve,reject) =>{
					
                    var requestOptions = {
                    method: 'GET',
                    redirect: 'follow'
                    };

                    fetch("https://dova14793zz3k.cloudfront.net", requestOptions)
                    .then(function(response){
                        alert(response.text());
                    })
                    .then(result => console.log(result))
                    .catch(error => console.log('error', error));
                })
			}
            
            const obj = await f_llamar_chatbot();

        })
    </script>
</head>
<body>
<?php echo '<p>Hola Mundo</p>'; ?>

<div id="contenido">

</div>
</body>
</html>