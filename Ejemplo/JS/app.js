const contenedorQR = document.getElementById("contenedorQR");
const formulario = document.getElementById('formulario');

const QR = new QRCode(contenedorQR);

const numerosGenerados = new Set(); // Utilizamos un conjunto para almacenar los números generados

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    let numeroAleatorio;
    do {
        numeroAleatorio = Math.floor(Math.random() * 1000);
    } while (numerosGenerados.has(numeroAleatorio)); // Generamos números hasta que obtengamos uno que no esté en el conjunto

    numerosGenerados.add(numeroAleatorio); // Agregamos el número generado al conjunto de números generados
    const valorQR = `https://ejemplo.com/${numeroAleatorio}`;
    QR.makeCode(valorQR);
});