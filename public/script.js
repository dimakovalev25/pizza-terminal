// считаем цену без подгрузки курса с НБРБ

document.getElementById("order-form").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    axios.post('/index.php', formData)
        .then(response => {
            if (typeof response.data === "object") {
                document.getElementById("receipt").innerHTML = `
                    <h3>Чек заказа</h3>
                    <p>${response.data.message}</p>
                    <p><strong>${response.data.total}</strong></p>
                `;
            } else {
                document.getElementById("receipt").innerHTML = "<p>Ошибка обработки заказа</p>";
            }
        })
        .catch(error => {
            console.error("Ошибка при заказе:", error);
            document.getElementById("receipt").innerHTML = "<p>Ошибка отправки заказа</p>";
        });
});


// цена с учетом подгрузки курса с api НБРБ, конечно тут нужно создавать сервис дополнительный

// document.getElementById("order-form").addEventListener("submit", function(event) {
//     event.preventDefault();
//
//     let formData = new FormData(this);
//
//     axios.post('/index.php', formData)
//         .then(response => {
//             if (response.data && response.data.total) {
//
//                 //взял с инета
//                 const priceInUSD = parseFloat(response.data.total.replace(/[^\d.-]/g, ''));
//
//                 axios.get('https://api.nbrb.by/exrates/rates/USD?parammode=2')
//                     .then(rateResponse => {
//                         const priceInBYN = (priceInUSD * rateResponse.data.Cur_OfficialRate).toFixed(2);
//                         document.getElementById("receipt").innerHTML = `
//                             <h3>Чек заказа</h3>
//                             <p>${response.data.message}</p>
//                             <p><strong>${priceInBYN} BYN</strong></p>
//                         `;
//                     })
//                     .catch(() => document.getElementById("receipt").innerHTML = "<p>Ошибка при получении курса валют</p>");
//             } else {
//                 document.getElementById("receipt").innerHTML = "<p>Ошибка обработки заказа</p>";
//             }
//         })
//         .catch(() => document.getElementById("receipt").innerHTML = "<p>Ошибка отправки заказа</p>");
// });
