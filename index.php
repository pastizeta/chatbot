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
					
                    let headers = new Headers();

                    headers.append('Content-Type', 'text/html');
                    headers.append('Accept', 'text/html');
                    headers.append('Origin','https://afternoon-bayou-48837.herokuapp.com/');

                    fetch('https://dova14793zz3k.cloudfront.net', {
                        mode: 'no-cors',
                        credentials: 'include',
                        method: 'OPTIONS',
                        headers: headers
                    })
                    .then(response => response.json())
                    .then(json => console.log(json))
                    .catch(error => console.log('Authorization failed : ' + error.message));
				})
			}
            
            const obj = await f_llamar_chatbot();
        })
    </script>
</head>
<body>
<?php echo '<p>Hola Mundo</p>'; ?>
</body>
</html>