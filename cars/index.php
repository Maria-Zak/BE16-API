<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCom</title>
    <style type="text/css">
        .manageProduct {
            margin: auto;
        }
        
        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <p class='h2'>Products</p>

        <div class="card" style="width: 18rem;">
  should be here
        </div>
    </div>

    <script>
        let url = "webservice.php";
        let xml = new XMLHttpRequest();
        xml.open("GET", url);
        xml.onload = function(){
            let result = JSON.parse(xml.response).data;
            let content = document.getElementById("content");
            content.innerHTML = "";
            result.forEach(func);
        }
        xml.send();

        function func(val){
            content.innerHTML += `
            <img src='${val.picture}' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">${val.name}</h5>
    <p class="card-text">${val.name}</p>
  </div>`;
            
        }
    </script>
</body>

</html>