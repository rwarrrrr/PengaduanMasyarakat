<style>
@font-face {
  font-family: Lato-Regular;
  src: url('../../public/asset/fonts/Lato/Lato-Regular.ttf'); 
}

@font-face {
  font-family: Lato-Bold;
  src: url('../../public/asset/fonts/Lato/Lato-Bold.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
    margin: 0px; 
    padding: 0px; 
}

body{
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}
tr{
    margin: 10px;
}

td{
    margin-left: 10px;
}
.title{
    margin-top: 20px;
    margin-left: 20px;
    margin-bottom: 30px;
    color: white;
    text-transform: uppercase;
}
</style>
	<h1 class="title">Data Jumlah</h1>


			<table style="color: white">
               
                    <tr>
                        <th>jumlah admin</th>
                        <td>{{$admin}}</td>
                    </tr>
             
                    <tr>                        
                        <th>jumlah petugas</th>
                        <td>{{$petugas}}</td>
                    </tr>

                    <tr>
                        <th>jumlah masyarkat</th>
                        <td>{{$masyarakat}}</td>
                    </tr>

                    <tr>   
                        <th>jumlah pengaduan</th>
                        <td>{{$pengaduan}}</td>
                    </tr>

                    <tr>   
                        <th>jumlah pengaduan selesai</th>
                        <td>{{$pengaduanSelesai}}</td>
                    </tr>

                    <tr>   
                        <th>jumlah tanggapan</th>
                        <td>{{$tanggapan}}</td>
                    </tr>


            </table>

