<html>
<head>
<title>Buku Tamu Wedding :: Nani</title>
<style>
    * {
         box-sizing: border-box;
    }
    body {
         margin: 0;
    }
    /* Style the header */
    .header {
     background-color: #f1f1f1;
     padding: 20px;
     text-align: center;
    }
    
    input[type=text], select {
        width: 100%;
        padding: 12px 20px; 
        margin: 8px 0;
        display: inline-block; 
        border: 1px solid #ccc; 
        border-radius: 4px; 
        box-sizing: border-box; 
    }
        
    input[type=submit] {
        width: 100%;
        background-color: #4CAF50; 
        color: white; 
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px; 
        cursor: pointer;
    }

    input [type=submit]:hover{
        background-color: #45a049;
    }

    .grid {
        display: grid;
        grid-template-columns: 1fr 2fr;
        grid-gap: 2px;
        background-color: #2196F3;
        padding: 2px;
    }

    .row h2 {
        text-align: center;
    }

    .column {
        padding: 10px 80px;
    }

    .column h2 {
        padding-bottom: 0px;
    }

    div{
        border-radius: 5px;
        background-color: #f2f2f2;
        /* padding: 20px; */
    }

    textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f6;
        font-size: 16px;
        resize: none;
    }
 
    #tamu {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    #tamu td, #tamu th {
        border: 1px solid #ddd;
        padding: 8px;
    }
    
    #tamu tr:nth-child(even)
    {
        background-color: #12f2f2;
    } 
     
    #tamu tr:hover{
        background-color: #ddd;
    } 
    
    #tamu th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>
<head>
<body>
<div class="header"> 
    <h1>Selamat Datang</h1> 
        <p>Di Nikahan Ziro & Zirro</p> 
        <body onload="startTime()">
<div id="txt"></div>
<div id="txt2"></div>
<script>
function startTime() {
  const today = new Date();
  let t =today.getDate();
  let b =today.getMonth();
  let th =today.getFullYear();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  t + "/" + b + "/" + th;
  document.getElementById('txt2').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</div> 
<div class="grid">
<div class="row">
    <h2>NIKAH DLU BARU KAWIN</h2>
</div>
    <div class="column"> 
    <h2>Buku Tamu</h2> 
        <div> 
            <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
                <label>Nama</label> 
                    <input type="text" name="fnama" placeholder="Nama anda.."> 
                
                <label>Email</label> 
                    <input type="text" name="femails" placeholder="Email.."> 
                
                <label>Provinsi</label> 
                    <select id="prov" name="fprovinsi"> 
                        <option value="Jawa Tengah">Jawa Tengah</option> 
                        <option value="Jawa Barat">Jawa Barat</option> 
                        <option value="Jawa Timur">Jawa Timur</option>
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
            <?php if (isset($_POST['fnama'])){ 
                $nama=$_POST['fnama']; 
                $email=$_POST['femails']; 
                $prov=$_POST['fprovinsi']; 
                $pesan=$_POST['fpesan'];
                $t=time();
                $tt=date("Y-m-d",$t);
            
                echo "<h1>Daftar Tamu</h1>";
                echo "<table id='tamu'>";
                echo "<tr><th>Nama</th><th>Email</th><th>Provinsi</th><th>Pesan</th><th>Tanggal</th></tr>";
                echo "<tr><td>$nama</td><td>$email</td><td>$prov</td><td>$pesan</td><td>$tt</td></tr>";
            }
            ?>
        </div> 
</html>