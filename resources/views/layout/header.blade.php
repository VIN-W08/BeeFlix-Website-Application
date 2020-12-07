<style>

    .title{
        font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
        font-weight: 500;
    }

    .btn_kembali{
        background-color: black;
        border: solid transparent;
        color: white;
        font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
        font-weight: 500;
        height: 25px;
    }

    .btn_kembali:hover{
        background-color: white;
        color: black;
    }

    .btn_lihat_semua_film{
        margin-left: -3.7px;
        height: 25px;
        background-color: white;
        border: solid transparent;
        color: black;
        font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
        font-weight: 500; 
    }

    .btn_lihat_semua_film:hover{
        background-color: black;
        color: white;
    }

</style>

<h1 class="title">BeeFlix</h1>
<a href="{{ url()->previous() }}">
    <button class="btn_kembali">KEMBALI</button>
</a>
<a href="/">
    <button class="btn_lihat_semua_film">LIHAT SEMUA FILM</button>
</a>