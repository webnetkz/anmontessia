window.onload = function () {
    document.forms.loginForm.onsubmit = function (e) {
        e.preventDefault();

        let login = document.forms.loginForm.login.value;
        login = encodeURIComponent(login);
        let pass = document.forms.loginForm.pass.value;
        pass = encodeURIComponent(pass);

        var xhr = new XMLHttpRequest();

        xhr.open('POST', '/account/login');

        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Обработка запроса на сервер
        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4 && xhr.status === 200) {
                // Полученый ответ от сервера
                if(xhr.responseText == 'authLogin0') {
                    location.href = '/admin/panel';
                } else if (xhr.responseText == 'authLogin1') {
                    location.href = '/main/index';
                } else {
                    modalWindow(xhr.responseText);
                }
            }
        }

        // Отправка запроса на сервер
        xhr.send('login=' + login + '&pass=' + pass);
    }
};