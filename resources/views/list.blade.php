<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
    <style>
          @import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
    padding: 20px;
  background-color: #e9debc;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  user-select: none;
}

.container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.card {
  border-radius: 10px;
  filter: drop-shadow(0 5px 10px 0 #ffffff);
  width: calc(50% - 10px); 
  background-color: #ffffff;
  padding: 20px;
  position: relative;
  z-index: 0;
  overflow: hidden;
  transition: 0.6s ease-in;
}

.card::before {
  content: "";
  position: absolute;
  z-index: -1;
  top: -15px;
  right: -15px;
  background: #dfd36d;
  height:220px;
  width: 25px;
  border-radius: 32px;
  transform: scale(1);
  transform-origin: 100% 100%;
  transition: transform 0.25s ease-out;
}

.card:hover::before{
    transition-delay:0.2s ;

  transform: scale(40);
}

.card:hover{
    color: #000000;

}

.card p{
    padding: 10px 0;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Garden</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Duration: Full-time</li>
                    <li class="list-group-item">Availability: {{ date('Y-m-d', strtotime('+0 days')) }} to {{ date('Y-m-d', strtotime('+1 days')) }}</li>
                    <li class="list-group-item">Price: $50/hour</li>
                </ul>
               <div class="btn">
                  <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-success">Modify</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Grocery</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Duration: Full-time</li>
                    <li class="list-group-item">Availability: {{ date('Y-m-d', strtotime('+2 days')) }} to {{ date('Y-m-d', strtotime('+3 days')) }}</li>
                    <li class="list-group-item">Price: $50/hour</li>
                </ul>
             <div class="btn">
                  <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-success">Modify</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cleaning</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Duration: Full-time</li>
                    <li class="list-group-item">Availability: {{ date('Y-m-d', strtotime('+4 days')) }} to {{ date('Y-m-d', strtotime('+5 days')) }}</li>
                    <li class="list-group-item">Price: $50/hour</li>
                </ul>
                {{-- <div class="d-flex justify-content-between mt-3">
                    <button type="button" class="btn btn-danger">&times;</button>
                    <button type="button" class="btn btn-success">+</button>
                </div> --}}
                <div class="btn">
                  <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-success">Modify</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Babysitting </h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Duration: Full-time</li>
                    <li class="list-group-item">Availability: {{ date('Y-m-d', strtotime('+6 days')) }} to {{ date('Y-m-d', strtotime('+7 days')) }}</li>
                    <li class="list-group-item">Price: $50/hour</li>
                </ul>
              <div class="btn">
                  <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-success">Modify</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">dishes</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Duration: Full-time</li>
                    <li class="list-group-item">Availability: {{ date('Y-m-d', strtotime('+8 days')) }} to {{ date('Y-m-d', strtotime('+9 days')) }}</li>
                    <li class="list-group-item">Price: $50/hour</li>
                </ul>
                <div class="btn">
                  <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-success">Modify</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
