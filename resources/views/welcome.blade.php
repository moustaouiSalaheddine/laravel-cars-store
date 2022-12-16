<html>
<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Racing+Sans+One&display=swap");

        *,
        *::before,
        *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        :root {
        --green1: #61b15a;
        --green2: #48b83e;
        --green2op: #48b83ee8;
        --greenBorder: #008000;
        /* --green1: #830000;
        --green2: #830000;
        --green2op: #830000e8;
        --greenBorder: #830000; */
        --red: #1e90ff;
        --white: #ffffff;
    }
        body {
        width: 100vw;
        height: 100vh;
        background-color: #747474;
        font-family: "Poppins", sans-serif;
        }

        .bugatti_main {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* width: 1200px;
        height: 700px; */
        background-color: #000;
        border-radius: 20px;
        box-shadow: 2.67997px 5.35993px 26.7997px rgba(0, 0, 0, 0.67);
        overflow: hidden;
        }

        .bugatti_bgImage {
        background-image: url(https://images.hdqwalls.com/wallpapers/black-bugatti-chiron-jg.jpg);
        background-size: cover;
        width: 100%;
        height: 100%;
        border-radius: 20px;
        filter: brightness(80%);
        }

        .bugatti_gradient {
        position: absolute;
        bottom: 0;
        background: linear-gradient(
            180deg,
            rgba(0, 0, 0, 0) 0%,
            rgba(0, 0, 0, 0.721) 100%
        );
        width: 100%;
        height: 300px;
        border-radius: 0 0 20px 20px;
        }

        .bugatti_nav {
        position: absolute;
        top: 20px;
        left: 30%;
        display: flex;
        gap: 40px;
        align-items: center;
        opacity: 0;
        animation: fade-in 0.5s linear forwards;
        animation-delay: 2.5s;
        }

        .bugatti_nav img {
        width: 70px;
        }

        .bugatti_nav p {
        font-size: 13px;
        font-weight: 700;
        }

        .bugatti_nav p:hover {
        cursor: pointer;
        color: var(--green1);
        }

        /* ----------------------------------------------- */

        .bugatti_make {
        position: absolute;
        top: 20%;
        left: 5%;
        font-size: 40px;
        font-weight: 400;
        opacity: 0;
        animation: fade-in 0.5s linear forwards;
        animation-delay: 0.5s;
        }

        .bugatti_model {
        position: absolute;
        top: 22%;
        left: 5%;
        font-size: 120px;
        font-weight: 700;
        color: var(--green1);
        text-shadow: 4.13753px 4.13753px 8.27506px #252525;
        opacity: 0;
        animation: fade-in 0.5s linear forwards;
        animation-delay: 1s;
        }

        .bugatti_btn {
        position: absolute;
        top: 50%;
        left: 5%;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.224);
        padding: 10px 60px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 16px;
        opacity: 0;
        animation: move-down 0.5s linear forwards;
        animation-delay: 1.5s;
        }

        .bugatti_btn:hover {
        cursor: pointer;
        background-color: var(--green1);
        color: #fff;
        }

        @keyframes move-down {
        100% {
            opacity: 1;
        }
        }

        /* --------------------------------------------- */

        .bugatti_about {
        position: absolute;
        bottom: 12%;
        left: 5%;
        width: 50%;
        opacity: 0;
        animation: fade-in 1s linear forwards;
        animation-delay: 1.5s;
        }

        .bugatti_about h3 {
        font-weight: 700;
        font-size: 25px;
        color: #fff;
        }

        .bugatti_about p {
        color: #cbcbcb;
        font-weight: 600;
        font-size: 13px;
        line-height: 20px;
        }

        @keyframes fade-in {
        100% {
            opacity: 1;
        }
        }

        /* ---------------------------------------- */

        .bugatti_spec {
        position: absolute;
        bottom: 10%;
        right: -25%;
        display: flex;
        gap: 10px;
        opacity: 0;
        scale: 0;
        animation: move-up 0.3s linear forwards;
        animation-delay: 2s;
        }

        .bugatti_info {
        background: var(--green1);
        box-shadow: 3.31002px 3.31002px 41.3753px #452828;
        backdrop-filter: blur(20.6877px);
        width: 140px;
        height: 110px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        }

        .bugatti_info p {
        font-weight: 400;
        font-size: 14px;
        color: #ffffff;
        }

        .bugatti_info h3 {
        font-weight: 400;
        font-size: 25px;

        color: #ffffff;
        font-family: "Racing Sans One", cursive;
        }

        @keyframes move-up {
        100% {
            right: 5%;
            opacity: 1;
            scale: 1;
        }
        }

        /* ------------------------------------------- */

        .bugatti_social {
        position: absolute;
        top: 40%;
        right: -30px;
        opacity: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
        animation: slide-in 0.2s linear forwards;
        animation-delay: 2s;
        }

        .bugatti_social img {
        width: 25px;
        }

        @keyframes slide-in {
        100% {
            right: 20px;
            opacity: 1;
        }
        }

    </style>
</head>
<body>
  <main class="bugatti_main">
    <div class="bugatti_bgImage"></div>
    <div class="bugatti_gradient"></div>
    <div class="bugatti_nav">
      <p>Models</p>
      <p>Discover</p>
      <img src="https://pngimg.com/uploads/bugatti_logo/bugatti_logo_PNG11.png" alt="" />
      <p>Company</p>
      <p>About</p>
    </div>
    <h3 class="bugatti_make">LUXURY</h3>
    <h1 class="bugatti_model">CARS</h1>
    {{-- <div class="bugatti_btn" style="margin-top: 65px">
      <p>Discover more</p>
    </div> --}}
    <a href="/products">
        <div class="bugatti_btn">
          <p>Discover more</p>
        </div>
    </a>
    <div class="bugatti_about">
      <h3>UNCOVERING A NEW DIMENSION</h3>
      <p>
        Its sophisticated design, innovative technology, and iconic,
        performance-oriented form make it a unique masterpiece of art, form
        and technique, that pushes boundaries beyond imagination.
      </p>
    </div>
    <div class="bugatti_spec">
      <div class="bugatti_info">
        <p>0-60</p>
        <h3>2.4s</h3>
      </div>
      <div class="bugatti_info">
        <p>POWER</p>
        <h3>1500hp</h3>
      </div>
      <div class="bugatti_info">
        <p>TOP SPEED</p>
        <h3>236mph</h3>
      </div>
    </div>
    <div class="bugatti_social">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAABmJLR0QA/wD/AP+gvaeTAAADXElEQVRoge3aS4gcRRjA8d+uURdBJZIsgfgg6CEeREVzEWVFfHtRPIgKCoIHLwmIqAfFCB5F9CKiRkQFUfBBxIBPIglsXFgficZIID5BTRSNMbhrYsZD9cg4zPRW13TNLNJ/+A47W/3199/ura7+amhoaGhoaGho6M3yIv63rMIDmMU8WkXM4SPcV4yJYTKlgGNSDkrgeDzmv5L9Yh4P44QeecZxDaZxXkohG3FJyoEVWIXtFhbtju04RZA8Bw9id/G7d1MKWV0cvB/nptoswCS+Vl22Hfvwc9dnB3F6SjH3diTZi/PTnPoyji3SZXvFIVzXcY4lVQp6pSvZAVyeYtaHm9Ur+zuuF/6QF+Jx3F2loOkeSeexDmOplh18GSERG0ewSbhjDhSfbcbRVQqaLTnBG1iWKApnDSAXE59jadWi3lkg6Y+4TbiFqnJnJtGWMHuvSKjJI5EnmMFUxdyPZhBt4S0JV7bNlRVPNoMbxM2Mz2eQ3YKjUmUJ//Apz8h9eFKY0ftNGrF3T5XYGCNVdjUO4SE8FZOog2W4vYg/hTXwDD7Bt/gBv1TMGcNcHUnG8LZ8E0yd8UyMUNkMO1kkuhE7YpKNmN9iBpUJf4DXcRFuwns1FJWTrwZN0L3O/cvwb9MqcVWMVNkV3tb1c6Vl2gj4LGZQmfCmmgoZBt/gu5iBZcKb8Wkt5eRna+zAMuGW8HrVGric/LxZZ7Jc6966Yk7v/lYy43huEYj1i9fqlG0zJrz4x3QVhx2X5hBucwY24I9FINrCThW7L7GvUxO4Aydij9BRWC30k0fJXTI+SbYa/RXtjB3Sui3RXLYIJDvj6pyybZ4dkVx3vJhbtM2E0d/aew3WMa3MccKzbxSyh9W7GVCJW4RF+zCF7xmKWQlLcC2ewIf4ST7ZDerZ8aiNC/CFPLIvGbAFWyftzey/5ZF92iKRXYH1Qss1h+iRIv9IORm34lV5e1zf44ocAr0mgSlhIpoXJqWTcKqwdl6Zo4guXsBa/DqEc/3LmXhZvivYK6ZV35SrnSlhzybXhHRYaM9EtViHyWnCQ39WmEwGldyG+4Vv4QyVlAf5clyMNThbaAqsxLE9xh4UJqCd2IWP8b48m2lR1LlyWSpITwhfddov3A0NDQ0NDQ0NDeAfd+HWzDcrUEUAAAAASUVORK5CYII=" />
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAABmJLR0QA/wD/AP+gvaeTAAABNUlEQVRoge3XMUoDURCA4S+i2EnQ0tLS1toUegAbvYFXsBE8g72FlZXgCbyJOYCCIIqVCrEQbIRkMS+zz+d8kCpkZ35eyG5IKaVUr0FPc9dwiBF2sIF1TPCKN7zgHue46WfN+S3jDE++4rq8TksvEGWIa+wHzvxhKWjOAJd6jiUu+BgHQbOmighewknAnE4igvewFTCnk4jgUcCMqtyafeu5wDZWe9qxqLHpsVf9rbYYj6YH7/a32mK8mx68GblMxLP0ZMb7K/gI2AN1BIf+gYl60qpGBv/CrHvsvJ8/KrDjt79wwuOSFyvxg9HlFOcxxHOpi9V+wg8KxlJ/cNGvM/UH35W+YO3B/+6Eiwfno2XrMrh1Gdy6DG5dBrcug1uXwa3L4NZlcOsyuHUZ3LoMTimllPrzCRiEVYOkrlJ4AAAAAElFTkSuQmCC" />
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAABmJLR0QA/wD/AP+gvaeTAAADRUlEQVRoge2aS08UQRDHfwuIB0DOKETRxKCAIVwJqDcfB1GiX4CIRz+JRgTxc6wSPACaSHycjAlPbwYQX1wEPJBg1kPtJmvt7uxOdS/bJvNPKtnJTlX3b/ox1T0NiRIlSpQoXKUc/fuBYWAQaAPagSbXSin9BjaAr8ACkAY+eC4jUingNvAJyNTIVoER3BusrE4D72oIqu0t0Fkt2AHgewCQ2raBy75hLwL7AcCVsn1gyBfsKeBHAFCVtPQZV9gU8D4AmErtDY4T2Z0AIOLaLStsClgLACBn08AJ5F0/E3HfqhW4PwDIfGvPq1tHmXv7SkHVRQDfiH4eQWvY4vSK2rdqvs0grdwBvChz77wF2GfquA5MAFeALiTfbsr+vgpMIvmyr/LWLMC7HgreBMaAhgrKq0Ny9M8eyt21ALsWmgZaDOW2AM88lB9bLoU9JnpCLKc6ZAj8F8BpisP2AuPAErCXtSXgEdBTAtqlpQ8FeJPCbnwUmAL+RPgdIBNXo/I9BmyFDDxaBPZlDP/5ItBjoQKvA/UqxlNDnAkVowHpOcEB64r2Et2No7p3t4r1xBewy0yqNaOuR43x6ykcGjp2VRT3iZ5V/suGGDlbVLG6DDGqDtys/F0ytR0Vq9kXsM8urXcaTE+5hK+3evoEblPXGw6x1tX1cYdY/8gnsN5Am3WIpX2dN+cqUdwxM6n8e5BXjOW1dF7FmjLEqTrwBoXLwElDnHEVI9jEIwPcVTEagbkY/rPAERXjnrEuhwL8hcLFQyOShUV17wOkZTVsK/LVMFjgDLKkKzYZdgMPkaRiN2uLwAMKxyzZGNMO9Tg04AzSoq4bAJbxXzPgDPAcWc/GVStuLWsG3vFQ6E/gPpVt4jUga1/rgj/fflmAfW7TbiLv0mvAOSQ3bs7+vp79z/LqKWWmbdo4OxWh2VwpqKiJZaGSpxKoXlucQvuYFscuWIBD+1xaqS1bYHMaCQAgrpm+HOaUQo4R1BqiUvMy75wkzONK2raRc2ReNET4x5YGfcHmNAB8CwCuWMte8g2bUydhjekFZMhVVSnkaNBKDUFXgJvWyruoDzn8MoTsLLZTuD/tqj0kz95CMqg08NFzGYkSJUqUKAj9BfADL50ftAR1AAAAAElFTkSuQmCC" />
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAABmJLR0QA/wD/AP+gvaeTAAACNklEQVRoge3ay04UQRSA4Q/iBUUTYzQxBnCjCLpnT3wPli58CpduVMA30J1vgIlb3Wo0XuIK0ajRuAHECxcXXR1gmNHpoaemh64/OelMJVN1/nRXd3X1IZFIJBKJRK8YKLGfc7iA0RBjGMEZnA5xHIdwMvxvGev4ge8hvuEDFrEU4j0+Y6uMRIswhIkQVzAZjhdxZL/J/IffeIfXIV7hTYifZQ40jtt4LjsbWxWLdbzErOwEdMxQ6GSjAlLtxibmQu6FZRcqINBpPCoqfa8CSe835tuVndRfl3Gr2MDVRrnBJsI3WrT3G4O43qyxkWvdzyUae1yaPYdXMNz9XKKwihM7G5oJb8XJJRq7HA/CXC1EDOG1CGO0TQzhcTxQ4alS9vMwZwpPutB/u+NHFya7gczgU12Ec4ZxUza/ayGcM4r7dRLOmcazOgmTPTFm8KUuwjmncEu2bVML4ZxxPCx7/KovLY/FGKTXZ7g2l3StblrTsm3gsseunPCYmiw8arO0rNXLwxSeRhTtmfCIbJ5u9kB2j3CMTbw1kRYQLRho+SNQtnCvSbuWjaxGz6J7LDc2NBNejJBILPa4NBN+HCGRWLTlcqA/l7ZivgIJ7zfm2pWl/0seFnRY59GPRS2zncjuZAJ38EK1y5buhlz/SSeFaZdDx1fDcRKXcLRgX0X5pXlh2lsFCtPKLj3Myw3HZGWI53HWdunhMA7b/iq/gj+yxU5eevgVH+0uPVxSUulhIpFIJBKJ3vEXo/jD/NCF9XUAAAAASUVORK5CYII=" />
    </div>
  </main>
</body>

</html>