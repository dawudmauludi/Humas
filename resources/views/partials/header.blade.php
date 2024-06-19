<style>
   @font-face {
    font-family: 'Roboto';
    src: url('../fonts/Roboto-Bold.ttf');
    font-weight: normal;
    font-style: normal;
}

   
   
   .container-beranda {
    width: 100%;
    height: auto;
    background-color: #599DDC;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px;
    /* box-sizing: border-box; */
}

.waktu-sekarang, .hari-sekarang {
    width: auto;
    padding: 10px;
    background-color: rgba(95, 208, 188, 26%);
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 5px 0;
    color: white;
    font-weight: bold;
    font-family: 'Roboto',serif;
}

.marquee-container {
    width: 800px;
    overflow: hidden;
    white-space: nowrap;
    font-family: 'Roboto',serif;
}

@media (max-width: 600px) {
        .container-beranda {
          display: none;
        }

        .carousel{
            width: 100%;
            height: 500px;
        }

        .waktu-sekarang, .hari-sekarang {
            margin: 0;
        }

        .hari-sekarang{
            width: 50px;
        }

        .marquee-container {
            width: auto;
        }
    }

</style>

<div class="container-beranda mb-2">
    <div class="hari-sekarang text-white fw-bold"></div>
    <div class="marquee-container">
        @auth
        <marquee class="text-light fw-bold fs-4 text-uppercase">selamat datang di website humas smkn 1 pasuruan</marquee>
        @else
        <marquee class="text-light fw-bold fs-4 text-uppercase">selamat datang di website humas smkn 1 pasuruan</marquee>
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
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        const currentDate = now.getDate();
        const currentMonth = months[now.getMonth()];
        const currentYear = now.getFullYear();
        const currentDay = days[now.getDay()];
        const fullDate = `${currentDay}, ${currentDate} ${currentMonth} ${currentYear}`;
        document.querySelector('.hari-sekarang').textContent = fullDate;
    }

    updateTime();
    updateDay();
    setInterval(updateTime, 1000);
</script>
