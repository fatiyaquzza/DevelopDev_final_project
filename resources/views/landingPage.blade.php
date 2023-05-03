<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <title>INF FAP</title>

    <style>
        #menu-toggle:checked+#menu {
            display: block;
        }

        #dropdown-toggle:checked+#dropdown {
            display: block;
        }
    </style>

</head>


<body class="bg-sky-100">
    <x-header />

    <main class="relative">
        <section class="relative px-4 py-16 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:pb-12">
            <div class="flex flex-col lg:flex-row lg:-mx-8">
                <div class="w-full lg:w-1/2 lg:px-8 text-justify lg:mt-20">
                    <h2 class="text-3xl leading-tight font-bold mt-4">Welcome to the archives of informatic student
                        final assignments!</h2>
                    <p class="text-lg mt-4 font-semibold">Here, you can find a collection of various final assignments
                        completed by informatics students. </p>
                    <p class="mt-2 leading-relaxed">We have a diverse and interesting collection of final assignments
                        from various fields of interest, ranging from software engineering, data mining, networking, and
                        geographic information systems.</p>
                </div>

                <div class="w-full lg:w-1/2 lg:px-8 mt-12 lg:mt-0">

                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 823 823" viewBox="0 0 823 823"
                        id="software-engineer">
                        <path fill="#cce9ff"
                            d="M563.1 81.9C476 24.5 353.6 36.1 276.6 121.3c-42.1 46.6-59.2 110.7-102.9 156.3-49.2 51.4-108 101.3-130.3 171.3-23.7 74.4-2.9 159.7 50.1 216.6 64.5 69.2 159.3 48.4 248.9 47.3C709.3 708.2 982 463.3 635 161.4c-29-25.4-43.1-60.6-71.9-79.5z"
                            opacity=".63"></path>
                        <path fill="#0b4870"
                            d="M727.5 121.6h-619c-12.4 0-22.5 10-22.5 22.4v426.3h664V144c0-12.4-10.1-22.4-22.5-22.4z">
                        </path>
                        <path fill="#0e538c"
                            d="M726.7 131H109.3c-7.7 0-13.9 6.2-13.9 13.9V564h645.2V144.9c0-7.7-6.2-13.9-13.9-13.9z">
                        </path>
                        <path fill="#0b4870" d="M118.6 162h598.8v387.1H118.6z"></path>
                        <path fill="#f6f6f6"
                            d="M421.4 148.4c0 1.9-1.5 3.4-3.4 3.4s-3.4-1.5-3.4-3.4 1.5-3.4 3.4-3.4c1.9.1 3.4 1.6 3.4 3.4z">
                        </path>
                        <path fill="#ffbe55" d="M193.7 183.4h60V194h-60z"></path>
                        <path fill="#cce9ff"
                            d="M139.5 183.4h24.7V194h-24.7zM139.5 202.8h24.7v10.6h-24.7zM139.5 225.8h24.7v10.6h-24.7zM139.5 248.7h24.7v10.6h-24.7zM139.5 271.7h24.7v10.6h-24.7zM139.5 294.6h24.7v10.6h-24.7zM266.1 183.4h201.3V194H266.1z">
                        </path>
                        <path fill="#ffbe55" d="M214.9 202.8h60v10.6h-60z"></path>
                        <path fill="#cce9ff" d="M287.3 202.8h201.3v10.6H287.3z"></path>
                        <path fill="#ffbe55" d="M250.3 225.8h60v10.6h-60z"></path>
                        <path fill="#cce9ff" d="M322.7 225.8H524v10.6H322.7z"></path>
                        <path fill="#ffbe55" d="M285.6 248.7h60v10.6h-60z"></path>
                        <path fill="#cce9ff" d="M358 248.7h201.3v10.6H358z"></path>
                        <path fill="#ffbe55" d="M250.3 271.7h60v10.6h-60z"></path>
                        <path fill="#cce9ff" d="M322.7 271.7H630v10.6H322.7z"></path>
                        <path fill="#ffbe55" d="M214.9 294.6h60v10.6h-60z"></path>
                        <path fill="#cce9ff" d="M287.3 294.6H418v10.6H287.3z"></path>
                        <path fill="#ffbe55" d="M193.7 324.7h60v10.6h-60z" opacity=".4"></path>
                        <path fill="#cce9ff"
                            d="M139.5 324.7h24.7v10.6h-24.7zM139.5 344.1h24.7v10.6h-24.7zM139.5 367.1h24.7v10.6h-24.7zM139.5 390h24.7v10.6h-24.7zM139.5 413h24.7v10.6h-24.7zM139.5 435.9h24.7v10.6h-24.7zM266.1 324.7h201.3v10.6H266.1z"
                            opacity=".4"></path>
                        <path fill="#ffbe55" d="M214.9 344.1h60v10.6h-60z" opacity=".4"></path>
                        <path fill="#cce9ff" d="M287.3 344.1h201.3v10.6H287.3z" opacity=".4"></path>
                        <path fill="#ffbe55" d="M250.3 367.1h60v10.6h-60z" opacity=".4"></path>
                        <path fill="#cce9ff" d="M322.7 367.1H524v10.6H322.7z" opacity=".4"></path>
                        <path fill="#ffbe55" d="M193.7 465.9h60v10.6h-60z" opacity=".4"></path>
                        <path fill="#cce9ff"
                            d="M139.5 465.9h24.7v10.6h-24.7zM139.5 485.4h24.7V496h-24.7zM139.5 508.3h24.7v10.6h-24.7zM266.1 465.9h201.3v10.6H266.1z"
                            opacity=".4"></path>
                        <path fill="#ffbe55" d="M214.9 485.4h60V496h-60z" opacity=".4"></path>
                        <path fill="#cce9ff" d="M287.3 485.4h201.3V496H287.3z" opacity=".4"></path>
                        <path fill="#ffbe55" d="M250.3 508.3h60v10.6h-60z" opacity=".4"></path>
                        <path fill="#cce9ff" d="M322.7 508.3H524v10.6H322.7z" opacity=".4"></path>
                        <path fill="#ffbe55" d="M285.6 390h60v10.6h-60z" opacity=".4"></path>
                        <path fill="#cce9ff" d="M358 390h307.3v10.6H358z" opacity=".4"></path>
                        <path fill="#ffbe55" d="M250.3 413h60v10.6h-60z" opacity=".4"></path>
                        <path fill="#cce9ff" d="M322.7 413H524v10.6H322.7z" opacity=".4"></path>
                        <path fill="#ffbe55" d="M214.9 435.9h60v10.6h-60z" opacity=".4"></path>
                        <path fill="#cce9ff" d="M287.3 435.9h201.3v10.6H287.3z" opacity=".4"></path>
                        <path fill="#d3d3d3"
                            d="M794.1 562.7H41.9c-4.3 0-7.9 3.5-7.9 7.9v10.2c0 4.3 3.5 7.9 7.9 7.9h752.3c4.3 0 7.9-3.5 7.9-7.9v-10.2c-.1-4.4-3.6-7.9-8-7.9z">
                        </path>
                        <path fill="#f7f7f7"
                            d="M482.5 574h-129c-1.7 0-3.1 1.4-3.1 3.1 0 1.7 1.4 3.1 3.1 3.1h129.1c1.7 0 3.1-1.4 3.1-3.1-.1-1.7-1.5-3.1-3.2-3.1z">
                        </path>
                        <path fill="#0b4870"
                            d="m588.6 675-.1 16.1s2 10.3 3.7 21.3c1.6 11 2.9 22.7 1.2 25.4-3.3 5.4-9.8 0-10.9-5.4-1.1-5.4-2.7-39.1-2.7-39.1l-1.1-21.7 9.9 3.4zM605 672.8l-2.5 14.5s-4.9 39.6-2.2 45.6 11.4 3.3 10.9-4.9c-.5-8.1 1.6-36.9 1.6-36.9l4.9-17.4-12.7-.9z">
                        </path>
                        <path fill="#0b4870"
                            d="m598.3 496.3-1.2 17.8 46 22.2c8.3 4.5 12.3 14.2 9.6 23.2l-31.8 118.3-15.8-5L619 564c1-6.7-3.6-12.9-10.3-14l-16.4-2.6-17.4-17.8 20.2 18.1c4.9 4.4 7.3 10.9 6.4 17.4L588.6 675l-14.3 3.6-6.4-108.1c-.5-6.9-5.1-12.7-11.6-14.8l-28.3-9c-4.5-2.7-7.3-7.6-7.5-12.9l1.2-38.1 76.6.6z">
                        </path>
                        <path fill="#ffbe55"
                            d="m518.7 536.2 7.6-147.8s31.4-1.9 40.8-1.9c5.1 0 13.8 2.4 20.7 4.6 6.5 2.1 11.8 1.9 15 7.9l51.5 98.8-31.7 3-10.6-12 5.4-8.1-19.3-45.4 3.8 82.5-83.2 18.4z">
                        </path>
                        <path fill="#0f0f0f"
                            d="M598.8 417.3 633 479l-10.6 12.5s-4.3.9-8.4-.5l-1.9-2.2 5.4-8.1-19.3-45.4.6-18z"
                            opacity=".08"></path>
                        <path fill="#fff"
                            d="M568.4 431.2c-10.4 0-29.4-27.1-29.4-37.5 0-2.1.4-4.1 1-6 9.7-.5 21.8-1.1 27.1-1.1 2.3 0 5.3.5 8.6 1.2.6 1.9 1 3.8 1 5.9-.1 10.4 2.1 37.5-8.3 37.5z">
                        </path>
                        <path fill="#0f0f0f" d="m522.5 414-3.8 123.1 50.8-12.2z" opacity=".08"></path>
                        <path fill="#fcd2b1"
                            d="M570.2 371.4c-.9 1.8-7.1 26-7.1 26s-2.2 4-7.5 3.5c-5.3-.4-7.5-7.9-7.5-7.9l9.3-30.4 12.8 8.8z">
                        </path>
                        <path fill="#ffbcc6"
                            d="M537.6 356.5c0 16.7 17.7 35.2 34.4 35.2s26-18.5 26-35.2c0-16.7-13.5-30.2-30.2-30.2-16.7-.1-30.2 13.5-30.2 30.2z">
                        </path>
                        <circle cx="568.5" cy="358.9" r="34" fill="#ffe3ca"
                            transform="rotate(-9.259 568.625 358.984)"></circle>
                        <path fill="#ffe3ca"
                            d="M562.1 522c1.3-.4 12.5-5.9 20.4-5.9 7.9 0 17.6 8.4 17.6 8.4s1.3 4.4-4 3.5c-5.3-.9.7 3.3.7 3.3s-.3.2-6.5 1.1c-6.2.9-30.2-.4-30.2-.4l2-10z">
                        </path>
                        <path fill="#ffbe55"
                            d="m526.3 388.5-4.3 97.2 40 36.2-1.9 10.2-56.3-30.1c-5.4-2.9-8.5-8.9-7.7-15l10.3-74.4c.8-9.3 6.5-17.5 14.8-21.6l5.1-2.5zM558 540.4h101.8v-7.5H558c-2.1 0-3.7 1.7-3.7 3.7-.1 2.1 1.6 3.8 3.7 3.8z">
                        </path>
                        <path fill="#ffbe55"
                            d="M585.9 540.4h98.2c4.3 0 8.1-2.9 9.3-7.1l17.3-65.3c1.6-6.1-3-12-9.3-12h-85.7c-4.3 0-8.1 2.9-9.3 7.1l-20.5 77.3z">
                        </path>
                        <path fill="#fff"
                            d="M585.9 540.4h98.2c4.3 0 8.1-2.9 9.3-7.1l17.3-65.3c1.6-6.1-3-12-9.3-12h-85.7c-4.3 0-8.1 2.9-9.3 7.1l-20.5 77.3z"
                            opacity=".22"></path>
                        <path fill="#fff"
                            d="M643.7 504c-1.1 4.3 1.6 7.7 6 7.7s8.8-3.5 9.9-7.7c1.1-4.3-1.6-7.7-6-7.7-4.4-.1-8.8 3.4-9.9 7.7z">
                        </path>
                        <path fill="#2a94f4"
                            d="M568.5 324.9c17.5 0 31.8 13.2 33.8 30.1-5.9 4.4-13.6 6.3-20.9 5.1-8.6-1.5-16.3-7.4-19.9-15.3.3 3.8.5 7.6-.1 11.3-.6 3.7-2.2 7.4-5.2 9.8-.2-2.6-.5-5.4-1.8-7.7-1.4-2.3-4.3-3.9-6.7-2.9-1.8.7-2.9 2.5-3.2 4.4-.3 1.9.2 3.8.9 5.6 1.1 2.8 2.7 5.4 4.7 7.5-4 .6-8.3 1.1-12.3.7-2.1-4.5-3.4-9.4-3.4-14.7 0-18.7 15.3-33.9 34.1-33.9z">
                        </path>
                        <path fill="#ffe3ca"
                            d="M539.2 364.5c0 5.7 4.6 10.3 10.3 10.3 5.7 0 10.3-4.6 10.3-10.3s-4.6-10.3-10.3-10.3c-5.6 0-10.3 4.6-10.3 10.3zM605 672.8l-1.8 10.9 10.8 3.4 3-10.7zM588.5 687.1l-9 1.7-.5-11.4 9.6-2.4z">
                        </path>
                        <circle cx="549.5" cy="325.4" r="15.2" fill="#2a94f4"></circle>
                    </svg>
                </div>
            </div>

            <div class="md:flex md:flex-wrap mt-24 text-center md:-mx-4">
                <div class="md:w-1/2 md:px-4 lg:w-1/2">
                    <div class="bg-white rounded-lg border border-gray-300 p-8 drop-shadow-md shadow-md mb-10">

                        <h4 class="text-xl font-bold mt-4">Rekayasa Perangkat Lunak</h4>
                        <p class="mt-4">Rekayasa perangkat lunak adalah bidang yang berkaitan dengan pengembangan
                            perangkat lunak yang efektif dan efisien dalam memenuhi kebutuhan pengguna dan memecahkan
                            masalah bisnis atau teknis. Tujuan utama dari rekayasa perangkat lunak adalah menghasilkan
                            perangkat lunak berkualitas tinggi yang dapat diandalkan, mudah dipelihara, dan disesuaikan
                            dengan kebutuhan bisnis atau teknis.</p>

                    </div>
                </div>

                <div class="md:w-1/2 md:px-4 mt-4 md:mt-0 lg:w-1/2">
                    <div class="bg-white rounded-lg border border-gray-300 p-8 drop-shadow-md shadow-md mb-10">


                        <h4 class="text-xl font-bold mt-4">Data Mining</h4>
                        <p class="mt-4">Rekayasa perangkat lunak adalah bidang yang berkaitan dengan pengembangan
                            perangkat lunak yang efektif dan efisien dalam memenuhi kebutuhan pengguna dan memecahkan
                            masalah bisnis atau teknis. Tujuan utama dari rekayasa perangkat lunak adalah menghasilkan
                            perangkat lunak berkualitas tinggi yang dapat diandalkan, mudah dipelihara, dan disesuaikan
                            dengan kebutuhan bisnis atau teknis.</p>

                    </div>
                </div>

                <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-4 lg:w-1/2">
                    <div class="bg-white rounded-lg border border-gray-300 p-8 drop-shadow-md shadow-md mb-10">

                        <h4 class="text-xl font-bold mt-4">Sistem Informasi Geografis</h4>
                        <p class="mt-4">Sistem Informasi Geografis (GIS) adalah bidang yang berkaitan dengan
                            teknologi
                            pengolahan data spasial atau geografis untuk analisis dan pemetaan. Sistem Informasi Geografis memanfaatkan
                            teknologi informasi dan komputer untuk mengumpulkan, menyimpan, mengelola, dan menganalisis
                            data geografis dalam bentuk digital.</p>

                    </div>
                </div>

                <div class="md:w-1/2 md:px-4 mt-4 md:mt-8 lg:mt-4 lg:w-1/2 ">
                    <div class="bg-white rounded-lg border border-gray-300 p-8 drop-shadow-md shadow-md mb-10">


                        <h4 class="text-xl font-bold mt-4">Jaringan</h4>
                        <p class="mt-4">Bidang minat jaringan (networking) adalah bidang yang berkaitan dengan
                            komunikasi data antara perangkat dan sistem yang terhubung dalam sebuah jaringan. Tujuan
                            utama dari bidang jaringan adalah untuk memastikan jaringan dapat bekerja
                            dengan efisien dan efektif, serta aman dari ancaman keamanan yang berpotensi merusak.</p>

                    </div>
                </div>
            </div>
        </section>
        <!-- end about -->

        <x-footer />
    </main>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>


</html>
