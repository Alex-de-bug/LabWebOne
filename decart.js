window.onload = function () {
    drawG();
}
const canvas = document.getElementById("coordinate-system");
const ctx = canvas.getContext("2d");

function drawG(){
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    canvas.width = 500;
    canvas.height = 500;

    const radius = 200;

    const centerX = canvas.width / 2;
    const centerY = canvas.height / 2;

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    const pointRadius = 3;

    ctx.strokeStyle = "#000000";
    ctx.lineWidth = 2;
    ctx.fillStyle = "red";

    // x
    ctx.beginPath();
    ctx.moveTo(0, centerY);
    ctx.lineTo(canvas.width, centerY);
    ctx.stroke();

    // x arrow
    ctx.beginPath();
    ctx.moveTo(canvas.width - 8, centerY - 5);
    ctx.lineTo(canvas.width, centerY);
    ctx.lineTo(canvas.width - 8, centerY + 5);
    ctx.fill();

    // sign x axis
    ctx.fillText("X", canvas.width - 10, centerY + 20);


    // y axis
    ctx.beginPath();
    ctx.moveTo(centerX, 0);
    ctx.lineTo(centerX, canvas.height);
    ctx.stroke();

    // y arrow
    ctx.beginPath();
    ctx.moveTo(centerX - 5, 10);
    ctx.lineTo(centerX, 0);
    ctx.lineTo(centerX + 5, 10);
    ctx.fill();

    // sign y axis
    ctx.fillText("Y", centerX - 20, 20);

    ctx.fillStyle = 'blue';
    ctx.strokeStyle = '#000000';
    ctx.lineWidth = 1;

    ctx.beginPath();
    ctx.moveTo(centerX, centerY);
    ctx.arc(centerX, centerY, radius, 4/2*Math.PI, 1/2*Math.PI); // Изменение углов
    ctx.fillStyle = "#00C2FFFF";
    ctx.fill();
    ctx.stroke();

    // triangle
    ctx.beginPath();
    ctx.moveTo(centerX, centerY);
    ctx.lineTo(centerX, centerY - radius / 2);
    ctx.lineTo(centerX - radius, centerY);
    ctx.fillStyle = "#00C2FFFF";
    ctx.fill();
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(centerX, centerY);
    ctx.lineTo(centerX, centerY - radius);
    ctx.lineTo(centerX + radius, centerY - radius);
    ctx.lineTo(centerX + radius, centerY);
    ctx.closePath();
    ctx.fill();
    ctx.stroke();

    ctx.beginPath();
    ctx.arc(centerX + radius, centerY, pointRadius, 0, 2 * Math.PI);
    ctx.arc(centerX + radius / 2, centerY, pointRadius, 0, 2 * Math.PI);
    ctx.arc(centerX - radius, centerY, pointRadius, 0, 2 * Math.PI);
    ctx.arc(centerX - radius / 2, centerY, pointRadius, 0, 2 * Math.PI);
    ctx.fillStyle = '#ff0000';
    ctx.fill();

    ctx.beginPath();
    ctx.arc(centerX, centerY + radius, pointRadius, 0, 2 * Math.PI);
    ctx.arc(centerX, centerY + radius / 2, pointRadius, 0, 2 * Math.PI);
    ctx.arc(centerX, centerY - radius, pointRadius, 0, 2 * Math.PI);
    ctx.arc(centerX, centerY - radius / 2, pointRadius, 0, 2 * Math.PI);
    ctx.fillStyle = '#ff0000';
    ctx.fill();
}

function drawPoint(x,y,r) {
    const scale = 400 / 2;
    x = scale / r * x + scale + 50;
    y = 300 - (scale / r * y + scale - 150);
    ctx.beginPath();
    ctx.arc(x, y, 3, 0, 2 * Math.PI);
    ctx.fillStyle = '#030000';
    ctx.fill();
}