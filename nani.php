<html>
<head>
<title>Buku Tamu Wedding :: Nani</title>
<style>
    * {
         box-sizing: border-box;
    }
    body {
        margin: 40px;
        background: #ff00cc;
        background: -webkit-linear-gradient(
            to right,
            #333399,
            #ff00cc
        );
        background: linear-gradient(
            to right,
            #333399,
            #ff00cc
        ); 
    }
    .circle1,
    .circle2 {
        background: white;
        background: linear-gradient(
            to right bottom,
            rgba(255, 255, 255, 0.9),
            rgba(255, 255, 255, 0.1)
        );
        height: 20rem;
        width: 20rem;
        position: absolute;
        border-radius: 50%;
    }

    .circle1 {
    top: 35%;
    left: -10%;
    transform: translate(-10%, -10%);
    }

    .circle2 {
        top: 70%;
        left: 80%;
        transform: translate(-50%, -50%);
    }
    
    /* Style the header */
    .header {
        display: flex;
        justify-content: space-between;
     padding: 20px 70px;
     text-align: center;
        background: white;
        background: linear-gradient(
        to right bottom,
        rgba(255, 255, 255, 0.4),
        rgba(255, 255, 255, 0.2)
        );
        backdrop-filter: blur(1rem);
        z-index: 1;
        align-items: center;
        border-radius: 5rem;
        box-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);
    }

    .grid-header {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 50%;
    }

    input[type=text], select {
        width: 100%;
        padding: 12px 20px; 
        margin: 8px 0;
        display: inline-block; 
        border: 1px solid #ccc; 
        border-radius: 15px; 
        box-sizing: border-box; 
    }
        
    input[type=submit] {
        width: 100%;
        background-color: black; 
        color: white; 
        padding: 20px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 15px; 
        cursor: pointer;
        margin-top: 3%;
    }

    input [type=submit]:hover{
        background-color: gray;
    }

    .grid {
        display: grid;
        grid-template-columns: 1fr 2fr;
        grid-gap: 50px;
        margin: 50px 0;
    }

    .card {
        text-align: center;
        background: white;
        background: linear-gradient(
        to right bottom,
        rgba(255, 255, 255, 0.4),
        rgba(255, 255, 255, 0.2)
        );
        backdrop-filter: blur(1rem);
        z-index: 1;
        align-items: center;
        border-radius: 5rem;
        box-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);
    }

    .card img {
        padding-top: 30%;
    }

    .buku-tamu {
        padding: 10px 80px;
        background: white;
        background: linear-gradient(
        to right bottom,
        rgba(255, 255, 255, 0.4),
        rgba(255, 255, 255, 0.2)
        );
        backdrop-filter: blur(1rem);
        z-index: 1;
        border-radius: 5rem;
        box-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);
    }

    .buku-tamu h2 {
        padding-bottom: 0px;
        padding-top: 10px;
    }

    .card h1 {
        padding-top: 10%;
    }

    h1 {
        font-size: 1.7rem;
        color: white;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5rem;
        text-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);
    }

    h2 {
        color: white;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.2rem;
        text-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);
    }

    p {
        font-size: 0.8rem;
        color: white;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5rem;
        text-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);
    }

    label {
        color: white;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        text-transform: uppercase;
        text-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);
    }

    textarea {
        width: 100%;
        height: 100px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 15px;
        background-color: #f8f8f6;
        font-size: 16px;
        resize: none;
    }

    .one-form {
        display: flex;
        width: 100%;
        justify-content: space-between;
    }

    #nama {
        width: 100%;
        padding-right: 5%;
    }

    #email {
        width: 100%;
    }
 
    #tamu {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    #tamu td, #tamu th {
        border: 3px solid #ddd;
        padding: 8px;
    }
    
    /* #tamu tr:nth-child(even)
    {
        background-color: #12f2f2;
    } 
     
    #tamu tr:hover{
        background-color: #ddd;
    }  */
    
    #tamu th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        /* background-color: #4CAF50; */
        color: white;
    }
</style>

<head>
<body>
<div class="circle1"></div>
<div class="circle2"></div>
<div class="header"> 
        <div class="judul">
        <img src="ww.svg">
        </div>
        <div class="jam">
        <body onload="startTime()">
        <div id="txt" style="font-size: 1.5rem; color: white; text-align: center; font-family: 'Montserrat', sans-serif; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5rem; text-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);"></div>
        <div id="txt2" style="font-size: 1.5rem; color: white; text-align: center; font-family: 'Montserrat', sans-serif; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5rem; text-shadow: 0 0 1rem rgba(0, 0, 0, 0.2);"></div>
        </div>
<script>
function startTime() {
  const today = new Date();
  const month = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
  let t =today.getDate();
  let b = month[today.getMonth()];
  let th =today.getFullYear();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  t + " " + b + " " + th;
  document.getElementById('txt2').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};
  return i;
}
</script>
</div> 

<div class="grid">
<div class="card">
    <h1>Selamat Datang</h1>
    <p>Di Nikahan Ziro & Zirro</p>
    <h2>NIKAH DLU BARU KAWIN</h2>
    <img src="ka.svg">
</div>
    <div class="buku-tamu">
    <h2>Buku Tamu</h2> 
        <div> 
            <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
                <div class="one-form">
                <div id="nama">
                <label>Nama</label> 
                    <input type="text" name="fnama" placeholder="Nama anda.."> 
                </div>
                <div id="email">
                <label>Email</label> 
                    <input type="text" name="femails" placeholder="Email.."> 
                </div>
                </div>
                <label>Instansi</label> 
                    <select id="inst" name="finstansi"> 
                        <option value="Universitas Lampung">Universitas Lampung</option> 
                        <option value="Universitas Bandar Lampung">Universitas Bandar Lampung</option> 
                        <option value="Institut Teknologi Sumatra">Institut Teknologi Sumatra</option>
                    </select>
                
                <label>Pesan</label> 
                   <textarea name="fpesan"></textarea> 
                
                <input type="submit" value="Submit">
            </form> 
        </div> 
        </div>
</div>
</body> 
<div> 
            <<?php if (isset($_POST['fnama'])){ 
                $nama=$_POST['fnama']; 
                $email=$_POST['femails']; 
                $inst=$_POST['finstansi']; 
                $pesan=$_POST['fpesan'];
                $t=time();
                $tt=date("Y-m-d",$t);
            
                echo "<h1>Daftar Tamu</h1>";
                echo "<table id='tamu'>";
                echo "<tr><th>Nama</th><th>Email</th><th>Instansi</th><th>Pesan</th><th>Tanggal</th></tr>";
                echo "<tr><td>$nama</td><td>$email</td><td>$inst</td><td>$pesan</td><td>$tt</td></tr>";
            }
            ?>
        </div> 
</html>