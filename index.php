<!DOCTYPE html>
<html>
<head>
    <title>Web Project</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px; /* Margem do topo */
            margin: 0;
        }

        #info {
            text-align: left;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            max-width: 400px;
        }
    </style>
    <script>
        function mostrarInfo() {
            var ip = '<?php echo $_SERVER["REMOTE_ADDR"]; ?>';
            var data = '<?php echo date("Y-m-d"); ?>';
            var hora = '<?php echo date("H:i:s"); ?>';
            var userAgent = navigator.userAgent;
            var language = navigator.language;
            var screenWidth = window.screen.width;
            var screenHeight = window.screen.height;
            var deviceType = /Mobile/.test(userAgent) ? 'Mobile' : 'Desktop';
            var os = navigator.platform;
            var connectionType = navigator.connection ? navigator.connection.effectiveType : 'N/A';
            var currentURL = window.location.href;
            var geoLocationAvailable = navigator.geolocation ? 'Disponível' : 'Não disponível';

            var infoDiv = document.getElementById("info");
            infoDiv.innerHTML = `
                <strong>Informações:</strong><br>
                IP: ${ip}<br>
                Data: ${data}<br>
                Hora: ${hora}<br>
                Navegador: ${userAgent}<br>
                Idioma do navegador: ${language}<br>
                Resolução da Tela: ${screenWidth}x${screenHeight}<br>
                Tipo de Dispositivo: ${deviceType}<br>
                Sistema Operacional: ${os}<br>
                Tipo de Conexão: ${connectionType}<br>
                URL Atual: ${currentURL}<br>
            `;
        }

        setInterval(mostrarInfo, 1000);
    </script>
</head>
<body>
    <div id="info"></div>
</body>
</html>
