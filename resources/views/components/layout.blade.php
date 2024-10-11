<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Sistem M.K.A</title>
</head>

<body class="h-full">


    <div class="min-h-full">
        <x-navbar></x-navbar>

        <x-header>{{ $title }}</x-header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                {{ $slot }}
            </div>
        </main>
    </div>


    <script>
        const servoSlider = document.getElementById('servo-slider');
        const textServo = document.getElementById('servo-text');

        servoSlider.addEventListener('input', () => {
            textServo.textContent = `${servoSlider.value}°`;
        });

        const btnSubmit = document.getElementById('btn-submit');
        const inputLcd = document.getElementById('input-lcd');

        btnSubmit.addEventListener('click', () => {
            const textValue = inputLcd.value;

            if (!textValue) {
                alert('Teks harus diisi');
            } else {
                alert(`text value => ${textValue}`);
            }
        });
    </script>

    <script src="https://unpkg.com/mqtt@5.10.1/dist/mqtt.min.js"></script>
    <script>
        const clientId = Math.random().toString(16).substring(2, 8)
        const host = "wss://broker.emqx.io:8084/mqtt"

        const options = {
            keepalive: 30,
            clientId: clientId,
            protocolId: 'MQTT',
            protocolVersion: 4,
            clean: true,
            reconnectPeriod: 1000,
            connectTimeout: 30 * 1000,
        }

        console.log("Menghubungkan ke broker");
        const client = mqtt.connect(host, options);
        client.subscribe("hjn/#", {qos: 1});

        client.on("connect", ()=>{
            console.log("Terhubung ke broker");
        })

        client.on("message", (topic, message)=>{
            if(topic === "hjn/suhu"){
                document.getElementById("suhu").innerHTML = message + "°C";
            }
            if(topic === "hjn/kelembaban"){
                document.getElementById("kelembapan").innerHTML = message + "%";
            }
        })
    </script>

</body>

</html>
