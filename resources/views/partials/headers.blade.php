<style>

@font-face {
    font-family: 'Roboto';
    src: url('../fonts/Roboto.Medium.ttf');
    font-weight: normal;
    font-style: normal;
}


        .container-headers {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .text-logo {
            width:250px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto';
        }

        .logo-headers {
            width: 100%;
            text-align: center;
            margin-left: 50px;
        }

        .sosmed {
            width: 100%;
            justify-content: center;
            margin-bottom: 10px;
        }

        .search {
            width: 100%;
            justify-content: center;
        }
    @media (min-width: 576px) {
            .text-logo {
                width: 250px;
                text-align: left;
            }
            .logo-headers {
                width: auto;
                text-align: left;
                margin-left: 50px;
            }
            .sosmed {
                width: auto;
                justify-content: flex-start;
                margin-bottom: 10px;
            }
            .search {
                width: auto;
                justify-content: flex-end;
                margin-top: 10px;
            }
        }
</style>

<div class="container-headers container-fluid py-3">
    <div class="sosmed d-flex gap-3 order-1 order-sm-0">
        <a href=""><img src="{{ asset('img/Whatsapp.png') }}" alt="" width="30px"></a>
        <a href=""><img src="{{ asset('img/Instagram.png') }}" alt="" width="30px"></a>
        <a href=""><img src="{{ asset('img/Social Icons.png') }}" alt="" width="30px"></a>
    </div>
    
    <div class="logo-headers d-flex order-0 order-sm-1">
        <img src="{{ asset('img/LOGO_SMK.png') }}" alt="" width="100px">
        <h1 class="text-logo text-uppercase">SMK Negeri 1 Pasuruan</h1>
    </div>

    <div class="search d-flex order-2 order-sm-2">
        <form action="/posts" class="w-100 d-flex justify-content-center">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="cari" value="{{ request('cari') }}">
                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
</div>
