function redWA() {

    var options = {
        year: 'numeric',
        month: 'numeric',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        timezone: 'UTC'
    };

    const name = document.getElementById("form__name").value;
    const email = document.getElementById("form__email").value;
    const tel = document.getElementById("form__phone").value;
    const msg = document.getElementById("form__message").value;

    const date = new Date()

    let text = `Новая заявка: ${date.toLocaleString("ru", options)}\r\nИмя: ${name}\r\nПочта: ${email}\r\nНомер телефона: ${tel}\r\nПроблема: ${msg}`;
    // let text = `Новая заявка: ${date.toLocaleString("ru", options)}\r\n\Имя: ${name}\r\n\Почта: ${email}\r\n\Номер телефона: ${tel}`;

    let url = `https://api.whatsapp.com/send/?phone=79258517902&text=${encodeURIComponent(text)}&type=phone_number&app_absent=0`

    window.open(url);
}