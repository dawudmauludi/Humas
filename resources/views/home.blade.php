@extends('layout.main')

<style>
    .container-beranda{
        width: 100%;
        height: auto;
        background-color: rgb(109, 109, 216);
        display: flex;
        flex-direction: column; /* Adjust to column layout for smaller screens */
        justify-content: space-between;
        align-items: center;
        padding: 10px; /* Add padding for better spacing */
        box-sizing: border-box;
    }

    .waktu-sekarang, .hari-sekarang {
        width: 100px;
        height: 40px;
        background-color: red;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 5px 0; /* Add margin for spacing between elements */
    }

    .marquee-container {
        width: 100%;
        overflow: hidden; /* Hide overflow */
        white-space: nowrap; /* Prevent wrapping */
    }

    marquee {
        display: block;
        width: 100%;
    }

    @media (min-width: 600px) {
        .container-beranda {
            flex-direction: row;/* Switch to row layout for larger screens */
        }

        .waktu-sekarang, .hari-sekarang {
            margin: 0; /* Remove margin for larger screens */
        }

        .marquee-container {
            width: auto;
        }
    }
</style>

@section('container')
<div class="container-beranda">
    <div class="hari-sekarang text-white fw-bold"></div>
    <div class="marquee-container">
        @auth
        <marquee behavior="" direction="" class="text-light fw-bold fs-4 text-uppercase">"Hallo Selamat Datang Di Wemas, {{ auth()->user()->name }}"</marquee>
        @else
        <marquee behavior="" direction="" class="text-light fw-bold fs-4 text-uppercase">Hallo Selamat Datang Di Wemas</marquee>
        @endauth
    </div>
    <div class="waktu-sekarang text-white fw-bold"></div>
</div>

<script>
    function updateTime() {
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        const currentTime = `${hours}:${minutes}:${seconds}`;
        
        document.querySelector('.waktu-sekarang').textContent = currentTime;
    }

    function updateDay() {
        const now = new Date();
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const currentDay = days[now.getDay()];
        
        document.querySelector('.hari-sekarang').textContent = currentDay;
    }

    // Update the time immediately and then every second
    updateTime();
    updateDay();
    setInterval(updateTime, 1000);
</script>

@endsection
