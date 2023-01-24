
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-3">Update Data</h1>
        <form method="POST" action="" id="regform">
        
            <div class="mb-3">
                <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id'] ?>">
                <label for="name" class="form-label">NAME</label>
                <input type="name" class="form-control" id="name" name="name"  >
            </div>
            <div class="mb-3">
                
                <label for="name" class="form-label">phone</label>
                <input type="tel" class="form-control" id="phone" name="phone"  >
            </div>
           
           
            <div class="div mb-3"> <input class="btn btn-secondary" type="submit" value="Update" name="submit"></div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script>

       
const xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","display.php?id=<?php echo $_REQUEST['id']?>;",true);
  xmlhttp.setRequestHeader("Content-Type","application/json");
  xmlhttp.onload = function(){
   
 const data =JSON.parse(this.responseText);



 
 let id = document.getElementById('id');
 let name = document.getElementById('name');
 let phone = document.getElementById('phone');

 data.forEach(val=>{


     id.value = val.id;
     name.value = val.name;
    phone.value =val.phone;



 })


//     id.value = idVal.nodeValue;
//     name.value = nameVal.nodeValue;
//     phone.value = phoneVal.nodeValue;

//  }
  }
  xmlhttp.send();
  </script>

<script>
const Regfrom = document.getElementById('regform');
    regform.addEventListener("submit",(e)=>{
        e.preventDefault();
      
 const id = document.getElementById("id");
 const name = document.getElementById("name");
 const phone = document.getElementById("phone");
//  var  xml =`<query><author>${name.value}</author></query>
//  <query><author>${phone.value}</author></query>`;
//  console.log(xml);
  var  data ={
   id:id.value, 
  name:name.value,
  phone:phone.value,

  };

const xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST","update.php?id=<?php echo $_REQUEST['id'];?>",true);
xmlhttp.setRequestHeader("Content-Type","application/json");
// xhttp.setRequestHeader("Content-Type", "application/xml");

xmlhttp.onload = function(){
  console.log(this.response);
   location.href = './viewform.php'
  name.value= '';
  phone.value ='';

}

// var  xml =`<details><name>${name.value}</name></details>
// <details><phone>${phone.value}</phone></details> `;

 xmlhttp.send(JSON.stringify(data));
});
    </script>
</body>

</html>