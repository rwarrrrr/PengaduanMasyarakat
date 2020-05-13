<style type="text/css">

@font-face {
  font-family: Lato-Regular;
  src: url('../fonts/Lato/Lato-Regular.ttf'); 
}

@font-face {
  font-family: Lato-Bold;
  src: url('../fonts/Lato/Lato-Bold.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
    margin: 0px; 
    padding: 0px; 
    box-sizing: border-box;
}

body{
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

.column0 {
  width: 5%;
}    

.column1 {
  width: 20%;
}

.column2 {
  width: 25%;
}

.column3 {
  width: 20%;
}

.column4 {
  width: 15%;
}

.column5 {
  width: 15%;
}


.title{
    margin-top: 20px;
    margin-left: 20px;
    margin-bottom: 30px;
    color: white;
    text-transform: uppercase;
}


.table100.ver3 th {
  font-family: Lato-Bold;
  line-height: 1.4;
  text-transform: uppercase;
}

.table100.ver3 td {
  font-family: Lato-Regular;
  line-height: 1.4;
}


/*---------------------------------------------*/

.table100.ver3 {
  overflow: hidden;
  box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -o-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
  -ms-box-shadow: 0 0px 40px 0px rgba(0, 0, 0, 0.15);
}

.table100.ver3 .ps__rail-y {
  right: 5px;
}

.table100.ver3 .ps__rail-y::before {
  background-color: #4e4e4e;
}

.table100.ver3 .ps__rail-y .ps__thumb-y::before {
  background-color: #1161ee;
}


.container th h1 {
    font-weight: bold;
    font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
          box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
    text-align: left;
    overflow: hidden;
    width: 100%;
    margin: 0 auto;
  display: table;
}

.container td, .container th {
    padding-bottom: 2%;
    padding-top: 1%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3446;
}

.container th {
    background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
     -moz-box-shadow: 0 6px 6px -6px #0E1119;
          box-shadow: 0 6px 6px -6px #0E1119;
}



</style>
	<h1 class="title">data masyarakat</h1>


            <div class="table100 ver3 m-b-110" style="margin-top: 20px;">
                <div class="table100-head">
                    <table class="container">
                        <thead>
                            <tr>
                                <th class="cell100 column0"><h1>No</h1></th>
                                <th class="cell100 column1"><h1>NIK</h1></th>
                                <th class="cell100 column2"><h1>Nama</h1></th>
                                <th class="cell100 column3"><h1>Username</h1></th>
                                <th class="cell100 column4"><h1>Telp</h1></th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll">
                    <table class="container">
                        <tbody>
                            @foreach($masyarakat as $row)
                                <tr>
                                    <td class="cell100 column0">{{isset($i)? ++$i : $i = 1 }}</td>
                                    <td class="cell100 column1">{{$row->nik}}</td>
                                    <td class="cell100 column2">{{$row->nama}}</td>
                                    <td class="cell100 column3">{{$row->username}}</td>
                                    <td class="cell100 column4">{{$row->telp}}</td>
                                </tr>
                            @endforeach
                        </tbody>    
                    </table>
                </div>
            </div>

