<!DOCTYPE html>
<html>

<head>
    <title>E-Learning</title>
    <link rel="stylesheet" type="text/css" media="screen" href="w3.css" />
</head>

<body>
    <!--Logo-->
    <div class="logo"></div>

    <!--Bar-->
    <div class="bar0 w3-bar">
        <div class="bartext w3-bar-item w3-right">
            <div class="about"><a href="#">About</a></div>
        </div>
        <div class="bartext w3-bar-item w3-right">
            <div class="dashboard"><a href="#">Home</a></div>
        </div>
    </div>
    </div>

    <!--Body-->
    <div class="main">
        <div class="body w3-display-container">
            <div class="menubar w3-card-2">
                <div class="menuhead">
                    MENUHEAD
                </div>
                <div>
                    <table>
                        <tr>
                            <td><a href="#">Data Mahasiswa</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Data dosen</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">Materi</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="content w3-card-2">
                <div class="tabel">
                    <h2>Data Mahasiswa</h2>
                    <table border="2">
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <th>Jurusan</th>
                            <th>NPM</th>
                            <th>Edit</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<style>
    .main {
        width: 100%;
        height: 800px;
        background: #BFCDCD;
    }

    .logo {
        background: #EFEFEF;
        height: 200px;
        align-content: center;
        padding: 10px;
    }

    div.bar0 {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        width: 100%;
        height: 35px;
        float: left;
        background: #2c646f;
        z-index: 1;
    }

    .bartext {
        height: 35px;
        color: white;
    }

    .about {
        text-align: center;
        font-size: 10px;
    }

    .dashboard {
        text-align: center;
        font-size: 10px;
    }

    .menubar {
        position: -webkit-stick;
        position: stick;
        top: 0;
        size: 100%;
        background: #efefef;
        color: black;
        width: 30%;
        height: 300px;
        float: left;
        margin: 30px;
    }

    .content {
        size: 100%;
        background: #efefef;
        color: black;
        width: 60%;
        height: 650px;
        margin-top: 30px;
        float: left;
    }

    .menuhead {
        width: 100%;
        height: 35px;
        background: #2c646f;
        text-align: center;
        color: white;
    }

    .tabel {
        width: 100%;
        height: 100%;
        margin: 20px;
    }
</style>